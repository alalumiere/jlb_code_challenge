<?php
//* Code goes here
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'style', get_stylesheet_uri() );
}

//* back to category button

add_action ('woocommerce_share','add_back_product_category_button', 5);
function add_back_product_category_button(){

    // Get the product categories set in the product
    $terms = wp_get_post_terms( get_the_id(), 'product_cat' );

    // Check that there is at leat one product category set for the product
    if(sizeof($terms) > 0){
        // Get the first product category WP_Term object
        $term = reset($terms);
        // Get the term link (button link)
        $link = get_term_link( $term, 'product_cat' );

        // Button text
        $text = __('&larr; Back to category','woocommerce') . ' <strong>' . $term->name . '</strong>';

        // Output
        echo '<div class="back-to-category"><a href="'.esc_url($link).'" title="'.$text.'" '.$term->slug.'">'.$text.'</a></div>';
    }
}

// New badge
add_action( 'woocommerce_single_product_summary', 'new_badge', 5 );
          
function new_badge() {
   global $product;
   $newness_days = 30; // Newness in days 
   $created = strtotime( $product->get_date_created() );
   if ( ( time() - ( 60 * 60 * 24 * $newness_days ) ) < $created ) {
      echo '<span class="itsnew">' . esc_html__( 'NEW', 'woocommerce' ) . '</span>';
   }
}