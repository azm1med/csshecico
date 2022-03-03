<?php
/*
Template name: Hecico Landing V2
*/
?>
<!DOCTYPE html>
<!--[if lte IE 9 ]><html class="ie lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action('flatsome_before_page' ); ?>
<?php do_action('flatsome_after_header'); ?>
<?php if(have_rows('them_noidung')) : ?>
	<?php while(have_rows('them_noidung')) : the_row(); ?>
		<div class="<?php the_sub_field('item_class'); ?>" style="background: url(<?php the_sub_field('landing_anhnen'); ?>) <?php the_sub_field('landing_maunen'); ?>!important; padding-top: <?php the_sub_field('padding_top'); ?>; padding-bottom: <?php the_sub_field('padding_bottom'); ?>;">
			<!--- Full Width Slider --->
			<?php if( get_sub_field('luachon') == 'Full Width Slider'): ?>
				<div class="row row-collapse row-full-width slider slider-nav-simple slider-nav-large slider-nav-dark slider-style-normal slider-show-nav"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": true, "rightToLeft": false, "autoPlay" : true}'>
					<?php if(have_rows('landing_slider')) : ?>
						<?php while(have_rows('landing_slider')) : the_row(); ?>
							<?php if(get_sub_field('link_slider')) : ?><a href="<?php the_sub_field('link_slider'); ?>"><?php endif; ?><img src="<?php if(!wp_is_mobile()) : ?><?php the_sub_field('anh_slider_desktop'); ?><?php endif; ?><?php if(wp_is_mobile()) : ?><?php the_sub_field('anh_slider_mobile'); ?><?php endif; ?>"><?php if(get_sub_field('link_slider')) : ?></a><?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<!--- End Full Width Slider --->
			<!--- Left Image --->
			<?php if( get_sub_field('luachon') == 'Left Image'): ?>
				<div class="row row-normal align-middle">
					<?php if(get_sub_field('landing_tieude')) : ?>
					<div class="col large-12 text-center">
						<h2 class="ldp-h2-v2"><?php the_sub_field('landing_tieude'); ?></h2>
					</div>
					<?php endif; ?>
					<div class="col large-6 small-12">
						<img src="<?php the_sub_field('leftrightcenter_image'); ?>">
					</div>
					<div class="col large-6 small-12">
						<?php the_sub_field('leftright_content'); ?>
					</div>
				</div>
			<?php endif; ?>
			<!--- End Left Image --->
			<!--- Right Image --->
			<?php if( get_sub_field('luachon') == 'Right Image'): ?>
				<div class="row row-normal align-middle">
					<?php if(get_sub_field('landing_tieude')) : ?>
					<div class="col large-12 text-center">
						<h2 class="ldp-h2-v2"><?php the_sub_field('landing_tieude'); ?></h2>
					</div>
					<?php endif; ?>
					<?php if(wp_is_mobile()) : ?>
					<div class="col large-6 small-12">
						<img src="<?php the_sub_field('leftrightcenter_image'); ?>">
					</div>
					<?php endif; ?>
					<div class="col large-6 small-12">
						<?php the_sub_field('leftright_content'); ?>
					</div>
					<?php if(!wp_is_mobile()) : ?>
					<div class="col large-6 small-12">
						<img src="<?php the_sub_field('leftrightcenter_image'); ?>">
					</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<!--- End RightImage --->
			<!--- Center Image --->
			<?php if( get_sub_field('luachon') == 'Center Image'): ?>
				<div class="row row-normal align-middle">
					<?php if(get_sub_field('landing_tieude')) : ?>
					<div class="col large-12 text-center">
						<h2 class="ldp-h2-v2"><?php the_sub_field('landing_tieude'); ?></h2>
					</div>
					<?php endif; ?>
					<?php if(wp_is_mobile()) : ?>
					<div class="col large-6 small-12 text-center">
						<img src="<?php the_sub_field('leftrightcenter_image'); ?>">
					</div>
					<?php endif; ?>
					<?php if(have_rows('left_content')) : ?>
						<div class="col large-3 small-12 text-center icon">
							<?php while(have_rows('left_content')) : the_row(); ?>
								<?php if(get_sub_field('icon_left')) : ?><img src="<?php the_sub_field('icon_left'); ?>"><?php endif; ?>
								<?php if(get_sub_field('noidung_trai')) : ?><?php the_sub_field('noidung_trai'); ?><?php endif; ?>
							<?php endwhile; ?>		
						</div>
					<?php endif; ?>
					<?php if(!wp_is_mobile()) : ?>
					<div class="col large-6 small-12 text-center">
						<img src="<?php the_sub_field('leftrightcenter_image'); ?>">
					</div>
					<?php endif; ?>
					<?php if(have_rows('right_content')) : ?>
						<div class="col large-3 small-12 text-center icon">
							<?php while(have_rows('right_content')) : the_row(); ?>
								<?php if(get_sub_field('icon_right')) : ?><img src="<?php the_sub_field('icon_right'); ?>"><?php endif; ?>
								<?php if(get_sub_field('noidung_phai')) : ?><?php the_sub_field('noidung_phai'); ?><?php endif; ?>
							<?php endwhile; ?>		
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<!--- End Center Image --->			
			<!--- Full Width Gallery --->
			<?php if( get_sub_field('luachon') == 'Gallery'): ?>
				<?php 
				$images = get_sub_field('gallery');
				if( $images ): ?>
				<div class="row row-collapse row-full-width slider slider-nav-simple slider-nav-large slider-nav-dark slider-style-normal slider-show-nav landing-gallery"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": true, "rightToLeft": false, "autoPlay" : true}'>
						<?php foreach( $images as $image ): ?>
							<div class="col large-3 small-12">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width:100%"/>
							</div>
						<?php endforeach; ?>
				</div>
				<?php endif; ?>
			<?php endif; ?>
			<!--- End Full Width Gallery --->
			<!--- Width Content ---->
			<?php if( get_sub_field('luachon') == 'Width Content'): ?>
				<div class="row row-normal">
					<?php if(get_sub_field('landing_tieude')) : ?>
					<div class="col large-12  text-center">
						<h2 class="ldp-h2-v2"><?php the_sub_field('landing_tieude'); ?></h2>
					</div>
					<?php endif; ?>
					<div class="col large-12 text-center">
						<?php the_sub_field('width_content'); ?>
					</div>
				</div>
			<?php endif; ?>
			<!--- End Width Content ---->
			<!--- Feedbacks ---->
			<?php if( get_sub_field('luachon') == 'Feedback'): ?>
				<div class="row row-small align-center">
					<?php if(get_sub_field('landing_tieude')) : ?>
					<div class="col large-12  text-center">
						<h2 class="ldp-h2-v2"><?php the_sub_field('landing_tieude'); ?></h2>
					</div>
					<?php endif; ?>
					<div class="col large-9 small-12">
						<div class="row row-normal slider slider-nav-simple slider-nav-large slider-nav-dark slider-style-normal slider-show-nav"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": true, "rightToLeft": false, "autoPlay" : true}'>
							<?php if(have_rows('feedbacks')) : ?>
								<?php while(have_rows('feedbacks')) : the_row(); ?>
									<div class="col large-12 small-12 text-center">
										<?php the_sub_field('noidung_feedback'); ?>
										<p><strong style="color: #dd3333;"><?php the_sub_field('ten_khachhang'); ?></strong> - <?php the_sub_field('chucvu_congty'); ?></p>
										<img src="<?php the_sub_field('anh_khachhang'); ?>">
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
				
			<?php endif; ?>
			<!--- End Feedbacks ---->
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php echo do_shortcode('[block id="custom-footer"]'); ?>
<?php do_action( 'flatsome_after_page' ); ?>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init({
		easing: 'ease-out-back',
		duration: 1000
	});
</script>
<script>
	hljs.initHighlightingOnLoad();

	$('.hero__scroll').on('click', function(e) {
		$('html, body').animate({
			scrollTop: $(window).height()
		}, 1200);
	});
</script>
<?php wp_footer(); ?>
</body>
</html>