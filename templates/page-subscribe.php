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
          <form action="http://designlife.us12.list-manage1.com/subscribe/post" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate nopad" novalidate="">
            <input type="hidden" name="u" value="21bda0167c84a2842d8917290">
            <input type="hidden" name="id" value="d364485418">
            <div class="mobile-fix col-lg-12 col-xs-12 col-sm-12 nopad">
              <input type="text" class="footer-input form-control" id="email" placeholder="EMAIL ADDRESS" name="EMAIL" id="mce-EMAIL"/>
              <button class="button btn footer-input">I'm in!</button>
            </div>
            <div class="col-lg-12 nopad">
            <p class="tiny muted">Don’t worry, we hate spam too. Your email will be kept safe and protected by Mika.</p>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <p>Critiquing your own work is an important skill to learn, especially when it comes to side projects. When you set yourself a brief, you have to learn to look at your work in a new light and see it from an outside perspective to truly make it the best it can be.</p>

        <p>In this episode we share tips for doing that and talk about the challenges of self-critique (like loving your work too much to see that something isn’t working).</p>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 unpad">
        <h3 class="uppercase center section-wrap">What others say about our newsletter</h3>
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
          <p class="uppercase"><strong><?php the_sub_field('name'); ?><?php if(the_sub_field('twitter_handle')):?> – <?php endif;?><?php the_sub_field('twitter_handle'); ?></strong></p>
        </div>

        <?php endwhile;?>
     </div>
    </div>
  </div>
  <?php else :
    // no rows found
    endif;
  ?>