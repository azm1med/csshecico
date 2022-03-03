<?php
// Add custom Theme Functions here


add_filter( 'comment_form_defaults', 'custom_reply_title' );
function custom_reply_title( $defaults ){
  $defaults['title_reply_before'] = '<span id="reply-title" class="h4 comment-reply-title">';
  $defaults['title_reply_after'] = '</span>';
  return $defaults;
}


function wdm_remove_parent_category_from_url( $args ) {
    $args['rewrite']['hierarchical'] = false;
    return $args;
}

add_filter( 'woocommerce_taxonomy_args_product_cat', 'wdm_remove_parent_category_from_url' );


//Add SKU


function skyverge_get_product_sku( $atts ) {
	
	global $product;
		
	$atts = shortcode_atts( array(
        	'id'  =>  '',
    	), $atts );
  
  	// If no id, we're probably on a product page already
  	if ( empty( $atts['id'] ) ) {
		
		$sku = $product->get_sku();
		
	} else {
		
		//get which product from ID we should display a SKU for
		$product = wc_get_product( $atts['id'] );
	  	$sku = $product->get_sku();
		
	}

	ob_start();
	
	//Only echo if there is a SKU
	if ( !empty( $sku ) ) {
		echo $sku;
	}
	
	return ob_get_clean();
	
}
add_shortcode( 'wc_sku', 'skyverge_get_product_sku' );


if ( ! function_exists( 'display_product_additional_information' ) ) {

    function display_product_additional_information($atts) {

        // Shortcode attribute (or argument)
        $atts = shortcode_atts( array(
            'id'    => ''
        ), $atts, 'product_additional_information' );

        // If the "id" argument is not defined, we try to get the post Id
        if ( ! ( ! empty($atts['id']) && $atts['id'] > 0 ) ) {
           $atts['id'] = get_the_id();
        }

        // We check that the "id" argument is a product id
        if ( get_post_type($atts['id']) === 'product' ) {
            $product = wc_get_product($atts['id']);
        }
        // If not we exit
        else {
            return;
        }

        ob_start(); // Start buffering

        do_action( 'woocommerce_product_additional_information', $product );

        return ob_get_clean(); // Return the buffered outpout
    }

    add_shortcode('product_additional_information', 'display_product_additional_information');

}

add_filter( 'woocommerce_billing_fields', 'adjust_requirement_of_checkout_contact_fields');
function adjust_requirement_of_checkout_contact_fields( $fields ) {
    //$fields['billing_phone']['required']    = false;
    $fields['billing_email']['required']    = false;

    return $fields;
}


// First, this will disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
   $post_types = get_post_types();
   foreach ($post_types as $post_type) {
      if(post_type_supports($post_type, 'comments')) {
         remove_post_type_support($post_type, 'comments');
         remove_post_type_support($post_type, 'trackbacks');
      }
   }
}
# https://keithgreer.uk/wordpress-code-completely-disable-comments-using-functions-php

add_action('admin_init', 'df_disable_comments_post_types_support');

// Then close any comments open comments on the front-end just in case
function df_disable_comments_status() {
   return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Finally, hide any existing comments that are on the site. 
function df_disable_comments_hide_existing_comments($comments) {
   $comments = array();
   return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

/**
 * Fix tooltip. hide link js and css in plugin woocommerce-products-filte file index.php line 1067, 1068, 1069
 */
//add css admin 
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
  @media (max-width:767px){
    #woocommerce-order-items .wc-order-totals {
    float: right;
    width: 100%;
    margin: 0;
    padding: 0;
    text-align: right;
  }
  .woocommerce-embed-page .woocommerce-layout__header.is-scrolled {
    display: none;
  }
  }
    
  </style>';
}
function auto_meta_description() {
    global $post;
	$title  = single_cat_title( '', false );
	$tax = get_queried_object();	
	$taxname = $tax->taxonomy;
	$taxonomy = $taxname;
	$term  = get_taxonomy( $taxonomy );
	$term_name = $term->label;
    if ( is_tax($taxonomy) ) {
		$title_post = strip_tags( $post->post_title );
        $site_name = get_bloginfo( 'name' );
		echo '<meta name="title" content="' . $term_name. ' '. $title.'  - '. $site_name.'" />' . "\n";
        echo '<meta name="description" content="Bán lẻ và phân phối sỉ các ' . $term_name. ' '. $title.' chất lượng cao của các hãng thiết bị điện uy tín với giá chiết khấu cao, có bảo hành & đổi trả, hậu mãi, ship COD toàn quốc." />' . "\n";
    }
   
}
add_action( 'wp_head', 'auto_meta_description', 1, 1);

// Disable Woocommerce Header in WP Admin 
add_action('admin_head', 'Hide_WooCommerce_Breadcrumb');

function Hide_WooCommerce_Breadcrumb() {
  echo '<style>
    .woocommerce-layout__header {
        display: none;
    }
    .woocommerce-layout__activity-panel-tabs {
        display: none;
    }
    .woocommerce-layout__header-breadcrumbs {
        display: none;
    }
    .woocommerce-embed-page .woocommerce-layout__primary{
        display: none;
    }
    .woocommerce-embed-page #screen-meta, .woocommerce-embed-page #screen-meta-links{top:0;}
    </style>';
}