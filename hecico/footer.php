<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer(); ?>

<div id="hotline" class="lightbox-by-id lightbox-content lightbox-white mfp-hide" style="max-width:400px;">
	<?php echo do_shortcode('[block id="hotlines"]'); ?>
</div>
</body>
</html>
