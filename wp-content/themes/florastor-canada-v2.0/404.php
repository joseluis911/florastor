<?php get_header(); ?>
<?php get_header('home'); ?>

<?php get_template_part( 'content', get_post_format() ); ?>
	
	<div class="container">
	    <div class="col-sm-12">
	    <br>

	    <h1>Page Not Found :(</h1>
	    <h3>We can't seem to find this page...it may have been moved or deleted.</h3>
	    <h3>We apologize for any inconvenience!</h3>

	    </div>
    </div>

<?php get_footer(); ?>