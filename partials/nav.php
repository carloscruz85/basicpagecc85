<?php // get_template_part( 'partials/nav', 'nav' );
?>
<nav class="navbar navbar-expand-lg cc85-nav">
  <a class="navbar-brand" href="#">carloscruz85</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php
  wp_nav_menu([
      'menu'            => 'header-menu',
      //  'theme_location'  => 'top',
      'container'       => 'div',
      'container_id'    => 'bs4navbar',
      'container_class' => 'collapse navbar-collapse text-uppercase text-right',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav ml-auto ',
      'depth'           => 2,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
  ]);
  ?>
</nav>




<?php
?>
