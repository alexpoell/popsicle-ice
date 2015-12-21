</div></div>
<?php while (have_posts()) : the_post(); ?>
<div class="dark-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <p class="episode-number">Episode <?php the_field('episode_number'); ?></p>
        <?php get_template_part('templates/entry-meta'); ?>
        <h1 class="post-header"><?php the_title(); ?></h1>
      </div>
      <div class="col-lg-4">
        <?php the_field('post_description'); ?>
      </div>
    </div>
  </div>
</div>
<div class="player-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
      <?php $podcast_content = get_the_powerpress_content(); ?>

      <?php the_powerpress_content(); ?>
      </div>
    </div>
  </div>
</div>
<div class="container pad-post">

  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 post top">
    <?php if( get_field('author_note') ): ?>
      <div class="col-lg-4 thumb">
        <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        }
        ?>
      </div>
      <div class="col-lg-8">
         <p class="author-intro">"<?php the_field('author_note'); ?>"</p>
         <p class="author-name"><?php the_author(); ?></p>
      </div>
    <?php endif; ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 post bottom">
    <!--<article <?php post_class(); ?>>-->
      <hr>
      <h2>SHOW LINKS</h2>
      <p><?php the_field('show_links'); ?></p>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <hr>
      <h2>SHARE THE SHOW</h2>
      <?php echo do_shortcode("[ssba]"); ?>
      <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>

  <!--</article>-->
<?php endwhile; ?>
  </div>
</div>

    </div>
  </div>

</div>
