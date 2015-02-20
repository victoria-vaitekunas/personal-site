<?php 
  
  //need featured images
	add_theme_support('post-thumbnails');

  //just nav things
	function register_my_menu() {
  		register_nav_menu('header-menu',__( 'Header Menu' ));	
	}
	add_action( 'init', 'register_my_menu' );

  //conditionally load prism.js only where needed
  function syntax_hi() {
    if(is_singular() || is_archive()) {
      wp_register_style('prismcss', get_bloginfo('template_url') . '/css/prism.css', false, null, null);
      wp_enqueue_style('prismcss');
      wp_register_script('prismjs', get_bloginfo('template_url') . '/js/prism.js', array('jquery'), null, true);
      wp_enqueue_script('prismjs');
    }
  }
  add_action('wp_enqueue_scripts', 'syntax_hi');

  //load rest of the scripts,styles
  function load_scripts() {
    //no wp jquery
    wp_deregister_script('jquery');
    //add google jquery
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null, true);
    wp_enqueue_script('jquery');
    //get css
    wp_register_style('custom_css', get_bloginfo('template_url') . '/css/new-css/style.css', false, null, null);
    wp_enqueue_style('custom_css');
    //add custom js
    wp_register_script('custom_js', get_bloginfo('template_url') . '/js/script.js', array('jquery'), null, true);
    wp_enqueue_script('custom_js');
  }
  add_action('wp_enqueue_scripts','load_scripts');

  //different header on front page
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
  
  //add custom class to single post prev/next links  
  add_filter('next_post_link', 'post_link_attributes');
  add_filter('previous_post_link', 'post_link_attributes');

  function post_link_attributes($output) {
    $code = 'class="single-link-1"';
      return str_replace('<a href=', '<a '.$code.'href=', $output);
    }
  //paaaaaaaginate
  function wp_pagination() {
    global $wp_query;
    $big = 9999999999;
    $page_format = paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ))),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged')),
      'total' => $wp_query->max_num_pages,
      'type' => 'array' 
      ));
    if( is_array($page_format) ) {
      $paged =( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
      echo '<div class="pagination"><ul>';
      echo '<li><span>' . $paged . ' of ' . $wp_query->max_num_pages . '</span></li>';
      foreach ( $page_format as $page ) {
        echo "<li>$page</li>";
      }
      echo '</ul></div>';
    }
  }
  //link caaaaategories
  function make_category_links() {
    $categories = get_the_category();
    $separator = ' ';
    $output = '';
    if ($categories){
      echo '<p class="cat-link">';
      //echo 'Read more on ';
      foreach($categories as $category) {
        $output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
        //echo get_category_link($category->term_id);
      }
      echo trim($output, $separator);
      echo '</p>';
    }
  }
?>