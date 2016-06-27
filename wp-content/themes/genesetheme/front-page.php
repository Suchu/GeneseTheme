<!-- Header -->
<?php

get_header(); ?>

<!-- Contect -->
<div class="sixteen columns">
	 <div class="flex-container">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();


			// Include the page content template.
			get_template_part( 'content-page', 'page' );
			endwhile;
			?>

	</div>

        
</div>

        
        <!-- feature section -->
        <section class = "container">
        	<?php dynamic_sidebar( 'featured-1' );?>
        </section>
        <hr>
       


		<!-- Latest 6 posts -->

        <section class="container">

			<!-- latest 6 posts -->
			

			<?php if (have_posts()) : ?>
			<?php query_posts("showposts=3"); // show one latest post only ?>
			<?php while (have_posts()) : the_post(); ?>

			<div class="one-third column">

			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_post_thumbnail( array(250,210) ); ?>
			<p> <?php echo content(14); ?> </p>

			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		
		
        
        </section> 

       
        
 			
 			


		


</div>


<!-- Footer -->
<?php 
get_footer(); ?>