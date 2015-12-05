<footer class="content-info">
<div class="dark-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <h2 class="footer-head"><?php the_field('footer_header', 'option'); ?></h2>
        <p><?php the_field('footer_blurb', 'option'); ?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <p style="text-align: center;">Brought to you by The Apartment and CharliMarieTV</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">

        <?php
        //Outputs the menu navigation from Bootstrap Walker, not Soil menu walker
          wp_nav_menu( array(
              'menu'              => 'footer_navigation',
              'theme_location'    => 'footer_navigation',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'footer-nav',
      'container_id'      => 'foot-nav',
              'menu_class'        => 'footer-navigation',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
          );
        ?>
      </div>
    </div>

  </div>
</div>
</footer>
