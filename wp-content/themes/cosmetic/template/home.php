<?php
/**
 * Template Name: Home
 */

get_header();


$hero_cover_image = get_field('hero_cover_image');
$hero_left_image = get_field('hero_left_image');
$hero_left_image_content = get_field('hero_left_image_content');
$hero_url = get_field('hero_url');
$hero_right_image = get_field('hero_right_image');
$heor_right_image_two = get_field('heor_right_image_two');
$testimonial_section_text = get_field('testimonial_section_text');
$testimonial_section_span = get_field('testimonial_section_span');

$about_title = get_field('about_title');
$about_description = get_field('about_description');
$about_first_image = get_field('about_first_image');
$about_second_image = get_field('about_second_image');
$about_content = get_field('about_content');
$about_url = get_field('about_url');

$first_image = get_field('first_image');
$second_image = get_field('second_image');
$third_image = get_field('third_image');

$client_title = get_field('client_title');
$client_description = get_field('client_description');
$client_say_gallary_slide = get_field('client_say_gallary_slide');

$membership_title = get_field('membership_title');
$membership_short_description = get_field('membership_short_description');
$membership_long_description = get_field('membership_long_description');
$membership_btn = get_field('membership_btn');
$membership_image = get_field('membership_image');


$form_title = get_field('form_title');
$form_description = get_field('form_description');
$form_shortcode = get_field('form_shortcode');
$form_bottom_description = get_field('form_bottom_description');

$logo_heading = get_field('logo_heading');
$image_section = get_field('image_section');


$our_popular_section_title = get_field('our_popular_section_title');
// $our_popular_section_description = get_field('our_popular_section_description');
$our_popular_section_url = get_field('our_popular_section_url');
// $our_popular_right_section = get_field('our_popular_right_section');



?>
<section class="hero-section">
	<div class="uk-cover-container uk-height-1-1">
		<img src="<?php echo $hero_cover_image['url']; ?>"  class="cover">
		<div class="over-content">
			<div uk-grid>
				<div class="uk-width-1-2@m">
					<div class="left-portion">
						<img src="<?php echo $hero_left_image['url']; ?>" alt="" title="">
						<div class="left-portion-content">
							<p><?php echo $hero_left_image_content; ?></p>
							<a href="JavaScript:void(0)" class="btn btn-hero"><?php echo $hero_url['title']; ?></a>
						</div>
					</div>

				</div>
				<div class="uk-width-1-2@m">
					<div class="right-portion">
						<img src="<?php echo $hero_right_image['url']; ?>" alt="" title="">
						<div class="watermark">
							<img src="<?php echo $heor_right_image_two['url']; ?>" alt="" title="">
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonial-section">
	<div class="uk-container">
		<div class="uk-height-1 uk-text-center">
			<p><?php echo $testimonial_section_text; ?></p>
			<span><?php echo $testimonial_section_span; ?></span>
		</div>
	</div>
</section>
<section class="about-section">
	<div class="uk-container">
		<div uk-grid>
			<div class="uk-width-1 uk-text-center">
				<div class="section-title">
					<h3><?php echo $about_title; ?></h3>
					<p><?php echo $about_description; ?></p>
				</div>
			</div>
			<div class="uk-width-2-5">
				<div class="about_img">
					<img src="<?php echo $about_first_image['url']; ?>" alt="about1" title="about1">
					<div class="caption_img">
						<img src="<?php echo $about_second_image['url']; ?>" alt="about2" title="about2">
					</div>
				</div>
			</div>
			<div class="uk-width-3-5">
				<div class="about_content">
					<?php
					if( have_rows('about_content') ):
						while( have_rows('about_content') ) : the_row();
							$about_content_p = get_sub_field('about_content_p');
							?>
							<p><?php echo $about_content_p; ?></p> 
							<?php 
						endwhile;
					endif;
					?>
				</div>
				<a href="JavaScript:void(0)" class="btn btn-blue"><?php echo $about_url['title'];?></a>
			</div>
		</div>
	</div>
