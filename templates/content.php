<div class="col-lg-10 col-lg-offset-1 homepage-box">
  <div class="podcasts white-box">
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

  <?php $podcast_content = get_the_powerpress_content(); ?>

  <?php the_powerpress_content(); ?>
</div>
