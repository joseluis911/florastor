<?php /* Template Name: Email Submit */ ?>
<?php get_header('coupons'); ?>
<?php get_header(); ?>

<?php 

if(isset($_POST['form-submit'])){ 

    $email = filter_var($_POST["contact_email"], FILTER_SANITIZE_STRING);
  //$TEST_EMAIL = "a.mccall@biocodex.com"; // 
    // $from_email = "admin@florastor.com";
    $from_email = "donotreply@florastor.ca";
  $sub = "Coupons - Florastor Daily Probiotics";
  $url = "https://florastor.ca/";
    $eol = PHP_EOL;


    $msg_body = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Canada Version 1.0 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Florastor&reg;</title>
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
  <tr>
    <td width="600" align="center" valign="top" bgcolor="#ffffff" style="padding: 0px;"><a href="https://florastor.ca/?utm_source=coupons-email&utm_medium=email"><img src="https://www.florastor.ca/wp-content/themes/florastor-canada-v2.0/images/email-header-CA.jpg" alt="Florastor Daily Probiotic Supplement - Save up to $10" width="620" style="display: block; margin: 0 auto;"/></a></td>
  </tr>
  <!-- Header Row -->
  <tr>
    <td align="center" bgcolor="#ffffff">
      <table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="540" align="center" bgcolor="#ffffff" style="padding: 10px 10px 0 40px ; color:#0080c0; text-align: left;"><h1 style="font-family: Arial;font-weight: lighter;">Here Are Your Coupons!</h1></td>
        </tr>
        <tr>
          <td width="600" align="center" style="color:#00254a; font-size: 1.1em; padding: 0px 10px 10px 10px;"><table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="540" valign="top" style="padding: 0px 10px 25px 10px; color:#444444;line-height:150%;">
                  Thank you for your interest in Florastor Daily<sup style="font-size: 0.3em;">*</sup> Probiotics!<br><b style="color: #0080c0;">Print out the coupons below</b> to use them at one of our retailers. Save $4 on Florastor<sup style="font-size: 0.3em;">&reg;</sup> 20 Count, FlorastorKids<sup style="font-size: 0.3em;">&reg;</sup>, or FlorastorMax<sup style="font-size: 0.3em;">&reg;</sup>. Save $6 on Florastor<sup style="font-size: 0.3em;">&reg;</sup> 50 count.
                </td>
              </tr>
              <tr>
                <td width="550" valign="top" style="padding: 0px 0px 25px 0px; color:#444444;line-height:150%;"><img src="https://www.florastor.ca/wp-content/themes/florastor-ca-v3/images/CA_4_off_caps_kids_max_030120.jpg" alt="Florastor $4 Coupon" width="550" style="display: block; margin: 0 auto;"/>
                </td>
              </tr>
              <tr>
                <td width="550" valign="top" style="padding: 0px 0px 25px 0px; color:#444444;line-height:150%;"><img src="https://www.florastor.ca/wp-content/themes/florastor-ca-v3/images/CA_6_off_50_030120.jpg" alt="Florastor $6 Coupon" width="550" style="display: block; margin: 0 auto;"/>
                </td>
              </tr>
            </table></td>
        </tr>
      </table>
      <!-- </a> -->
    </td>
  </tr>
  <!-- Row 2 -->
  <tr>
    <td width="600" align="center" bgcolor="#f2f2f2" style="color:#ffffff; font-size: 1.1em; line-height: 1.3em; padding: 0px 10px 10px 10px;"><a style="text-decoration: none; color:#ffffff;" href="https://florastor.ca/where-to-buy/?utm_source=coupons-email&utm_medium=email">
      <table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="540" style="padding: 20px 10px 40px 10px; font-family: Arial; color: #444444;line-height:140%;"><h2 style="color: #0080c0;font-weight: lighter;">Visit our website to find a local retailer</h2>
            Florastor is sold nationwide, both in-store and online. Visit our <span style="color:#0080c0;">Where to Buy</span> page to find a retailer near you or to purchase Florastor online. 
            <img src="https://www.florastor.ca/wp-content/themes/florastor-canada-v2.0/images/store-btn.jpg" alt="Find a Store Link" width="270" style="display: block; margin: 0 auto; margin-top: 20px;"/>
        </td>
        </tr>
      </table>
      </a></td>
  </tr>

    <tr>
    <td width="600" align="center" bgcolor="#00254a" style="color:#ffffff; font-size: 0.9em; line-height: 1.3em;">
      <table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="540" style="padding: 40px 10px 40px 10px; font-family: Arial; color: #ffffff;line-height:150%;">
            This is an automated message. Please do not reply to this email. Emails sent to this address will not be answered.<br><br>You are receiving this email because your email address was entered in a form on our site requesting coupons. 
            <!-- To opt-out of receiving future emails from Florastor, please <a style="text-decoration: none; color:#ffffff;" href="https://florastor.com/"><u>Click Here</u></a>. -->
            <br><br>
            Copyright &copy; 2019 Florastor. 255 Shoreline Drive, Suite 450. Redwood City, CA 94065 USA
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
';   
    
    $encoded_content = chunk_split(base64_encode($content));

    $boundary = md5("sanwebe");
    //header
    $headers = "MIME-Version: 1.0".$eol; 
    // $headers .= "From: ".$from_email.$eol;
    $headers .= "From: Florastor Daily Probiotics <".$from_email.">".$eol; 
    $headers .= "Reply-To: ".$email."" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary = $boundary".$eol.$eol; 

    //plain text 
    $body = "--$boundary".$eol;
    $body .= "Content-Type: text/html; charset=ISO-8859-1".$eol;
    $body .= "Content-Transfer-Encoding: base64".$eol.$eol; 
    $body .= chunk_split(base64_encode($msg_body)); 
    $body .= $eol.$eol;

//  $status = mail($CS_EMAIL, $sub, $body, $headers);
    $status = mail($email, $sub, $body, $headers);
  
    if($status)
        echo "<div class='bg-0'><div class='container'>"
    . "<br><br><br><br><br><br><br><h1 class='gradient'>Your Coupons Have Been Sent!</h1><br>"
        . "<p class='lead text-center'>Thank you for your interest in Florastor Daily<sup>*</sup> Probiotics. Your coupons will arrive to your inbox shortly. If you don't see a message from florastor.ca, please check your spam folder.</p>"
        . "<br><h3><a href='" . $url . "'>Return to Florastor Home</a></h3>"
        . "</div></div><br><br><br><br><br><br><br><br>";
  else {
    echo $status;
  }

}//check if form was submitted  
    
?>

<?php get_footer(); ?>