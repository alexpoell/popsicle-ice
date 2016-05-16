<header class="banner">
  <div class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </button>
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php $image = get_field('site_logo', 'option'); echo($image); ?>"></a>
        <span class="slogan"><?php echo $bloginfo = get_bloginfo ( 'description' ); ?></span>
      </div>

       <?php
            wp_nav_menu( array(
                'menu'              => 'primary_navigation',
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => '     nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
  </div>
</header>
