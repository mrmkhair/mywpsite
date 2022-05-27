<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mywpsite
 */

?>
		<?php 
		  $company = get_field('company');
		  $social_twitter = get_field('social_twitter');   
		  $social_facebook = get_field('social_facebook');
		  $social_vine = get_field('social_vine');
		  $social_linkedin = get_field('social_linkedin');
		  $social_instagram = get_field('social_instagram');
        ?>
       <div id="fh5co-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p><small>&copy; <?php echo date('Y');?> <?php echo $company;?>. All Rights Reserved. <br> Designed by <a href="http://mrmkhair.000webhostapp.com/" target="_blank">Mohamed Khair</a> Demo Images: <a href="http://pexels.com/" target="_blank">Pexels</a></small></p>
					</div>
					<div class="col-md-6">
						<ul class="fh5co-social">
							<li><a href="<?php echo $social_twitter;?>"><i class="icon-twitter"></i></a></li>
							<li><a href="<<?php echo $social_facebook;?>"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php echo $social_vine;?>"><i class="icon-vine"></i></a></li>
							<li><a href="<?php echo $social_linkedin;?>"><i class="icon-linkedin"></i></a></li>
							<li><a href="<?php echo $social_instagram;?>"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		
		
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	
	
	
	<!-- jQuery -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory')?>/js/magnific-popup-options.js"></script>
	<!-- Main JS -->
	<script src="<?php bloginfo('stylesheet_directory')?>/js/main.js"></script>

	<?php wp_footer(); ?>
	
   </body>
</html>




