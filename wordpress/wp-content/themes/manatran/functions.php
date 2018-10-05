<?php
function scratch_enqueue_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri());
  // wp_enqueue_script('script-name', get_template_directory_uri());
}

function register_sidebar_locations() {
  register_sidebar(
    array(
      'id'            => 'primary-sidebar',
      'name'          => __( 'Primary Sidebar' ),
      'description'   => __( 'Main sidebar displaying the usual post info' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );
}

add_action( 'widgets_init', 'register_sidebar_locations' );
add_action('wp_enqueue_scripts', 'scratch_enqueue_scripts');

?>