<?php
/*
Template name: Hecico Fullwidth
*/
get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>
<div class="custombread">
	<div class="breadinner">
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
		  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
		?>
	</div>
</div>

<?php the_content(); ?>

<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
