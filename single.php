<?php get_header(); ?>
<div class="container">
  <div class="row justify-content-center">

    <?php
    if(get_image_g(get_the_ID()) != 'null'){
      ?>
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
      <?php
    }else{
      ?>
      <div class="col-10 col-md-6 ">
        <h1 class="text-center color-white pb-5"><?php echo get_the_title() ?></h1>
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
      <?php
    }
     ?>



  </div>
</div>

<?php get_footer(); ?>
