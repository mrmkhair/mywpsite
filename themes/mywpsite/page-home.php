<?php /* Template Name: home */?>

<?php get_header();?>

<?php 
		
		$about_kind_1 = get_field('about_kind_1');
		$about_title_1 = get_field('about_title_1');
		$about_content_1 = get_field('about_content_1');
		$kind_1_list_1 = get_field('kind_1_list_1');
		$kind_1_list_2 = get_field('kind_1_list_2');
		$kind_1_list_3 = get_field('kind_1_list_3');

		$about_kind_2 = get_field('about_kind_2');
		$about_title_2 = get_field('about_title_2');
		$about_content_2 = get_field('about_content_2');
		$kind_2_list_1 = get_field('kind_2_list_1');
		$kind_2_list_2 = get_field('kind_2_list_2');
		$kind_2_list_3 = get_field('kind_2_list_3');

		$about_kind_3 = get_field('about_kind_3');
		$about_title_3 = get_field('about_title_3');
		$about_content_3 = get_field('about_content_3');
		$kind_3_list_1 = get_field('kind_3_list_1');
		$kind_3_list_2 = get_field('kind_3_list_2');
		$kind_3_list_3 = get_field('kind_3_list_3');
		
		$button = get_field('button');
        
        $about_image1 = get_field('about_image1');
		$about_image2 = get_field('about_image2');
		$about_image3 = get_field('about_image3');
		$about_image4 = get_field('about_image4');

		
	  ?>
		<div id="fh5co-about" data-section="mission">
			<div class="fh5co-2col">
				
				<div class="fh5co-2col-inner left">
						
						<div class="fh5co-tabs-container">
							<ul class="fh5co-tabs fh5co-three">
								<li class="active"><a href="#" data-tab="marketing"><?php echo $about_kind_1; ?></a></li>
								<li><a href="#" data-tab="analysis"><?php echo $about_kind_2; ?></a></li>
								<li><a href="#" data-tab="strategy"><?php echo $about_kind_3; ?></a></li>
							</ul>
							<div class="fh5co-tab-content active" data-tab-content="marketing">
								<h2><?php echo $about_title_1; ?></h2>
								<p><?php echo $about_content_1; ?></p>
								<ul class="checked">
									<li><?php echo $kind_1_list_1; ?></li>
									<li><?php echo $kind_1_list_2; ?></li>
									<li><?php echo $kind_1_list_3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline"><?php echo $button; ?></a></p>
							</div>

							<div class="fh5co-tab-content" data-tab-content="analysis">
							   <h2><?php echo $about_title_2; ?></h2>
								<p><?php echo $about_content_2; ?></p>
								<ul class="checked">
									<li><?php echo $kind_2_list_1; ?></li>
									<li><?php echo $kind_2_list_2; ?></li>
									<li><?php echo $kind_2_list_3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline"><?php echo $button; ?></a></p>
							</div>

							<div class="fh5co-tab-content" data-tab-content="strategy">
							    <h2><?php echo $about_title_3; ?></h2>
								<p><?php echo $about_content_3; ?></p>
								<ul class="checked">
									<li><?php echo $kind_3_list_1; ?></li>
									<li><?php echo $kind_3_list_2; ?></li>
									<li><?php echo $kind_3_list_3; ?></li>
								</ul>
								<p><a href="#" class="btn btn-primary btn-outline"><?php echo $button; ?></a></p>
							</div>

						</div>

				</div>

			</div>
			<div class="fh5co-2col fh5co-text">
				<div class="fh5co-grid">               
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $about_image1['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $about_image2['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $about_image3['url']; ?>);"></div>
					<div class="fh5co-grid-item" style="background-image: url(<?php echo $about_image4['url']; ?>);"></div>
				</div>
			</div>
		</div> <!-- END fh5co-about -->
