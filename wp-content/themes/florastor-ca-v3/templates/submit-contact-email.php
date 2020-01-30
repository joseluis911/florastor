<?php /* Template Name: Contact Email Submit */ ?>
<?php get_header('coupons'); ?>
<?php get_header(); ?>

<?php 

if(isset($_POST['form-submit'])){ 

  $name = $_POST['contact_name'];
  $email = filter_var($_POST["contact_email"], FILTER_SANITIZE_STRING);
  $subject = $_POST['contact_subject']; 
  $message = stripslashes($_POST["contact_msg"]);
  $CS_EMAIL = "a.mccall@biocodex.com";
  $CS_EMAIL = "info-florastor@biocodex.com"; 
  // $from_email = "admin@florastor.com";
  $sub = "New Message from " . $name;
  $url = "https://florastor.ca/";
  $eol = PHP_EOL;


    $msg_body = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- USA Version 1.0 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>New Message From florastor.ca</title>
<style type="text/css">
body {
  margin-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
}
</style>
</head>
<body style="margin: 0;" bgcolor="#e6e6e6">
<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; font-family: Arial, Helvetica, sans-serif; border: 1px solid #cccccc;">
  <!-- Header Row -->
  <tr>
    <td align="center" bgcolor="#ffffff">
      <table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="540" align="center" bgcolor="#ffffff" style="padding: 40px 10px 0 40px ; color:#00254a; text-align: left;"><h3 style="font-family: Arial;font-weight: lighter;">New Message from Florastor CA</h3></td>
        </tr>
        <tr>
          <td width="600" align="center" style="color:#00254a; font-size: 1.1em; padding: 0px 10px 10px 10px;"><table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="540" valign="top" style="padding: 0px 10px 25px 10px; color:#444444;line-height:150%;">
                  <br>
                  From: ' . $name . '<br>
                  Email: ' . $email . $eol . '<br>
                  Subject: ' . $subject . '<br><br>
                  Message: ' . $message . $eol . '
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="600" align="center" bgcolor="#00254a" style="color:#ffffff; font-size: 0.9em; line-height: 1.3em;">
      <table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="540" style="padding: 40px 10px 40px 10px; font-family: Arial; color: #ffffff;line-height:150%;">
            Florastor.ca
            <br><br>
            Biocodex North America
            <br>
            255 Shoreline Drive, Suite 450
            <br>
            Redwood City, CA 94065
            <br>
            Phone: (650) 243-5320
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>';   
    
    $encoded_content = chunk_split(base64_encode($content));

    $boundary = md5("sanwebe");
    //header
    $headers = "MIME-Version: 1.0".$eol;
    $headers .= "From: Florastor Admin <".$from_email.">".$eol;
    $headers .= "Reply-To: ".$email."".$eol;
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary".$eol.$eol; 

    //plain text 
    $body = "--$boundary".$eol;
    $body .= "Content-Type: text/html; charset=ISO-8859-1".$eol;
    $body .= "Content-Transfer-Encoding: base64".$eol.$eol; 
    $body .= chunk_split(base64_encode($msg_body)); 
    $body .= $eol.$eol;

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