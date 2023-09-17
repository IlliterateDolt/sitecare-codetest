<?php 
function register_investment_cpt() {

$labels = array(
    'name' => __( 'Investments', 'grovemountainpartners' ),
    'singular_name' => __( 'Investment', 'grovemountainpartners' ),
    'add_new' => __( 'New Investment', 'grovemountainpartners' ),
    'add_new_item' => __( 'Add New Investment', 'grovemountainpartners' ),
    'edit_item' => __( 'Edit Investment', 'grovemountainpartners' ),
    'new_item' => __( 'New Investment', 'grovemountainpartners' ),
    'view_item' => __( 'View Investments', 'grovemountainpartners' ),
    'search_items' => __( 'Search Investments', 'grovemountainpartners' ),
    'not_found' =>  __( 'No Investments Found', 'grovemountainpartners' ),
    'not_found_in_trash' => __( 'No Investments found in Trash', 'grovemountainpartners' ),
);

$args = array(
     'labels' => $labels,
     'has_archive' => true,
     'public' => true,
     'hierarchical' => false,
     'supports' => array(
      'title',
      'editor',
      'excerpt',
      'custom-fields',
      'thumbnail',
      'page-attributes'
     ),
    'menu_icon' => 'dashicons-chart-area',
     'taxonomies' => array('category'),
     'rewrite'   => array( 'slug' => 'investment' ),
     'show_in_rest' => true,
);

register_post_type( 'investments', $args );

}

add_action( 'init', 'register_investment_cpt' );
?>
