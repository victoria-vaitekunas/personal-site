<?php 

	add_theme_support('post-thumbnails');


	function register_my_menu() {
  		register_nav_menu('header-menu',__( 'Header Menu' ));	
	}
	add_action( 'init', 'register_my_menu' );

	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
		function my_jquery_enqueue() {
   		wp_deregister_script('jquery');
   		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null, true);
   		wp_enqueue_script('jquery');
	}
 
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