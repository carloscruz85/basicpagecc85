<?php
/**
* Template Name: side content
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

 get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
      <img src="<?php echo get_image_g(get_the_ID()) ?>" alt="<?php echo get_the_title() ?>">
    </div>
    <div class="col-12 col-md-6">
      <h1 class="text-center color-white"><?php echo get_the_title() ?></h1>
<div class="text-read">
  <?php
  $post = get_post(get_the_ID()); // specific post
  $the_content = apply_filters('the_content', $post->post_content);
  if ( !empty($the_content) ) {
    echo $the_content;
  }
   ?>
</div>

    </div>

  </div>
</div>

<?php get_footer(); ?>
