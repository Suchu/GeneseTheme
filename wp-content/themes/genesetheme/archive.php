<?php
get_header(); ?>


		<div id="primary" class="site-content">
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php the_content(); ?>
<!-- /* Custom Archives Functions Go Below this line */ -->
<!-- /* Custom Archives Functions Go Above this line */ -->
</div><!-- .entry-content -->
 
<?php endwhile; // end of the loop. ?>
</div><!-- #content -->
</div><!-- #primary -->



<p> List of Archives yearly</p>
<?php wp_get_archives('type=yearly'); ?>

<?php get_footer(); ?>
