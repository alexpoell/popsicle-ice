<header class="banner">
  <div class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        <p class="slogan"><?php echo $bloginfo = get_bloginfo ( 'description' ); ?></p>
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
