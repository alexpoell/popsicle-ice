<?php get_template_part('templates/page', 'header'); ?>
</div></div><!--End the wrapper forced upon us-->


<div class="dark-block">
  <div class="container">

  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 hero-video">
    <div class="video-box">
      <div class="embed-container">
       <?php the_field('video', 'option'); ?>
      </div>
    </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-5 col-lg-offset-1 hero-left">
      <?php the_field('homepage_hero_left', 'option'); ?>
    </div>
    <div class="col-lg-5">
      <?php the_field('homepage_hero_right', 'option'); ?>
    </div>
  </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="heading">
        <h1><?php the_field('first_heading', 'option'); ?></h1>
        <p class="muted"><?php the_field('sub_first_heading', 'option'); ?></p>
      </div>
    </div>
       <div class="col-lg-5 col-lg-offset-1 col-md-4 col-sm-6 left">
          <div class="creators ">
            <img src="http://designlife.fm/images/charli.png">
             <p>CHARLI MARIE | <a href="http://twitter.com/charliprangley">@charliprangley</a></p>
             <p>Living in London, Charli works full time as a marketing designer at retail analytics startup, <a href="http://edited.com/">EDITED</a>. When she’s not busy designing websites and swag, she’s <a href="https://www.youtube.com/user/charlimarieTV">editing videos</a>, <a href="http://linernotekids.com">selling her own t-shirts</a> or <a href="http://charlimarie.com/">writing honest thoughts on her blog.</a></p>
          </div>
        </div>
        <div class="col-lg-5 col-md-4 col-sm-6 right">
          <div class="creators ">
            <img src="http://designlife.fm/images/fem.png">
            <p>FEMKE VS | <a href="http://twitter.com/femkesvs">@femkesvs</a></p>
            <p>From the canals of Amsterdam, Femke works by day in marketing and communications at <a href="http://atomic.io">Atomic</a> and by night as a <a href="http://theapartment.co">digital design freelancer</a>. Otherwise Femke is either catching up with other designers <a href="http://theapartment.co/blog/">on her blog</a> or <a href="https://instagram.com/apartmentdigital/">taking pictures.</a></p>
          </div>
        </div>
  </div>
  <div class="row">
    <?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
    <div class="col-lg-10 col-lg-offset-1">
      <div class="heading">
        <h1><?php the_field('second_heading', 'option'); ?></h1>
        <p class="muted"><?php the_field('sub_second_heading', 'option'); ?></p>
      </div>
    </div>
    </div>
    <div class="row">
<?php while (have_posts()) : the_post(); ?>
    <div class="col-lg-10 col-lg-offset-1">
      <div class="podcasts white-box">

  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

      </div>
    </div>
    <?php endwhile; ?>
  </div>
</div>


<?php the_posts_navigation(); ?>
