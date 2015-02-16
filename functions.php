<?php 

	add_theme_support('post-thumbnails');


	function register_my_menu() {
  		register_nav_menu('header-menu',__( 'Header Menu' ));	
	}
	add_action( 'init', 'register_my_menu' );

  function load_scripts() {
    //no wp jquery
    wp_deregister_script('jquery');
    //add google jquery
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null, true);
    wp_enqueue_script('jquery');
    //get css
    wp_register_style('custom_css', get_bloginfo('template_url') . '/css/style.css', false, null, false);
    wp_enqueue_style('custom_css');
    //add custom js
    wp_register_script('custom_js', get_bloginfo('template_url') . '/js/script.js', array('jquery'), null, true);
    wp_enqueue_script('custom_js');
    //wp_enqueue_style('style-name', 'get_stylesheet_uri()');
    //wp_enqueue_script()
  }
  add_action('wp_enqueue_scripts','load_scripts');
 
	function get_my_header() {
  		// if is home, which is the front page
  		if(is_front_page()) {
    		// then get the header-home.php
    		get_header('home');
    		// else get the normal header.php  
  		} else {
    		get_header();
  		}
	}
    add_filter('next_post_link', 'post_link_attributes');
    add_filter('previous_post_link', 'post_link_attributes');

    function post_link_attributes($output) {
        $code = 'class="single-link-1"';
        return str_replace('<a href=', '<a '.$code.'href=', $output);
    }
?>