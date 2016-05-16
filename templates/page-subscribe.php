<?php
/*
Template Name: Subscribe page
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
</div></div>
<style>
.navbar {
  background: #424242;
}
</style>
<div class="holder">

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 lead col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
          <h1>WELCOME TO DESIGN LIFE</h1>
          <p>A podcast about design and side projects for motivated creators</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-xs-12 col-sm-12 center">
      <div class="live-box">
      <div class="col-lg-10 col-lg-offset-1">
          <h3><?php the_field('purple_header'); ?></h3>
          <p><?php the_field('subscribe_description'); ?></p>

        <form action="http://designlife.us12.list-manage1.com/subscribe/post" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate nopad" novalidate="">
                <input type="hidden" name="u" value="21bda0167c84a2842d8917290">
                <input type="hidden" name="id" value="d364485418">
                <div class="mobile-fix col-lg-10 col-lg-offset-1 col-xs-12 col-sm-12">
                  <input type="text" class="footer-input form-control" id="email" placeholder="EMAIL ADDRESS" name="EMAIL" id="mce-EMAIL"/>
                  <button class="button btn footer-input">I'm in!</button>
                </div>
                <div class="col-lg-10 col-lg-offset-1">
                <p class="tiny muted">Don’t worry, we hate spam too. Your email will be kept safe and protected by Mika.</p>
                </div>
            </form>
        </div>
      </div>
    </div>

      </div>
      <div class="row bump">
        <div class="col-lg-3 col-lg-offset-3 col-md-4 col-md-offset-2 col-sm-6 left">
          <div class="creators-subscribe">
            <img src="/images/charli.png">
             <p>CHARLI MARIE | <a href="http://twitter.com/charliprangley">@charliprangley</a></p>
             <p>Living in London, Charli works full time as a marketing designer at retail analytics startup, <a href="http://edited.com/">EDITED</a>. When she’s not busy designing websites and swag, she’s <a href="https://www.youtube.com/user/charlimarieTV">editing videos</a>, <a href="http://linernotekids.com">selling her own t-shirts</a> or <a href="http://charlimarie.com/">writing honest thoughts on her blog.</a></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 right">
          <div class="creators-subscribe">
            <img src="/images/fem.png">
            <p>FEMKE VS | <a href="http://twitter.com/femkesvs">@femkesvs</a></p>
            <p>From the canals of Amsterdam, Femke works by day in marketing and communications at <a href="http://atomic.io">Atomic</a> and by night as a <a href="http://theapartment.co">digital design freelancer</a>. Otherwise Femke is either catching up with other designers <a href="http://theapartment.co/blog/">on her blog</a> or <a href="https://instagram.com/apartmentdigital/">taking pictures.</a></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-lg-offset-5 center">
          <a target="_blank" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fdesignlife.fm&text=I%20just%20signed%20up%20for%20@charliprangley%20and%20@femkesvs%27%20podcast%2C%20@designlifefm.%20You%20should%20too%21&
"><button class="invert-button">Share this!</button></a>
        </div>
      </div>

  </div>