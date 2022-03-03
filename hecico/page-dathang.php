<?php
/*
Template name: Đặt hàng
*/
get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>
<div class="row row-small align-center">
	<div class="col large-12 small-12 dathang" style="padding-top:30px;">
		<h1 class="hometitle"><span><span><?php wp_title(); ?></span></span></h1>
		<?php the_content(); ?>
	</div>
</div>
<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
