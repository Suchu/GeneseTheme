<!-- Header -->
<?php 

get_header(); ?>
<!-- Contect -->
<!-- list of post -->
<?php if (have_posts()) :

   while (have_posts()) :

      the_post();?>

  		<h2 id="post-<?php the_ID(); ?>">
  			<!-- link to post -->
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

		<?php the_title(); ?></a></h2>

			<small><?php the_time('F jS, Y') ?> by <?php the_author() ?> </small>
			<!-- post content -->
      <?php 
      if ( has_post_thumbnail() ) { ?> 

        <p><?php the_post_thumbnail('thumbnail'); ?> </p>
        <?php
      }  ?>
        <?php the_content();

   endwhile; //while ends
   posts_nav_link();

  	 else : ?>
  		<h2 class="center">Not Found</h2>
 		<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
<?php endif;
?> 


<?php 
get_footer(); ?>

