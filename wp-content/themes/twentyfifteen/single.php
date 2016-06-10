<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif; ?>

<?php get_footer(); ?>
