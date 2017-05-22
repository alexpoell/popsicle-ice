<?php
/*
Template Name: Live Page
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
</div></div>
<div class="live">
<div class="dark-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <p class="episode-number"><?php the_field('hero_header'); ?></p>
        <h1 class="post-header"><?php the_field('hero_tagline'); ?></h1>
      </div>
      <div class="col-lg-4">
        <?php the_field('hero_blurb'); ?>
      </div>
    </div>
  </div>
</div>
<div class="body-box">
<div class="container pad-post">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 center">
      <h2 class="bump"><?php the_field('register_header'); ?></h2>
    </div>
    <div class="col-lg-8 col-lg-offset-2 col-xs-12 col-sm-12 center">
      <div class="live-box">
      <div class="col-lg-10 col-lg-offset-1">
        <p><?php the_field('register_blurb'); ?></p>

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
    </div>
  </div>
  <div class="row bump">
    <div class="col-lg-8 col-lg-offset-2">
      <hr>
    </div>
    <div class="col-lg-10 col-lg-offset-1">
      <div class="center">
        <h1 class="heading"><?php the_field('who_header'); ?></h1>
        <p class="muted bump"><?php the_field('who_subheader'); ?></p>
      </div>
    </div>
       <div class="col-lg-4 col-lg-offset-2 col-md-4 col-sm-6 left host mobile-bump">
          <img src="<?php $image = get_field('host_image_one', 'option'); echo($image['sizes']['medium']); ?>" alt="Charli" />
          <div class="creators center">
             <p class="name">CHARLI MARIE</p>
             <p>Living in London, Charli works full time as a marketing designer at retail analytics startup, <a href="http://edited.com/">EDITED</a>. When she’s not busy designing websites and swag, she’s <a href="https://www.youtube.com/user/charlimarieTV">editing videos</a>, <a href="http://linernotekids.com">selling her own t-shirts</a> or <a href="http://charlimarie.com/">writing honest thoughts on her blog.</a></p>
             <a class="button" href="http://twitter.com/charliprangley">@charliprangley</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 right host">
          <img src="<?php $image = get_field('host_image_two', 'option'); echo($image['sizes']['medium']); ?>" alt="Charli" />
          <div class="creators center">
            <p class="name">FEMKE VS</p>
            <p>From the canals of Amsterdam, Femke works by day in marketing and communications at <a href="http://atomic.io">Atomic</a> and by night as a <a href="http://theapartment.co">digital design freelancer</a>. Otherwise Femke is either catching up with other designers <a href="http://theapartment.co/blog/">on her blog</a> or <a href="https://instagram.com/apartmentdigital/">taking pictures.</a></p>
            <a class="button" href="http://twitter.com/femkesvs">@femkesvs</a>
          </div>
        </div>
  </div>
</div>
</div>
</div>
