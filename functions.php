<?php 
  function sh_register_styles_scripts(){
    wp_enqueue_style('sh_mq', get_template_directory_uri().'/css/media_query.css', array(), '1', 'all');
    wp_enqueue_style('sh_bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '1', 'all');
    wp_enqueue_style('sh_fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1', 'all');
    wp_enqueue_style('sh_animate', get_template_directory_uri().'/css/animate.css', array(), '1', 'all');
    wp_enqueue_style('sh_font', 'https://fonts.googleapis.com/css?family=Poppins', array(), '1', 'all');
    wp_enqueue_style('sh_owl', get_template_directory_uri().'/css/owl.carousel.css', array(), '1', 'all');
    wp_enqueue_style('sh_owld', get_template_directory_uri().'/css/owl.theme.default.css', array(), '1', 'all');
    wp_enqueue_style('sh_style', get_template_directory_uri().'/style.css', array(), '1', 'all');


    // scripts
    wp_enqueue_script('sh_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1', true);
    wp_enqueue_script('sh_modernizr', get_template_directory_uri().'/js/modernizr-3.5.0.min.js', array(), '1', true);
    wp_enqueue_script('sh_bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script('sh_owl_js', get_template_directory_uri().'/js/owl.carousel.min.js', array(), '1', true);
    wp_enqueue_script('sh_tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array(), '1.4.0', true);
    wp_enqueue_script('sh_waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array(), '1', true);
    wp_enqueue_script('sh_custom', get_template_directory_uri().'/js/main.js', array(), '1', true);
  }
  add_action( 'wp_enqueue_scripts', 'sh_register_styles_scripts' );


  function sh_register_menus(){
    require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
    register_nav_menus( [
      'primary' => 'Top Main Menu'
    ] );
  };
  add_action('init', 'sh_register_menus');

  
  function sh_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'sh_theme_support');
?>