<?php get_header();?>

<?php if ( have_posts() ) : ?>
	<h1> Category <?php single_cat_title();?>

	<!-- Start the Loop. -->
	<?php
		while ( have_posts() ) : the_post();?>
		<h2><?php the_title(); ?></h2>
		<?php get_template_part( 'content', get_post_format() );

		endwhile;
		 posts_nav_link(); 

		endif; ?>

<?php get_footer();?>
