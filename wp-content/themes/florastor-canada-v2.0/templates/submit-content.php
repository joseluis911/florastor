<?php /* Template Name: Contact Submit */ ?>
<?php get_header('contact'); ?>
<?php get_header(); ?>

<?php 

	$name = $_POST['contact_name'];
	$email = $_POST['contact_email'];
	$subject = $_POST['contact_subject'];	
	$message = $_POST['contact_msg'];
	
	$CS_EMAIL = "a.mccall@biocodex.com";
	$headers = 'From: customer@florastor.com';
	$sub = "New Message From Florastor.com";
	$url = "http://florastor.com/";

	// echo "you entered:" . $name;
	// echo $email;
	// echo $subject;
	// echo $message;

	$body = "Hi there, a customer has sent you a message on Florastor.com. Here's the details:
			\nName: " . $name . "\nEmail: " . $email . "\nSubject: " . $subject . "\n\nMessage:\n" . $message . "\n\nEND OF MESSAGE\n";

	$status = mail($CS_EMAIL, $sub, $body, $headers);
	if($status)
		echo "<h1>Your Message Has Been Sent!</h1><h3>Thanks for reaching out, we should reply to the email provided within 3 business days.</h3><br><h3><a href='" . $url . "'>Return to Florastor Home</a></h3>";
	else {
		echo $status;
	}


?>

<?php get_footer(); ?>