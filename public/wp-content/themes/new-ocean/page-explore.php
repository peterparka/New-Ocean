<?php
/*
Template Name: Homepage
*/
get_header();

if( have_posts() ): while( have_posts() ): the_post(); ?>

<div class="explore">

	<?php $hero_play_video_id = getYoutubeIdFromUrl( get_field('hero_video_play_url') ); ?>
	<?php $video_banner_video_url = getYoutubeIdFromUrl( get_field('video_banner_video_url') ) ?>

	<div class="fullscreen-video tv js-video-overlay">

		<button class="btn--close js-close-video"><img src="<?php echo get_template_directory_uri(); ?>/_img/white-close.svg" alt="close icon"></button>
		<div id="tv2" class="js-video screen js-video-<?php echo $hero_play_video_id; ?>"></div>
		<div class="letterbox-top"></div>
		<div class="letterbox-bottom"></div>
		<div class="video-hide-cover"></div>
	</div>

	<div class="fullscreen-video tv js-video-overlay">

		<button class="btn--close js-close-video"><img src="<?php echo get_template_directory_uri(); ?>/_img/white-close.svg" alt="close icon"></button>
		<div id="tv3" class="js-video screen js-video-<?php echo $video_banner_video_url; ?>"></div>
		<div class="letterbox-top"></div>
		<div class="letterbox-bottom"></div>
		<div class="video-hide-cover"></div>
	</div>

	<!-- HERO -->
	<section class="hero">

		<?php // $video_play_url = ( get_field('hero_video_url') ) ?: get_field('hero_video_play_url'); ?>

		<div class="video-container tv">
			<div id="tv" class="js-video js-video-background screen" video-id="<?php echo getYoutubeIdFromUrl( get_field('hero_video_url') ); ?>"></div>
		</div>

		<img src="<?php echo get_template_directory_uri(); ?>/_img/header-photo.jpg" alt="ocean">

		<div class="hero__content">

			<div>
				<h1 class="bold"><?php the_title(); ?></h1>

				<div class="p-large"><?php the_content(); ?></div>

				<?php if( get_field('hero_video_play_url') ): ?>

					<a video-id="<?php echo $hero_play_video_id; ?>" class="js-open-video"><?php the_field('hero_button_text'); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php if( have_rows('icon_list') ): ?>

		<!-- HOW WE CAN HELP -->
		<section class="block bg-white help-block container" id="our-solutions">

			<header>
				<h4><?php the_field('icon_list_title'); ?></h4>
			</header>

			<ul class="icon-list">

				<?php while( have_rows('icon_list') ) : the_row(); ?>

					<li>
						<div class="image-container">

							<img src="<?php echo get_template_directory_uri(); ?>/_img/icon-<?php echo strtolower( get_sub_field('icon') ); ?>.png" alt="platform icon">
						</div>
						<div class="text-container">
							<h5><?php the_sub_field('title'); ?></h5>
							<?php the_sub_field('text'); ?>
						</div>
					</li>

				<?php endwhile; ?>

			</ul>

		</section>

	<?php endif; ?>

	<!-- HEALTH ASSESSMENTS -->
	<section class="block health-assessment" id="health-assessment">

		<?php if( $video_banner_background = get_field('video_banner_background') ): ?>

			<div class="background-image">

				<img src="<?php echo $video_banner_background; ?>" alt="<?php the_field('video_banner_title'); ?>">
			</div>

		<?php endif; ?>

		<div class="container">

			<div class="text-container">
				<h4><?php the_field('video_banner_title'); ?></h4>
				<?php the_field('video_banner_text'); ?>
			</div>

			<article class="image-container">

				<?php if( $video_banner_thumbnail = get_field('video_banner_thumbnail') ): ?>

					<img src="<?php echo $video_banner_thumbnail; ?>" alt="<?php the_field('video_banner_title'); ?>">
				<?php endif; ?>

				<a video-id="<?php echo $video_banner_video_url; ?>" class="js-open-video" href="/"><?php the_field('video_banner_button_text'); ?></a>
			</article>
		</div>

	</section>

	<!-- WHY NEW OCEAN -->
	<section class="block bg-image why-new-ocean" id="why-new-ocean">

		<?php if( $banner_background = get_field('banner_background') ): ?>
			<img src="<?php echo $banner_background; ?>" alt="platform icon">
		<?php endif; ?>

		<div class="container">
			<h4><?php the_field('banner_title'); ?></h4>
			<?php the_field('banner_text'); ?>
		</div>

	</section>

	<?php if( have_rows('sales_list') ): ?>

		<!-- HOW WE'RE DIFFERENT -->
		<section class="block bg-blue different-block" id="different">

			<div class="container">

				<header>
					<h4><?php the_field('sales_title'); ?></h4>
					<?php the_field('sales_text'); ?>
				</header>

				<div class="grid-center">

					<?php while( have_rows('sales_list') ) : the_row(); ?>

						<article class="col-12_md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/_img/icon-<?php echo strtolower( get_sub_field('icon') ); ?>.png" alt="<?php the_sub_field('text'); ?>">
							<?php the_sub_field('text'); ?>
						</article>

					<?php endwhile; ?>

				</div>
			</div>

		</section>

	<?php endif; ?>

	<?php if( have_rows('profiles') ): ?>

		<!-- LEADERSHIP -->
		<section class="block grid-center bg-gray leadership-block" id="leadership">

			<div class="container">

				<header>
					<h4 class="col-12"><?php the_field('profiles_title'); ?></h4>
					<div class="col-12_md-4"><?php the_field('profiles_text'); ?></div>
				</header>

				<ul class="grid-center">

					<?php while( have_rows('profiles') ) : the_row(); ?>

						<li class="col-12_lg-3">

							<!-- PORTRAIT PHOTO -->
							<div>
								<?php if( $picture_url = get_sub_field('picture') ): ?>
									<img src="<?php echo $picture_url; ?>" alt="headshot">
								<?php endif; ?>
							</div>

							<!-- ARTICLE INFO + MINI BIO -->
							<article>
								<div>
									<h5 class="js-name"><?php the_sub_field('name'); ?></h5>
									<p class="js-position"><strong><?php the_sub_field('position'); ?></strong></p>

									<div class="js-bio bio"><?php the_sub_field('bio_extract'); ?></div>

									<a href="/"
									class="js-open-modal"
									video-id="<?php echo getYoutubeIdFromUrl( get_sub_field('video_url') ); ?>"
									modal-picture="<?php echo get_sub_field('modal_picture'); ?>"
									email="<?php echo antispambot( get_sub_field('email') ); ?>"
									bio="<?php the_sub_field('bio_full'); ?>">FULL BIO AND VIDEO</a>
								</div>
							</article>
						</li>

					<?php endwhile; ?>

				</ul>
			</div>

			<!-- POP UP MODAL -->
			<section class="modal js-modal">

				<div class="modal-background js-close-modal"></div>

				<article>

					<button class="close-button js-close-modal">
						<img src="<?php echo get_template_directory_uri(); ?>/_img/white-close.svg" alt="close icon">
					</button>

					<div class="scroll-content" id="scroll-content">

						<div class="casual-photo">
							<img src="<?php echo get_template_directory_uri(); ?>/_img/hal-casual.jpg" alt="casual photo" class="js-picture">
						</div>

						<h5 class="js-name"></h5>
						<h4 class="h4-small js-position"></h4>
						<div class="contact-me">

							<a href="" class="js-email">Email</a>

						</div>

						<section class="bio">
							<div class="js-bio"></div>

							<div class="bio-vid">
								<iframe width="560" height="300" src="https://www.youtube.com/embed/Nmb0HQVm5zU" frameborder="0" allowfullscreen class="js-video"></iframe>
							</div>
						</section>
					</div>

				</article>
			</section>
		</section>
	<?php endif; ?>

	<!-- GET IN TOUCH -->
	<section class="block bg-blue get-in-touch" id="get-in-touch">

		<div class="container">
			<h4><?php the_field('contact_title'); ?></h4>
			<?php the_field('contact_text'); ?>
		</div>
	</section>

	<!-- MAP -->
	<?php $location = get_field('contact_map');

	if( !empty($location) ):
	?>
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
	<?php endif; ?>

</div>

<?php if( have_rows('addresses') ): ?>

	<section class="block contact-details">

		<div class="container grid-center inside-container">
			<?php while( have_rows('addresses') ) : the_row(); ?>

					<article>
						<div class="address">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/_img/location.png" alt="location">
							</div>

							<?php the_sub_field('address'); ?>
						</div>

						<div class="phone">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/_img/contact.png" alt="contact">
							</div>
							<p><?php the_sub_field('contact_number'); ?></p>
						</div>

						<div class="email">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/_img/email.png" alt="email">
							</div>
							<p><a href="mailto:<?php echo antispambot( get_sub_field('email') ); ?>">Email Us</a></p>
						</div>
					</article>

			<?php endwhile; ?>
		</div>

	</section>

<?php endif;

endwhile; endif;
get_footer(); ?>
