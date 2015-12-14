<?php
/*
Template Name: Contact Us Page
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
</div></div>

<div class="dark-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <p class="episode-number">Contact Us</p>
        <h1 class="post-header"><?php the_field('contact_subheader'); ?></h1>
      </div>
      <div class="col-lg-4">
        <?php the_field('contact_blurb'); ?>
      </div>
    </div>
  </div>
</div>

<?php while (have_posts()) : the_post(); ?>
<div class="">

      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 contact">
          <div class="lead"><h1>Contact Us</h1></div>
          <?php the_content(); ?>
        </div>
      </div>
  </div>
  <?php endwhile; ?>