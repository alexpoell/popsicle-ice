<footer class="content-info">
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 center subscribe-footer">
        <img class="megaphone" src="/images/megaphone.png">
        <h2 class="footer-head"><?php the_field('footer_header', 'option'); ?></h2>
        <p><?php the_field('footer_blurb', 'option'); ?></p>
        <form action="http://designlife.us12.list-manage1.com/subscribe/post" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate="">
                <input type="hidden" name="u" value="21bda0167c84a2842d8917290">
                <input type="hidden" name="id" value="d364485418">
                <div class="mobile-fix col-lg-8 col-xs-12 col-sm-12" style="padding-right:0px;">
                  <input type="text" class="footer-input" id="email" placeholder="EMAIL ADDRESS" name="EMAIL" id="mce-EMAIL"/>
                </div>
                <div class="mobile-fix col-lg-4 col-xs-12 col-sm-12 form" style="padding-right:0px;">
                  <button class="button footer-input">I'm in!</button>
                </div>
            </form>
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

     <div class="row">
      <div class="col-lg-6 col-lg-offset-3 center">
        <p class="copyright"><?php the_field('footer_copyright', 'option'); ?></p>
      </div>
    </div>
  </div>
</div>
</footer>
