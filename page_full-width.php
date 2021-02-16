<?php
/**
* Template Name: Full Width
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

 get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-12">
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
