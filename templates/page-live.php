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

        <form action="http://designlife.us12.list-manage.com/subscribe/post" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate nopad" novalidate="">
                <input type="hidden" name="u" value="21bda0167c84a2842d8917290">
                <input type="hidden" name="id" value="53af03b0f1">
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
