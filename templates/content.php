<div class="col-lg-10 col-lg-offset-1 col-sm-12 col-xs-12 homepage-box podcasts white-box">
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
     <?php
    if ( has_post_thumbnail() ) {
      the_post_thumbnail();
    }
    ?>
  </div>
      <div class="col-lg-10 col-sm-12 col-xs-12">
        <div
   class="">
    <article <?php //post_class(); ?>>
      <header>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <div class="entry-summary">
        <?php the_field('post_description'); ?>
        <p class="read-more"><a href="<?php the_permalink(); ?>">Read the show notes ></a></p>
      </div>


    </article>
  </div>
  </div>


</div>
<div class="col-lg-10 col-lg-offset-1 podcast-player">
 <?php $podcast_content = get_the_powerpress_content(); ?>

  <?php the_powerpress_content(); ?>
</div>
