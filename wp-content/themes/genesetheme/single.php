<?php 

get_header(); ?>
<!-- Contect -->
<!-- For single post -->
<article class="sixteen columns main-content">
<?php if (have_posts()) :
   while (have_posts()) :
      the_post();?>
    
  		
  			<h1><?php the_title(); ?></h1>
        <?php
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
    the_post_thumbnail('large');
    } ?>
    <p>
    <?php

      // Include the page content template.
      get_template_part( 'content', 'page' );
      ?>
    </p>
</article>


         <?php  //get_template_part( 'content', get_post_format() );
         
   
   if ( comments_open()) :
				comments_template();

  endif; 
endwhile;
endif; ?>



<?php 
get_footer(); ?>