<?php
/*
Template name: Hecico Width
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
<div class="row row-small">
	<div class="col large-12 small-12">
		<h1 class="pagetitle"><span><?php wp_title(); ?></span></h1>
		<?php the_content(); ?>
	</div>
</div>
<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
