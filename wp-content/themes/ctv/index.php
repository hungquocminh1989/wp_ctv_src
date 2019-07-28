<?php 

repoPostToFacebook(360);
die();
echo 111;

$args = array(
    'type' => 'simple',
    'id' => 360,
);
$product = wc_get_product( 360 );
//foreach ($products as $product) {
	repoDebugVar($product->id);
	repoDebugVar($product->name);
	repoDebugVar($product->description);
	repoDebugVar($product->short_description);
	repoDebugVar($product->price);
	repoDebugVar($product->regular_price);
	repoDebugVar(get_post_meta($product->id, 'org_price', true ));
	repoDebugVar(get_post_meta($product->id, 'ctv_price', true ));
	repoDebugVar($product);
	//$fields = get_field('fb_tieu_de', $product->id);
    //repoDebugVar($fields);
//}


$args['post_type'] = 'token';
// The Query
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $fields = get_fields();
        repoDebugVar($fields);
        //echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();