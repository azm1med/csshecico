<?php
/*
Template name: Hecico Landing
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
<?php if(get_field('tieude_header')) : ?>
<!--- Header Banner --->
<div class="ldp-header bg bg-fill parallax-active dark" style="background: url(<?php the_field('anhnen_header'); ?>);">
	<div class="row row-normal align-middle align-center">
		<?php if(wp_is_mobile()) : ?>
		<div class="col large-4 small-12" data-aos="fade-left" data-aos-delay="300">
			<img src="<?php the_field('sanpham_header'); ?>">
		</div>
		<?php endif; ?>
		<div class="col large-8 small-12"  data-aos="fade-right">
			<h2 class="ldp-h2"><?php the_field('tieude_header'); ?></h2>
			<?php the_field('noidung_header'); ?>
			<?php if(have_rows('cta_header')) : ?>
				<?php while(have_rows('cta_header')) : the_row(); ?>
					<a href="<?php the_sub_field('link_cta'); ?>" target="_self" class="<?php the_sub_field('cta_class'); ?>" style="border-radius:99px;"><span><?php the_sub_field('noidung_cta'); ?></span><i class="icon-angle-down"></i></a>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php if(!wp_is_mobile()) : ?>
		<div class="col large-4 small-12" data-aos="fade-left" data-aos-delay="300">
			<img src="<?php the_field('sanpham_header'); ?>">
		</div>
		<?php endif; ?>
	</div>
	<div class="clearboth"></div>
</div>
<!--- End Header Banner --->
<?php endif; ?>
<?php if(get_field('tieude_gioithieu')) : ?>
<!--- About Product --->
<div class="ldp-aboutproduct">
	<div class="row row-normal align-middle">
		
		<div class="col large-3 small-12"  data-aos="zoom-in">
			<?php 
			$images = get_field('gallery');
			if( $images ): ?>
			<div class="row row-collapse slider slider-nav-simple slider-nav-large slider-nav-light slider-style-normal slider-show-nav"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": true, "rightToLeft": false, "autoPlay" : true}'>
					<?php foreach( $images as $image ): ?>
						<div class="col large-12">
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="width:100%"/>
						</div>
					<?php endforeach; ?>
			</div>
			<?php endif; ?>	
		</div>
		<div class="col large-1 small-12 hide-for-medium"></div>
		<div class="col large-8 small-12" data-aos="zoom-in-up">
			<h2 class="ldp-h2"><?php the_field('tieude_gioithieu'); ?></h2>
			<?php the_field('noidung_gioithieu'); ?>
			<a href="#dat-hang" target="_self" class="button primary" style="border-radius:99px;"><span>Mua ngay</span><i class="icon-angle-down"></i></a>
		</div>
		
	</div>
	<div class="clearboth"></div>
</div>
<!--- End About Product --->
<?php endif; ?>
<?php if(get_field('tieude_tinhnang')) : ?>
<!--- Product Features --->
<div class="ldp-featured bg bg-fill parallax-active " style="background: url(<?php the_field('anhnen_tinhnang'); ?>);">
	<div class="row row-normal align-middle align-center align-equal">
		<div class="col large-12 dark" style="display:block;" data-aos="zoom-in-up">
			<h2 class="ldp-h2"><?php the_field('tieude_tinhnang'); ?></h2>
			<?php the_field('noidung_tinhnang'); ?>
		</div>
		<?php if(have_rows('cac_tinhnang')) : ?>
			<?php while(have_rows('cac_tinhnang')) : the_row(); ?>
				<div class="col large-4 small-12 feadtured" data-aos="flip-left">
					<div class="col-inner">
						<img src="<?php the_sub_field('icon_cactinhnang'); ?>">
						<h3><?php the_sub_field('tieude_cactinhnang'); ?></h3>
						<p><?php the_sub_field('noidung_cactinhnang'); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="col large-12 text-center" data-aos="flip-left">
			<div class="text-center">
				<a href="#dat-hang" target="_self" class="button primary" style="border-radius:99px;"><span>Mua ngay</span><i class="icon-angle-down"></i></a>
			</div>
		</div>
	</div>
	<div class="clearboth"></div>
</div>
<!--- End Features --->
<?php endif; ?>
<?php if(get_field('tieude_taisao')) : ?>
<!--- Reasons --->
<div class="ldp-reasons">
	<div class="row row-normal align-middle">
		<div class="col large-12 text-center" data-aos="zoom-in-up">
			<h2 class="ldp-h2"><?php the_field('tieude_taisao'); ?></h2>
			<?php the_field('noidung_taisao'); ?>
		</div>	
		<div class="col large-5 small-12" data-aos="zoom-in-up">
			<img src="<?php the_field('anh_sanpham'); ?>">
		</div>
		<div class="col large-7 small-12">
			<div class="row row-small align-equal">
			<?php if(have_rows('cac_lydo')) : ?>
				<?php while(have_rows('cac_lydo')) : the_row(); ?>
					<div class="col large-6 small-12 reasons" data-aos="zoom-in-up">
						<div class="col-inner">
							<img src="<?php the_sub_field('icon_lydo'); ?>">
							<h3><?php the_sub_field('tieude_lydo'); ?></h3>
							<p><?php the_sub_field('noidung_lydo'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>
		<div class="col large-12 text-center" data-aos="zoom-in-up">
			<div class="text-center">
				<a href="#dat-hang" target="_self" class="button primary" style="border-radius:99px;"><span>Mua ngay</span><i class="icon-angle-down"></i></a>
			</div>
		</div>
	</div>
</div>
<!--- End Reasons --->
<?php endif; ?>
<?php if(get_field('url_video')) : ?>
<!--- Video --->
<div class="ldp-video bg bg-fill parallax-active " style="background: url(<?php the_field('anhnen_video'); ?>);">
	<div class="row row-small">
		<div class="col large-12 text-center dark"  data-aos="zoom-in">
		<h2 class="ldp-h2"><?php the_field('tieude_video'); ?></h2>
		<div class="video-button-wrapper" style="font-size:130%"><a href="<?php the_field('url_video'); ?>" class="button open-video icon circle is-outline is-xlarge"><i class="icon-play" style="font-size:1.5em;"></i></a></div>
		</div>
	</div>
</div>
<!--- End Video --->
<?php endif; ?>
<?php if(get_field('tieude_feedback')) : ?>
<!--- Feedback --->
<div class="ldp-feedbacks">
	<div class="row row-small">
		<div class="col large-12 text-center"  data-aos="zoom-in">
			<h2 class="ldp-h2"><?php the_field('tieude_feedback'); ?></h2>
			<?php the_field('noidung_feedback'); ?>
		</div>
	</div>
	<div class="row row-small slider slider-nav-simple slider-nav-large slider-nav-dark slider-style-normal slider-show-nav"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
		<?php if(have_rows('cac_feedback')) : ?>
			<?php while(have_rows('cac_feedback')) : the_row(); ?>
				<div class="col large-4 small-12 feedback text-center"  data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine"> 
				<div class="col-inner">
						<img src="<?php the_sub_field('anh_khachhang'); ?>">
						<h3><?php the_sub_field('ten_khachhang'); ?></h3>
						<h4><?php the_sub_field('chucvu_khachhang'); ?></h4>
						<p><?php the_sub_field('feedback'); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<div class="col large-12 text-center" data-aos="zoom-in">
		<div class="text-center">
			<a href="#dat-hang" target="_self" class="button primary" style="border-radius:99px;"><span>Mua ngay</span><i class="icon-angle-down"></i></a>
		</div>
	</div>
</div>
<!--- End Feedback --->
<?php endif; ?>
<?php if(get_field('tieude_cauhoi')) : ?>
<!--- Questions --->
<div class="ldp-questions">
	<div class="row row-small">
		<div class="col large-12 text-center"  data-aos="zoom-in">
			<h2 class="ldp-h2"><?php the_field('tieude_cauhoi'); ?></h2>
			<?php the_field('noidung_cauhoi'); ?>
		</div>
		<div class="col large-12"  data-aos="zoom-in">
			<div class="accordion questions" rel="1">
			<?php if(have_rows('cac_cauhoi')) : ?>
				<?php while(have_rows('cac_cauhoi')) : the_row(); ?>
				<div class="accordion-item"><a href="#" class="accordion-title plain"><span><?php the_sub_field('cauhoi'); ?></span><button class="toggle"><i class="icon-angle-down"></i></button></a>
					<div class="accordion-inner">
						<?php the_sub_field('traloi'); ?>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
		</div>		
	</div>
</div>
<!--- End Questions --->
<?php endif; ?>
<?php if(get_field('form_dathang')) : ?>
<!--- Quick Form --->
<div class="ldp-quickform">
	<div class="row row-small align-center">
		<div class="col large-8 small-12" style="text-align:center"  data-aos="zoom-in">
			<span class="scroll-to" data-label="Scroll to: #dat-hang" data-bullet="false" data-link="#dat-hang" data-title=""><a name="dat-hang"></a></span>
			<h2 class="ldp-h2"><?php the_field('tieude_dathang'); ?></h2>
			<?php the_field('noidung_dathang'); ?>
			<?php echo do_shortcode(get_field('form_dathang')); ?>
		</div>
	</div>
</div>	
<!--- End Quick Form --->
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