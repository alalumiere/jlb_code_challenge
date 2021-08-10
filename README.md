# JLB Coding Challenge

### Overview

- Description
- Code

### Description

To complete the coding challenge I downloaded XAMPP and Wordpress on my computer. I then created the necessary folders to add Wordpress to the XAMPP server.
After that I created a child thene from the twenty twenty-one theme and added the styles.css and function.php files. The I installed Woocommerce and added products to
the store. Once that was done I researched woocommerce hooks and was able to come up with a couple I wanted to try. I added a back to category feature that
shows up on the single product page. When pressed it takes you back to the parent category of the product. I also added a feature that if the product
is less than 30 days old a badge shows up above the price on the single product page that saya "New". See the code below.

### Code

```

//* back to category button

add_action ('woocommerce_share','add_back_product_category_button', 5);
function add_back_product_category_button(){

    $terms = wp_get_post_terms( get_the_id(), 'product_cat' );

    if(sizeof($terms) > 0){
        $term = reset($terms);
        $link = get_term_link( $term, 'product_cat' );

        $text = __('&larr; Back to category','woocommerce') . ' <strong>' . $term->name . '</strong>';

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

```
