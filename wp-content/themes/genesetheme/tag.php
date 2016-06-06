<?php get_header();?>

<?php if ( have_posts() ) : ?>
	<h2> Category <?php single_tag_title();?></h2>

	<!-- Start the Loop. -->
	<?php
		while ( have_posts() ) : the_post();?>
		<h3><?php the_title(); ?></h3>
		<?php get_template_part( 'content', get_post_format() );

		endwhile;

		endif; ?>

<?php get_footer();?>