<?php
/*
Template Name: Subscribe page
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
</div></div>
<div class="dark-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <h4 class="episode-number">SUBSCRIBE</h4>
        <h1 class="post-header">Sign up to get weekly updates of new episodes</h1>
        <div class="sub-box">
          <script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
          <form id="ck_subscribe_form" class="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/211042/subscribe" data-remote="true">
          <input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
          <input type="hidden" name="id" value="211042" id="landing_page_id">
          <div class="ck_errorArea">
            <div id="ck_error_msg" style="display:none">
              <p>There was an error submitting your subscription. Please try again.</p>
            </div>
          </div>
            <div class="mobile-fix col-lg-12 col-xs-12 col-sm-12 nopad">
              <input type="text" name="first_name" class="ck_first_name footer-input form-control noglow" id="ck_firstNameField" placeholder="First Name">
              <input type="email" name="email" class="ck_email_address footer-input form-control noglow" id="ck_emailField" placeholder="Email Address" required>
              <button class="button btn footer-input">I'm in!</button>
              <div class="ck_control_group ck_captcha2_h_field_group ck-captcha2-h" style="position: absolute !important;left: -999em !important;">
                <input type="text" name="captcha2_h" class="ck-captcha2-h" id="ck_captcha2_h" placeholder="We use this field to detect spam bots. If you fill this in, you will be marked as a spammer.">
              </div>
            </div>
            <div class="col-lg-12 nopad">
            <p class="tiny muted">Don’t worry, we hate spam too. Your email will be kept safe and protected by Mika.</p>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <?php the_field('subscribe_description'); ?>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 unpad">
        <h3 class="uppercase center section-wrap">What our listeners say</h3>
      </div>
    </div>
  </div>
  <?php
    // check if the repeater field has rows of data
  if( have_rows('testimonials') ):?>
  <div class="container pad-post">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 top bottom">
        <?php
        // loop through the rows of data
        while ( have_rows('testimonials') ) : the_row();?>
        <div class="col-lg-4 testimonial">
          <p><?php the_sub_field('quote'); ?></p>
          <p class="uppercase handles"><a href="http://twitter.com/<?php the_sub_field('twitter_handle'); ?>"><strong><?php the_sub_field('twitter_handle'); ?></strong></a></p>
        </div>

        <?php endwhile;?>
     </div>
    </div>
  </div>
  <?php else :
    // no rows found
    endif;
  ?>