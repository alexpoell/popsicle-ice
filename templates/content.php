<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_field('post_description'); ?>

    <?php $podcast_content = get_the_powerpress_content(); ?>

     <?php the_powerpress_content(); ?>
    <p class="read-more"><a href="<?php the_permalink(); ?>">Read the show notes ></a></h2>
  </div>
</article>
