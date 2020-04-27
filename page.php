<?php get_header('simple'); ?>
<!-- <div id="fullpage">
	<div class="section " id="sectionimage" style="background-image: url(<?php echo get_image_g(get_the_ID()) ?>);">
		<?php
		$post = get_post(get_the_ID()); // specific post
		$the_content = apply_filters('the_content', $post->post_content);
		if ( !empty($the_content) ) {
			echo $the_content;
		}
		 ?>

	</div>
</div> -->
<?php get_footer('simple'); ?>