</section>
<section class="gallary-main-sec">
	<div class="uk-container uk-container-expand">
		<div class="uk-grid">
			<div class="uk-width-1-3">
				<div class="gallary-item-block">
					<div class="gallary-item-block-inner">
						<img src="<?php echo $first_image['url']; ?>" alt="">
					</div>
				</div>
			</div>
			<div class="uk-width-1-3">
				<div class="gallary-item-block">
					<div class="gallary-item-block-inner">
						<img src="<?php echo $second_image['url']; ?>" alt="">
					</div>
				</div>
			</div>
			<div class="uk-width-1-3">
				<div class="gallary-item-block">
					<div class="gallary-item-block-inner">
						<img src="<?php echo $third_image['url']; ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="event-main-sec">
	<div class="uk-container">
		<div class="uk-grid">
			<div class="uk-width-1-2">
				<div class="event-heading-main">
					<h2>Upcoming Events</h2>
				</div>
			</div>
			<div class="uk-width-1-2">
				<div class="event-slider-arrow">
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="event-slider-main">
		<div class="event-slider-inner">
			<div class="swiper-container event_slider">
				<div class="swiper-wrapper">
					<?php
					$args = array(
						'post_type'      => 'upcoming_events',
						'posts_per_page' => -1,
						'orderby'        => 'date',
						'order'          => 'ASC',
					);
					$query = new WP_Query($args);
					if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post();
							?>
							<div class="swiper-slide">
								<div class="event-item-block">
									<div class="event-item-inner">
										<?php if (has_post_thumbnail()) : ?>
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
										<?php endif; ?>
										<div class="front-event-con">
											<div class="event-title-main">
												<div class="event-title-inner">
													<h2><?php the_title(); ?></h2>
													<div class="hover-con-main">
														<h2><?php the_title(); ?></h2>
														<p><?php the_excerpt(); ?></p>
														<?php if (ICL_LANGUAGE_CODE == 'nl') { ?>
															<a href="JavaScript:void(0)">Lees meer</a>
														<?php } ?>
														<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
															<a href="JavaScript:void(0)">Read More</a>
														<?php }  ?>

														</div>
														</div>
														</div>
														<div class="event-date-main">
														<div class="event-date-inner">
														<?php
														$date = get_the_date('d M');
														echo '<h3>' . $date . '</h3>';
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="event-bottom-button">
			<div class="uk-container">
				<div class="uk-grid">
					<div class="uk-width-1">
						<div class="event-btn-main">
							<a href="JavaScript:void(0)">View all Events</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="popular-course-main-sec">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-2">
					<div class="popular-course-left">
						<div class="popular-course-left-inner">
							<h2><?php echo $our_popular_section_title;?></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetti industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a gall of type and scrambled it to make a type specimen book.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetti industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
							<a href="JavaScript:void(0)">
								<?php echo $our_popular_section_url['title'];?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-width-1-2 custom-pos">
			<div class="popular-course-slider-main">
				<div class="swiper-container popular_slider">
					<div class="swiper-wrapper">
						<?php
						if( have_rows('our_popular_right_section') ):
							while( have_rows('our_popular_right_section') ) : the_row();
								$our_popular_image = get_sub_field('our_popular_image');
								$our_popular_title = get_sub_field('our_popular_title');
								$our_popular_description = get_sub_field('our_popular_description');
								$our_popular_url = get_sub_field('our_popular_url');
								?>
								<div class="swiper-slide">
									<div class="popular-item-block">
										<div class="popular-item-inner">
											<div class="popular-img-area">
												<img src="<?php echo $our_popular_image['url'];?>" alt="">
											</div>
											<div class="popular-content-block">
												<div class="popular-content-inner">
													<h3><?php echo $our_popular_title;?></h3>
													<p><?php echo $our_popular_description;?></p>
													<a href="JavaScript:void(0)">
														<?php echo $our_popular_url['title'];?>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php 

							endwhile;
						endif;
						?>

					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="clientsay-main-sec">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1">
					<div class="client-say-heading">
						<h2><?php echo $client_title; ?></h2>
					</div>
				</div>
			</div>
			<div class="clientsay-slider-main">
				<div class="clientsay-slider-inner">
					<div class="quote-shap">
						<svg width="119" height="100" viewBox="0 0 119 100" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g opacity="0.1">
								<path d="M40.9089 45.455H24.9996C23.1055 45.455 21.4953 44.7923 20.1694 43.4664C18.8442 42.1405 18.1808 40.5308 18.1808 38.6362V36.3645C18.1808 31.3452 19.9567 27.0606 23.5082 23.509C27.0596 19.9587 31.345 18.1827 36.3637 18.1827H40.9089C42.1397 18.1827 43.2047 17.7327 44.1047 16.8335C45.0042 15.9337 45.454 14.8687 45.454 13.6376V4.54587C45.454 3.315 45.004 2.24906 44.1047 1.34928C43.2049 0.450757 42.14 0 40.9089 0H36.3637C31.439 0 26.7406 0.959724 22.2657 2.87643C17.7912 4.79439 13.921 7.38698 10.6535 10.6545C7.38623 13.9205 4.79439 17.7909 2.87668 22.2659C0.958977 26.7404 0 31.44 0 36.3642V86.3631C0 90.153 1.32515 93.371 3.97671 96.0235C6.62851 98.6746 9.84898 100 13.6366 100H40.9106C44.698 100 47.9175 98.6746 50.5695 96.0235C53.2206 93.371 54.5465 90.153 54.5465 86.3631V59.0916C54.5465 55.3025 53.2206 52.0845 50.5678 49.4317C47.917 46.7809 44.6963 45.455 40.9089 45.455Z" fill="#2E3764"/>
								<path d="M114.207 49.4317C111.556 46.7809 108.337 45.455 104.548 45.455H88.6393C86.7462 45.455 85.1345 44.7923 83.8108 43.4664C82.4844 42.1405 81.8222 40.5308 81.8222 38.6362V36.3645C81.8222 31.3452 83.5981 27.0606 87.148 23.509C90.698 19.9587 94.9832 18.1827 100.004 18.1827H104.549C105.78 18.1827 106.845 17.7327 107.745 16.8335C108.643 15.9337 109.095 14.8687 109.095 13.6376V4.54587C109.095 3.315 108.644 2.24906 107.745 1.34928C106.846 0.450757 105.78 0 104.549 0H100.004C95.077 0 90.3796 0.959724 85.9034 2.87643C81.4297 4.79439 77.5607 7.38698 74.2932 10.6545C71.0257 13.9205 68.4326 17.7909 66.5157 22.2659C64.5985 26.7404 63.6382 31.44 63.6382 36.3642V86.3631C63.6382 90.153 64.9646 93.371 67.6154 96.0235C70.2665 98.6746 73.4862 100 77.2744 100H104.547C108.335 100 111.555 98.6746 114.206 96.0235C116.858 93.371 118.182 90.153 118.182 86.3631V59.0916C118.182 55.3022 116.858 52.0845 114.207 49.4317Z" fill="#2E3764"/>
							</g>
						</svg>
					</div>
					<div class="client-slider-block">
						<div class="swiper-container gallery-top">
							<div class="swiper-wrapper">
								<?php
								if( have_rows('client_description') ):
									while( have_rows('client_description') ) : the_row();
										$long_desription = get_sub_field('long_desription'); ?>
										<div class="swiper-slide">
											<div class="clientsay-slider-item">
												<div class="clientsay-slider-item-inner">
													<h3><?php echo $long_desription;?></h3>
												</div>
											</div>
										</div>	
										<?php 
									endwhile;
								endif;
								?>

							</div>
						</div>						    
					</div>						
				</div>
				<div class="swiper-container gallery-thumbs">
					<div class="swiper-wrapper">
						<?php
						if( have_rows('client_say_gallary_slide') ):
							while( have_rows('client_say_gallary_slide') ) : the_row();
								$client_image = get_sub_field('client_image'); 
								$client_name = get_sub_field('client_name'); 
								$client_address = get_sub_field('client_address'); 
								?>
								<div class="swiper-slide">
									<div class="clientsay-thumb-main">
										<div class="clientsay-thumb-inner">
											<div class="clientsay-thumb-row">
												<div class="client-thumb-img">
													<img src="<?php echo $client_image['url'];?>" alt="">
												</div>
												<div class="client-thumb-heading">
													<div class="client-thumb-heading-inner">
														<h3><?php echo $client_name; ?></h3>
														<p><?php echo $client_address;?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php 
							endwhile;
						endif;
						?>					    
					</div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
	</div>
