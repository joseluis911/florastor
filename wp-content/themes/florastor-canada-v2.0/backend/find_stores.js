//<![CDATA[
  var map;
  var markers = [];
  var infoWindow;
  var locationSelect;
  var storeList;
  var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  var labelIndex = 0;
  var html_title;
    function load() {
      map = new google.maps.Map(document.getElementById("map-box"), {
        center: new google.maps.LatLng(60, -110),
        zoom: 3,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        styles: [
          {"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},
          {"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},
          {"featureType":"poi","elementType":"labels","stylers":[{"visibility":"on"}]},
          {"featureType":"poi.business","elementType":"geometry","stylers":[{"visibility":"on"}]},
          {"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},
          {"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},
          {"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},
          {"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},
          {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},
          {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},
          {"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},
          {"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},
          {"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]},
          {"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]}
        ]
      });
      infoWindow = new google.maps.InfoWindow();
      locationSelect = document.getElementById("locationSelect");
      storeList = document.getElementById("storeList");
      storeList.innerHTML = "<p style='padding: 10px 0px 0px 10px;'>Results Shown Here</p><em style='padding: 0px 0px 0px 10px;'>Please enter an address above.</em>";      locationSelect.onchange = function() {
        var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
        if (markerNum != "none"){
          google.maps.event.trigger(markers[markerNum], 'click');
        }
      };
   }
   function searchLocations() {
     var address = document.getElementById("addressInput").value;
     var geocoder = new google.maps.Geocoder();
     geocoder.geocode({address: address}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
        searchLocationsNear(results[0].geometry.location);
       } else {
         alert(address + ' not found');
       }
     });
   }
   function clearLocations() {
     if(infoWindow){
        infoWindow.close();
      }
     for (var i = 0; i < markers.length; i++) {
       markers[i].setMap(null);
     }
     markers.length = 0;
     locationSelect.innerHTML = "";
     storeList.innerHTML = "";
     var option = document.createElement("option");
     option.value = "none";
     option.innerHTML = "See all results:";
     locationSelect.appendChild(option);
     labelIndex = 0;
   }
   function searchLocationsNear(center) {
     clearLocations(); 
     var radius = document.getElementById('radiusSelect').value;
     // var searchUrl = 'http://florastor.ca/wp-content/themes/florastor-canada-v2.0/backend/genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
     var searchUrl = '/wp-content/themes/florastor-canada-v2.0/backend/genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
     downloadUrl(searchUrl, function(data) {
       var xml = parseXml(data);
       var markerNodes = xml.documentElement.getElementsByTagName("marker");
       var bounds = new google.maps.LatLngBounds();
       for (var i = 0; i < markerNodes.length; i++) {
         var store_name = markerNodes[i].getAttribute("store_name");
         var address = markerNodes[i].getAttribute("address");
         var city = markerNodes[i].getAttribute("city");
         var state = markerNodes[i].getAttribute("state");
         var zipcode = markerNodes[i].getAttribute("zipcode");
         var distance = parseFloat(markerNodes[i].getAttribute("distance"));
         var latlng = new google.maps.LatLng(
              parseFloat(markerNodes[i].getAttribute("lat")),
              parseFloat(markerNodes[i].getAttribute("lng")));
         createOption(store_name, address, city, state, zipcode, distance, i);
         createMarker(latlng, store_name, address, city, state, zipcode);
         bounds.extend(latlng);
       }
       if (markers.length == 0){ storeList.innerHTML = "No results found; Please try searching a larger radius, and check to make sure you've typed your address correctly."}
       map.fitBounds(bounds);
       locationSelect.style.visibility = "visible";
       locationSelect.onchange = function() {
         var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
         google.maps.event.trigger(markers[markerNum], 'click');
       };
      });
    }
  
    function createMarker(latlng, store_name, address, city, state, zipcode) {
      var html = html_title;
      var directions = "<br><a class='d-link' href='http://maps.google.com/maps?saddr=" + document.getElementById("addressInput").value + "&daddr=" + address + " " + city + " " + state + "' target='_blank'>Get Directions</a>";
 
      html += "<b>" + labels[labelIndex % labels.length] + ". " + store_name + "</b></div><div class='iw-line'></div><div class='iw-body'>" + address + "<br>" + city + ", " + state + " " + zipcode + directions + "</div>";
      var icon = {
          url: "/wp-content/themes/florastor-canada-v2.0/images/marker" + labels[labelIndex++ % labels.length] + ".png",
          scaledSize: new google.maps.Size(26, 42), // scaled size
          origin: new google.maps.Point(0,0), // origin
          anchor: new google.maps.Point(0, 0) // anchor
      };
      var marker = new google.maps.Marker({
        map: map,
        position: latlng,
        //label: labels[labelIndex++ % labels.length]
        //icon: "http://maps.google.com/mapfiles/marker" + labels[labelIndex++ % labels.length] + ".png"
        icon: icon
      });
      google.maps.event.addListener(marker, 'click', function() {
        //map.setCenter(marker.getPosition());
        map.panTo(marker.getPosition());
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
      markers.push(marker);
    }
    function createOption(store_name, address, city, state, zipcode, distance, num) {
      var option = document.createElement("option");
      var list_object = document.createElement("a");
      list_object.href ="javascript:setMark('" + num + "')";
      list_object.className = "list-group-item";
      var color_name;
      var list_logo = "";
//ADD SWITCH HERE
      switch(store_name){
        case 'Walmart':
        case 'Walmart Supercenter':
            html_title = "<div id='walmart'></div>";
            list_logo = "<span class='pull-right list-logo' id='walmart'></span>";
            // color_name = "#007dc6";
            break;
        case 'Neighborhood Market':
            html_title = "<div id='nmarket'></div>";
            list_logo = "<span class='pull-right list-logo' id='nmarket'></span>";
            // color_name = "#76c043";
            break;
        case 'Community Pharmacy':
        case 'Health System Pharmacy':        
        case 'Walgreens':
            html_title = "<div id='walgreens'></div>";
            list_logo = "<span class='pull-right list-logo' id='walgreens'></span>";
            // color_name = "#f20017";
            break;
        case 'Rite Aid':
            html_title = "<div id='riteaid'></div>";
            list_logo = "<span class='pull-right list-logo' id='riteaid2'></span>";
            // color_name = "#004f99";
            break;
        case 'Albertsons':
            html_title = "<div id='albertsons'></div>";
            list_logo = "<span class='pull-right list-logo' id='albertsons'></span>";
            // color_name = "#009fdf";
            break;
        case 'Safeway':
            html_title = "<div id='safeway'></div>";
            list_logo = "<span class='pull-right list-logo' id='safeway'></span>";
            // color_name = "#fa2830";
            break;
        case 'CVS Pharmacy':
            html_title = "<div id='cvs'></div>";
            list_logo = "<span class='pull-right list-logo' id='cvs'></span>";
            // color_name = "#cc0000";
            break;
        case 'Target':
            html_title = "<div id='target'></div>";
            list_logo = "<span class='pull-right list-logo' id='target'></span>";
            // color_name = "#cc0000";
            break;
        case 'Kroger':
        case 'Kroger Fresh Fare':
        case 'Kroger Marketplace':
            html_title = "<div id='kroger'></div>";
            list_logo = "<span class='pull-right list-logo' id='kroger2'></span>";
            // color_name = "#0468b3";
            break;
        case 'Harris Teeter':
            html_title = "<div id='harris-t'></div>";
            list_logo = "<span class='pull-right list-logo' id='harris-t'></span>";
            // color_name = "#00795c";
            break;
        case 'Meijer':
            html_title = "<div id='meijer'></div>";
            list_logo = "<span class='pull-right list-logo' id='meijer'></span>";
            // color_name = "#d51a1d";
            break;
        case 'Bartell Drugs':
            html_title = "<div id='bartell'></div>";
            list_logo = "<span class='pull-right list-logo' id='bartell'></span>";
            // color_name = "#c42333";
            break;
        case 'Giant Eagle':
            html_title = "<div id='g-eagle'></div>";
            list_logo = "<span class='pull-right list-logo' id='g-eagle2'></span>";
            // color_name = "#cd2031";
            break;
        case 'Brookshire\'s':
            html_title = "<div id='brookshires'></div>";
            list_logo = "<span class='pull-right list-logo' id='brookshires'></span>";
            // color_name = "#55b84b";
            break;
        case 'HEB Grocery':
            html_title = "<div id='heb'></div>";
            list_logo = "<span class='pull-right list-logo' id='heb'></span>";
            // color_name = "#ee2e23";
            break;
        case 'Publix':
            html_title = "<div id='publix'></div>";
            list_logo = "<span class='pull-right list-logo' id='publix'></span>";
            // color_name = "#3e902c";
            break;
        case 'Kinney Drugs':
            html_title = "<div id='kinneyd'></div>";
            list_logo = "<span class='pull-right list-logo' id='kinneyd'></span>";
            // color_name = "#0e2c71";
            break;
        case 'Super Stop & Shop':
        case 'Stop & Shop':
            html_title = "<div id='stopnshop'></div>";
            list_logo = "<span class='pull-right list-logo' id='stopnshop'></span>";
            // color_name = "#781c7d";
            break;
        case 'Giant Food':
            html_title = "<div id='gfood'></div>";
            list_logo = "<span class='pull-right list-logo' id='gfood'></span>";
            // color_name = "#712978";
            break;
        case 'Giant Food Stores':
        case 'Martin\'s Food Markets':
            html_title = "<div id='gfoodstores'></div>";
            list_logo = "<span class='pull-right list-logo' id='gfoodstores'></span>";
            // color_name = "#ec0928";
            break;
        case 'City Market':
            html_title = "<div id='citymarket'></div>";
            list_logo = "<span class='pull-right list-logo' id='citymarket'></span>";
            break;
        case 'Dillons':
        case 'Dillons Marketplace':
            html_title = "<div id='dillons'></div>";
            list_logo = "<span class='pull-right list-logo' id='dillons'></span>";
            break;
        case 'Fred Meyer':
            html_title = "<div id='fredmeyer'></div>";
            list_logo = "<span class='pull-right list-logo' id='fredmeyer'></span>";
            break;
        case 'Fry\'s Food And Drug':
            html_title = "<div id='frys'></div>";
            list_logo = "<span class='pull-right list-logo' id='frys'></span>";
            break;
        case 'King Soopers':
            html_title = "<div id='ksoopers'></div>";
            list_logo = "<span class='pull-right list-logo' id='ksoopers2'></span>";
            break;
        case 'Quality Food Center':
            html_title = "<div id='qfc'></div>";
            list_logo = "<span class='pull-right list-logo' id='qfc2'></span>";
            break;
        case 'Ralphs':
        case 'Ralphs Fresh Fare':
            html_title = "<div id='ralphs'></div>";
            list_logo = "<span class='pull-right list-logo' id='ralphs'></span>";
            break;
        case 'Smith\'s':
        case 'Smith\'s Marketplace':
        case 'Smith\'s Express':
            html_title = "<div id='smiths'></div>";
            list_logo = "<span class='pull-right list-logo' id='smiths'></span>";
            break;
        case 'Duane Reade':
            html_title = "<div id='dreade'></div>";
            list_logo = "<span class='pull-right list-logo' id='dreade'></span>";
            break;
        default:
            html_title = "<div id=''></div>";
            list_logo = "<span class='pull-right list-logo' id=''></span>";

      }//switch

      //list_object.style.borderRight = "40px solid " + color_name;
      option.value = num;
      option.innerHTML = store_name + "(" + distance.toFixed(1) + ")";
      list_object.innerHTML = "<div class='row'><div class='numberCircle col-sm-2 col-xs-12'>" + labels[labelIndex % labels.length] + "</div><div class='col-sm-8 col-xs-12'>" + "<div class='store-title'>" + store_name + "</div>" + address + "<br>" + city + ", " + state + " " + zipcode + "<br><em>(" + distance.toFixed(1) + " kilometers)</em>" + "</div>" + list_logo + "</div>";
     // list_object.innerHTML += "<div class='row'><div class='numberCircle col-sm-1'>" + labels[labelIndex % labels.length] + "</div><div class='col-sm-offset-2'>" + "<div class='store-title'>" + store_name + "</div>" + address + "<br>" + city + ", " + state + " " + zipcode + "<br><em>(" + distance.toFixed(1) + " miles)</em>" + "<br><a class='d-link' href='http://maps.google.com/maps?saddr=" + document.getElementById("addressInput").value + "&daddr=" + address + " " + city + " " + state + "' target='_blank'>Get Directions</a>" + "</div></div></div>";
      locationSelect.appendChild(option);
      storeList.appendChild(list_object);
    }
    function setMark(number) {

      google.maps.event.trigger(markers[number], 'click');
      markers[number].setAnimation(google.maps.Animation.BOUNCE);
      setTimeout(function(){ markers[number].setAnimation(null); }, 710);

    }
    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;
      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };
      request.open('GET', url, true);
      request.send(null);
    }
    function parseXml(str) {
      if (window.ActiveXObject) {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
      } else if (window.DOMParser) {
        return (new DOMParser).parseFromString(str, 'text/xml');
      }
    }
    function doNothing() {}
  //]]>