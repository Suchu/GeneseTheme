<?php

get_header(); ?>

<!-- Contect -->
<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>
			<h1><?php the_title(); ?></h1>

		<?php	
    	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
		} ?>
		<?php

			// Include the page content template.
			get_template_part( 'content-page', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>



<!-- Footer -->
<?php 
get_footer(); ?>
