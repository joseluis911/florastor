<?php /* Template Name: Contact */ ?>
<?php get_header('contact'); ?>
<?php get_header(); ?>

<div class="bg-0">
    <div class="container">
        <br><br><br>
        <h1 class="gradient">Contact Us</h1>
        <h2>Please send us a message if you have any questions or comments about Florastor<sup>&reg;</sup>. Be sure to check our <a href="/faqs/">FAQs</a> page for more information.</h2>
    </div>
</div>

<div class="bg-1">
    <br>
    <div class="container">
    <div class="col-sm-12">    
		<form class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 contact" method="post" action="/contact/contact-submit/">  
                <p class="lead text-center">Please fill out the fields below to get in touch with our team.</p>
                <br>
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
              <button type="submit" name="form-submit" class="btn-main">Submit</button>
            </form>
    </div>
    </div>
<br>
</div>

<?php get_footer(); ?>