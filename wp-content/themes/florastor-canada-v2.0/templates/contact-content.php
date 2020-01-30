<?php /* Template Name: Contact */ ?>
<?php get_header('contact'); ?>
<?php get_header(); ?>

<div class="container">
    <div class="col-sm-12">
    <br>
    	<h1 id="header-img">Contact Us</h1>
		<h3>Please send us a message if you have any questions or comments about Florastor<sup>&reg;</sup>. Be sure to check our FAQs page for more information.</h3>
		<?php echo do_shortcode( '[contact-form-7 id="29" title="Contact form 1"]' ); ?>
<!-- 		<form class="col-sm-8 col-sm-offset-2" method="post" action="/wordpress/submit-contact/">
		  <div class="form-group">
		    <label>Name</label>
		    <input type="text" name="contact_name" class="form-control" id="name" placeholder="Your Name" required>
		  </div>
		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" name="contact_email" class="form-control" id="email" placeholder="Your Email" required>
		  </div>
		  <div class="form-group">
		    <label>Subject</label>
		    <input type="text" name="contact_subject" class="form-control" id="subject" placeholder="Subject" required>
		  </div>
		  <div class="form-group">
		    <label>Message</label>
		    <textarea rows="10" name="contact_msg" class="form-control" id="msg" required></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
		</form> -->
    </div>
</div>

<?php get_footer(); ?>