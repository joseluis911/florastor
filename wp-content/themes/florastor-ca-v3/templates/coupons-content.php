<?php /* Template Name: Coupons */ ?>

<?php get_header('coupons'); ?>
<?php get_header(); ?>

<div class="bg-0">
    <div class="container">
        <br><br>
        <h1 class="gradient"><span class="gradient">Download</span> <span class="gradient">Coupons</span></h1>
        <h2>Coupons must be printed to use in store</h2>
        <br>
		<p>Open and print your Florastor<sup>&reg;</sup> coupon by clicking on one of the links below. Clicking the image will open up a PDF file containing the coupon. Print out the PDF coupon and bring it to use at your local retail pharmacy. You can also email the coupons to yourself to be printed later.</p>
        <br><br>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-5 col-md-offset-1">
                <a href="<?php bloginfo('template_directory');?>/images/CA_6_030120.pdf" onclick="coupon_6();">
                <img class="img-responsive coupon" src="<?php bloginfo('template_directory');?>/images/CA_6_off_50_thumb.jpg" alt="6 Dollar Coupon"/></a>
            <br><br>
            </div>
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-5">
                <a href="<?php bloginfo('template_directory');?>/images/CA_4_030120.pdf" onclick="coupon_4();">
                <img class="img-responsive coupon" src="<?php bloginfo('template_directory');?>/images/CA_4_off_all_thumb.jpg" alt="4 Dollar Coupon" /></a>
            <br><br>
            </div>
        </div>
        <br>
        <a href="/where-to-buy/"><button class="btn-main">Find a Store</button></a>
        <br><br>
    </div>
</div>

<div class="bg-1">
    <div class="container">
        <br>
        <h2>Email Coupons to Print</h2>
        <br>
        <p>Enter your email address and we’ll send the coupons directly to you to print out at a later time. We will not send any marketing related emails without your permission. If you do not see the email in your inbox after a few minutes, please check your spam or junk folder.</p><br>
        <form class="col-sm-6 col-sm-offset-3" method="post" action="/coupons/submit-email/">  
            <div class="form-group">
                <input type="email" name="contact_email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <br>
            <button type="submit" name="form-submit" onclick="ga('send','event','Coupons Page','click - submit email');" class="btn-main">Submit</button>
            <br><br>
        </form>
    </div>
</div>

<?php get_footer(); ?>