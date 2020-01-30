<?php /* Template Name: Coupons */ ?>

<?php get_header('coupons'); ?>
<?php get_header(); ?>
<style>
    .translate {position: absolute; margin: 10px 0px 0px 10px;z-index: 1;font-size: 0.9em;}
</style>

<a class="translate" href="http://fr.florastor.ca/coupons/">Voir cette page en Français</a>

    <br>
    <div class="container">
    <div class="col-sm-12">
    <br><br>
        <h1 id="header-img">Florastor<sup>&reg;</sup> Coupons</h1>
        <h3>Coupons Must be Printed to Use in Store</h3>
        <br>
        <p>Open and print your Florastor<sup>&reg;</sup> coupon by clicking on one of the links below. Clicking the image will open up a PDF file containing the coupon. Print out the PDF coupon and bring it to use at your local retail pharmacy. You can also email the coupons to yourself to be printed later.</p>
        <br><br>
        <div class="row">
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <a href="<?php bloginfo('template_directory');?>/images/CA_Website_coupon_6_020119.pdf" onclick="coupon_6();">
                    <img class="img-responsive coupon" src="<?php bloginfo('template_directory');?>/images/6_dollar_thumb_CA.jpg" alt="6 Dollar Coupon"/>
                </a>
            </div>
            <div class="col-sm-6 col-md-5">
                <a href="<?php bloginfo('template_directory');?>/images/CA_Website_coupon_4_020119.pdf" onclick="coupon_4();">
                    <img class="img-responsive coupon" src="<?php bloginfo('template_directory');?>/images/4_dollar_thumb_CA.jpg" alt="4 Dollar Coupon"/>
                </a>
            <br><br>
            </div>
        </div>
        <br>
        <h3 class="text-center">Email Coupons to Print</h3>
        <p>You can also enter your email address and we’ll send the coupons directly to you to print out at a later time. We will not send any marketing related emails without your permission. If you do not see the email in your inbox after clicking submit, please check your spam or junk folder.</p><br>
        <form class="col-sm-6 col-sm-offset-3" method="post" action="/coupons/submit-email/">  
            <div class="form-group">
                <input type="email" name="contact_email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <br>
            <button type="submit" name="form-submit" onclick="submit_coupons_email();" class="btn btn-block btn-primary">Submit</button>
            <br><br>
        </form>

    </div>
    </div>

<?php get_footer(); ?>