</div>
</section>
<section class="membership-main-sec">
	<div class="uk-container">
		<div class="uk-grid">
			<div class="uk-width-1">
				<div class="membership-heading">
					<h2><?php echo $membership_title; ?></h2>
					<p><?php echo $membership_short_description; ?></p>
				</div>
			</div>
			<div class="membership-content-main">
				<div class="membership-content-inner">
					<div class="uk-grid">
						<div class="uk-width-1-2">
							<div class="membership-left-main">
								<div class="membership-left-inner">
									<?php 
									if( have_rows('membership_long_description') ):
										while( have_rows('membership_long_description') ) : the_row();
											$long_description = get_sub_field('long_description');
											?>
											<p><?php echo $long_description;?></p>
											<?php
										endwhile;
									endif; 
									?>
									<a href="JavaScript:void(0)">
										<?php echo $membership_btn['title'];?>
									</a>
								</div>
							</div>
						</div>
						<div class="uk-width-1-2">
							<div class="membership-right-main">
								<div class="membership-right-inner">
									<img src="<?php echo $membership_image['url'];?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="friends-main-sec">
	<div class="uk-container">
		<div class="uk-grid">
			<div class="uk-width-1">
				<div class="friends-heading-area">
					<h2><?php echo $form_title; ?></h2>
					<p><?php echo $form_description; ?></p>
				</div>
			</div>
		</div>
		<div class="friends-content-main">
			<div class="uk-grid">
				<div class="uk-width-1">
					<div class="friends-form-area">
						<?php echo do_shortcode('[contact-form-7 id="214a150" title="Contact"]'); ?>
					</div>
					<div class="bottom-form-text">
						<p><?php echo $form_bottom_description; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog-main-sec">
	<div class="uk-container">
		<div class="uk-grid">
			<div class="uk-width-1">
				<div class="blog-heading-main">
					<h2>Popular on the Blog...</h2>
				</div>
			</div>
		</div>
		<div class="blog-content-main">
			<div class="blog-slider-main">
				<div class="swiper-container blog_slider">
					<div class="swiper-wrapper">
						<?php
						$args = array(
							'post_type' => 'event',
							'post_status' => 'publish',
                            'posts_per_page' => 3 // Limiting to 3 posts per page for the slider
                        );
						$loop = new WP_Query($args);
						if ($loop->have_posts()) :
							while ($loop->have_posts()) : $loop->the_post();
								$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
								<div class="swiper-slide">
									<div class="blog-item-main">
										<div class="blog-item-inner">
											<img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
											<div class="overlay-content-main">
												<div class="overlay-content-inner">
													<h3><?php the_title(); ?></h3>
													<p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p> <!-- Limiting excerpt to 20 words -->
													<a href="JavaScript:void(0)">Read More</a> <!-- Linked to the post's permalink -->
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
							endwhile;
                            wp_reset_postdata(); // Reset post data
                        else :
                        	?>
                        	<p><?php esc_html_e('No posts found', 'your-text-domain'); ?></p>
                        	<?php
                        endif;
                        ?>
                    </div>
                </div>
                <div class="swiper-button-next next-blog"></div>
                <div class="swiper-button-prev prev-blog"></div>
            </div>
        </div>
    </div>
</section>
<section class="logo-main-sec">
	<div class="uk-container">
		<div class="uk-grid">
			<div class="uk-width-1">
				<div class="logo-heading-area">
					<h2>As Seen On</h2>
				</div>
			</div>
		</div>
		<div class="logo-slider-content">
			<div class="swiper-container logo_slider">
				<div class="swiper-wrapper">
					<?php
					if( have_rows('as_soon_image') ):
						while( have_rows('	') ) : the_row();
							$soon_image = get_sub_field('soon_image'); ?>
							<div class="swiper-slide">
								<div class="logo-item-block">
									<div class="logo-item-inner">
										<a href="JavaScript:void(0)">
											<img src="<?php echo $soon_image['url'];?>" alt="">
										</a>
									</div>
								</div>
							</div>
							<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
			<div class="swiper-button-next next-logo"></div>
			<div class="swiper-button-prev prev-logo"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
