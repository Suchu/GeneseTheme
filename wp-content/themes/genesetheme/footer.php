</div>
<footer>

<div class="footer-inner container">


<div class="social footer-columns one-third column">
<?php dynamic_sidebar( 'footer_1' ); ?>
</div>

<div class="footer-columns one-third column">
<?php dynamic_sidebar('footer_2'); ?>
</div>
<div class="footer-columns one-third column">
<?php dynamic_sidebar('footer_3'); ?>
</div>


</div>

<div id="footer-base">
<div class="container">
<div class="eight columns">
			&copy;<?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			<div class="eight columns far-edge">
			<?php _e( 'Design by ', 'Genese' ); ?><a href="<?php echo esc_url( __( 'http://genesesofts.com/', 'Genese' ) ); ?>">Genese</a></div>
		



</div>
</div>
</div>

</footer>

<!-- End Document
================================================== -->

<script src="<?php echo get_template_directory_uri();?>/js/jquery.prettyPhoto.js"></script>
</body>
</html>