*/
		<?php 
		
		$video_link = get_field('video_link');
		$video_text = get_field('video_text');
		$services_title = get_field('services_title');
		$services_text = get_field('services_text');
		$services_button = get_field('services_button');
		
	  ?>

		<div id="fh5co-services" data-section="services">
			<div class="fh5co-video"><a href="<?php echo $video_link; ?>" class="popup-vimeo"><i class="icon-play2"></i></a> <span><?php echo $video_text; ?></span></div>
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $services_title; ?></h2>
					<p><?php echo $services_text; ?></p>
				</div>
				<?php $ser_loop = new WP_Query(array(
					'post_type' => 'services',
					 'orderby' => 'post_id', 
					 'order' => 'ASC' ));?>

				<?php while($ser_loop->have_posts()) : $ser_loop->the_post();?>

				<div class="col-md-4">
					<div class="service">
						<div class="icon"><i class="<?php the_field('service_icon');?>"></i></div>
						<h3><?php the_field('service_title');?></h3> 
						<p><?php the_field('service_text');?></p>
					</div>
				</div>

				<?php endwhile; wp_reset_query(); ?>

				<div class="col-md-12 text-center">
					<p><a href="#" class="btn btn-primary btn-outline"><?php echo $services_button; ?></a></p>
				</div>

			</div>

		</div> <!-- END fh5co-services -->

	
		<div id="fh5co-gallery">
 
         		<?php $ser_loop = new WP_Query(array(
					'post_type' => 'gallary',
					 'orderby' => 'post_id', 
					 'order' => 'ASC' ));?>
					 
				<?php while($ser_loop->have_posts()) : $ser_loop->the_post();?>


				<?php 	
	         	$gimage = get_field('gallary_image');
	            ?>

			<a href="<?php echo $gimage['url']; ?>" class="fh5co-item image-popup" style="background-image: url(<?php echo $gimage['url']; ?>)">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-copy">
					<div class="fh5co-copy-inner">
						<h2><?php the_field('gallary_title'); ?></h2>
						<h3><?php the_field('gallary_position'); ?></h3>
					</div>
				</div>
			</a>
			
			    <?php endwhile; wp_reset_query(); ?>

		</div> <!-- END fh5co-gallery -->

		       <?php 	
	         	$team_title = get_field('team_title');
				 $team_content = get_field('team_content');
	            ?>
		<div id="fh5co-team" data-section="team">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $team_title; ?></h2>
					<p><?php echo $team_content; ?></p>
				</div>

				<?php $ser_loop = new WP_Query(array(
					'post_type' => 'team',
					 'orderby' => 'post_id', 
					 'order' => 'ASC' ));?>
					 
				<?php while($ser_loop->have_posts()) : $ser_loop->the_post();?>

				<?php 	
	         	$timage = get_field('team_avatar');
	            ?>

				<div class="col-md-4">
					<div class="person">
						<img src="<?php echo $timage['url']; ?>" alt="" class="img-responsive">
						<h3><?php the_field('team_name'); ?></h3>
						<h4><?php the_field('team_position'); ?></h4>
						<p><?php the_field('team_excerpt'); ?></p>
						<ul class="social">
							<li><a href="<?php the_field('team_facebook'); ?>"><i class="icon-facebook"></i></a></li>
							<li><a href="<?php the_field('team_twitter'); ?>"><i class="icon-twitter"></i></a></li>
							<li><a href="<?php the_field('team_behance'); ?>"><i class="icon-dribbble"></i></a></li>
							<li><a href="<?php the_field('team_instagram'); ?>"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>

				<?php endwhile; wp_reset_query(); ?>


			</div>
		</div> <!-- END fh5co-team -->

		        <?php 	
	         	 $contact_title = get_field('contact_title');
				 $contact_text = get_field('contact_text');
				 $contact_code = get_field('contact_code');

	            ?>

		<div id="fh5co-contact" data-section="contact">
			<div class="container">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><?php echo $contact_title; ?></h2>
					<p><?php echo $contact_text ;?></p>
			   </div>
					<div class="row">
					<p><?php echo $contact_code ;?></p>
				    </div>
			</div>
		</div>



<?php get_footer();?>