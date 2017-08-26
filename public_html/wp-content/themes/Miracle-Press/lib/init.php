<?php

add_action('wp_enqueue_scripts', 'miracle_init_css');
function miracle_init_css() {
  wp_register_style('app', get_template_directory_uri().'/dist/assets/css/app.css', null, null, 'all');
  wp_enqueue_style('app');
}

add_action('wp_enqueue_scripts', 'miracle_init_js');
function miracle_init_js() {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'app-js', get_template_directory_uri().'/dist/assets/js/app.js', false, null, true);
  wp_enqueue_script( 'app-js' );
  wp_localize_script('jquery', 'ajax',
    array(
      'url' => admin_url('admin-ajax.php')
    )
  );

}

foreach(glob(get_stylesheet_directory() . '/lib/func.d/*.php') as $file) {
  include_once $file;
}

foreach(glob(get_stylesheet_directory() . '/lib/ajax.d/*.php') as $file) {
	include_once $file;
}