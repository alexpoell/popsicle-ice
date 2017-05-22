<footer class="content-info">
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 center subscribe-footer">
        <img class="megaphone" src="/images/megaphone.png">
        <h2 class="footer-head uppercase"><?php the_field('footer_header', 'option'); ?></h2>
        <p><?php the_field('footer_blurb', 'option'); ?></p>
          <div class="ck_errorArea">
            <div id="ck_error_msg" style="display:none">
              <p>There was an error submitting your subscription. Please try again.</p>
            </div>
          </div>
          <script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
          <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/211042/subscribe" data-remote="true">
          <input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
          <input type="hidden" name="id" value="211042" id="landing_page_id">
              <div class="ck_control_group ck_captcha2_h_field_group ck-captcha2-h" style="position: absolute !important;left: -999em !important;">
                <input type="text" name="captcha2_h" class="ck-captcha2-h" id="ck_captcha2_h" placeholder="We use this field to detect spam bots. If you fill this in, you will be marked as a spammer.">
              </div>
              <div class="mobile-fix col-lg-4 col-xs-12 col-sm-12" style="padding-right:0px;">
                <input type="text" name="first_name" class="ck_first_name footer-input noglow" id="ck_firstNameField" placeholder="First Name">
              </div>
                <div class="mobile-fix col-lg-6 col-xs-12 col-sm-12" style="padding-right:0px;">
                  <input type="email" name="email" class="ck_email_address footer-input noglow" id="ck_emailField" placeholder="Email Address" required>
                </div>
                <div class="mobile-fix col-lg-2 col-xs-12 col-sm-12 form" style="padding-right:0px;">
                  <button class="button footer-input">I'm in!</button>
                </div>
            </form>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3 center icons">
        <!-- <span class="icon-facebook"></span> -->
        <a href="http://twitter.com/designlifefm"><span class="icon-twitter"></span></a>
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
