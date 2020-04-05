<?php

function create_posttype() {

  register_post_type( 'news',

    array(
      'labels' => array(
        'name' => __( 'News' ),
        'singular_name' => __( 'new' ),
        'menu_icon' => 'dashicons-book',
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'news'),
      'show_in_rest' => true,
      'supports' => array( 'thumbnail','title', 'editor','custom-fields','excerpt' )

    )
  );
}

add_action( 'init', 'create_posttype' );

?>

