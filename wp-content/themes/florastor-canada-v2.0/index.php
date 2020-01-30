<?php get_header('home'); ?>
<?php get_header(); ?>
<br><br>
<div class="container">
<div class="col-sm-12">
<?php 
    global $post;
    $post_slug=$post->post_name;
    $query = new WP_Query( array( 'name' => $post_slug ) );
    if( $query->have_posts() ){
	    echo $query->the_post();
	    echo "<h1>";
	    $title = the_title();
	    echo "</h1><br>";
	    // echo '<h1>' . $title . '</h1>';
	    the_content();
	    wp_reset_postdata();    	
    }
    else{
    	echo "<p>Sorry, no posts matched your criteria.</p>";
    }
?>
</div>
</div>


<?php get_footer(); ?>


