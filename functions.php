<?php

require_once('includes/bs4navwalker-master/bs4navwalker.php');


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function add_theme_scripts() {
 wp_enqueue_style( 'cc85', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// include custom jQuery
function include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, false);
}

add_action('wp_enqueue_scripts', 'include_custom_jquery');

add_theme_support( 'post-thumbnails' );

function get_image_g( $id , $cover = 'null') {
	// echo $cover;
	if (has_post_thumbnail( $id ) ):
	   $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
	   return $image[0];
 	else :
 		return $cover;
 	endif;
}


function getImg($name)
{
	return  get_template_directory_uri() . '/assets/media/' . $name;
}

function x($d){
  ?>
  <pre>
    <?php print_r($d) ?>
  </pre>
  <?php
}

function pagination_nav() {
    global $wp_query;

    if ( $wp_query->max_num_pages > 1 ) { ?>
        <nav class="pagination" role="navigation">
            <div class="nav-previous"><?php next_posts_link( '&larr; Older posts' ); ?></div>
            <div class="nav-next"><?php previous_posts_link( 'Newer posts &rarr;' ); ?></div>
        </nav>
<?php }
}
 ?>
