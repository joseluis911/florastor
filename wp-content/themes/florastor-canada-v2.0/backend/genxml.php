<?php
//Uncomment to show errors on page:
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require($_SERVER["DOCUMENT_ROOT"] . "/wp-content/themes/florastor-canada-v2.0/backend/phpdbinfo.php");

// Get parameters from URL
$center_lat = $_GET["lat"];
$center_lng = $_GET["lng"];
$radius = $_GET["radius"];
// $center_lat = 37;
// $center_lng = -121.805;
// $radius = 25;

// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

//Connect to database
$dbh = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    // Prepare statement
    // For miles: 3959 For kilometers: 6371
    $stmt = $dbh->prepare("SELECT  store_name, address, city, state, zipcode, lat, lng, ( 6371 * acos( cos( radians(?) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians(?) ) + sin( radians(?) ) * sin( radians( lat ) ) ) ) AS distance FROM stores_list_ca HAVING distance < ? ORDER BY distance LIMIT 0 , 26");

    // Assign parameters
    $stmt->bindParam(1,$center_lat);
    $stmt->bindParam(2,$center_lng);
    $stmt->bindParam(3,$center_lat);
    $stmt->bindParam(4,$radius);

    //Execute query
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    //header("Content-type: text/xml");

    // Iterate through the rows, adding XML nodes for each
    while($row = $stmt->fetch()) {
        $node = $dom->createElement("marker");
        $newnode = $parnode->appendChild($node);
        $newnode->setAttribute("store_name", $row['store_name']);
        $newnode->setAttribute("address", $row['address']);
        $newnode->setAttribute("city", $row['city']);
        $newnode->setAttribute("state", $row['state']);
        $newnode->setAttribute("zipcode", $row['zipcode']);
        $newnode->setAttribute("lat", $row['lat']);
        $newnode->setAttribute("lng", $row['lng']);
        $newnode->setAttribute("distance", $row['distance']);
    }
    echo $dom->saveXML();
 }//try
 catch(PDOException $e) {
    //echo "I'm sorry I'm afraid you can't do that.". $e->getMessage() ;// Remove or modify after testing 
    file_put_contents('PDOErrors.txt',date('[Y-m-d H:i:s]').", outxml.php, ". $e->getMessage()."\r\n", FILE_APPEND);  
 }
//Close the connection
$dbh = null; 
?>