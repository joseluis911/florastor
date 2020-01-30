<?php /* Template Name: Contact Submit */ ?>
<?php get_header('contact'); ?>
<?php get_header(); ?>

<?php 

if(isset($_POST['form-submit'])){ 

	$name = $_POST['contact_name'];
//	$email = $_POST['contact_email'];
    $email = filter_var($_POST["contact-email"], FILTER_SANITIZE_STRING);
	$subject = $_POST['contact_subject'];	
//	$message = $_POST['contact_msg'];
    $message = filter_var($_POST["contact_msg"], FILTER_SANITIZE_STRING);
	
	$CS_EMAIL = "a.mccall@biocodex.com"; // customer service email
//	$headers = 'From: customer@florastor.com';
    $from_email = "admin@florastor.com";
	$sub = "New Message From Florastor US";
	$url = "https://florastor.com/";
    $eol = PHP_EOL;
//    
    
	 echo "you entered:" . $name;
	 echo $email;
	 echo $subject;
	 echo $message;
    
    $msg_body = "<p style='font-size: 1.2em;'>Hi there! a customer has sent you a message on Florastor.com <br>Here's the details:<br>".$eol.$eol;
    $msg_body .= "<br>Name: " . $name . $eol;
    $msg_body .= "<br>Email: " . $email . $eol;
    $msg_body .= "<br>Subject: " . $subject .$eol;
    $msg_body .= "<br><br>Message: " . $message .$eol.$eol;
//    $msg_body .= "<br><br>Attachment: " . $_FILES["my_file"]["name"] . "</p>" .$eol;
    $msg_body .= "<br><br><br><hr><br>This message is automated. Please do not reply to sender address.<br>Florastor US || florastor.com";
    
    $encoded_content = chunk_split(base64_encode($content));

    $boundary = md5("sanwebe");
    //header
    $headers = "MIME-Version: 1.0".$eol; 
    $headers .= "From: ".$from_email.$eol; 
    $headers .= "Reply-To: ".$email."" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary".$eol.$eol; 

    //plain text 
    $body = "--$boundary".$eol;
    $body .= "Content-Type: text/html; charset=ISO-8859-1".$eol;
    $body .= "Content-Transfer-Encoding: base64".$eol.$eol; 
    $body .= chunk_split(base64_encode($msg_body)); 
    $body .= $eol.$eol;

    //attachment
//    $body .= "--$boundary".$eol;
//    $body .="Content-Type: $file_type; name=".$file_name.$eol;
//    $body .="Content-Disposition: attachment; filename=".$file_name.$eol;
//    $body .="Content-Transfer-Encoding: base64".$eol;
//    $body .="X-Attachment-Id: ".rand(1000,99999).$eol.$eol; 
//    $body .= $encoded_content; 
//    
//	$body = "Hi there, a customer has sent you a message on Florastor.com. Here's the details:
//			\nName: " . $name . "\nEmail: " . $email . "\nSubject: " . $subject . "\n\nMessage:\n" . $message . "\n\nEND OF MESSAGE\n";

	$status = mail($CS_EMAIL, $sub, $body, $headers);
	
    if($status)
        echo "<div class='bg-0'><div class='container'>"
		. "<br><br><br><br><br><br><br><br><h1 class='gradient'>Your Message Has Been Sent!</h1><br>"
        . "<p class='lead text-center'>Thank you for your interest in Florastor<sup>&reg;</sup>. Our customer service team will respond to your message within 1 business day.</p>"
        . "<br><h3><a href='" . $url . "'>Return to Florastor Home</a></h3>"
        . "</div></div><br><br><br><br><br><br><br><br>";
	else {
		echo $status;
	}

}//check if form was submitted  
    
?>

<?php get_footer(); ?>