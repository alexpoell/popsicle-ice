</div></div>
<?php while (have_posts()) : the_post(); ?>
<div class="dark-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-2">
        <h4 class="episode-number">Episode <?php the_field('episode_number'); ?></h4>
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
      <div class="col-lg-8 col-lg-offset-2 spacing-fix">
      <?php $podcast_content = get_the_powerpress_content(); ?>

      <?php the_powerpress_content(); ?>
      </div>
    </div>
  </div>
</div>
<div class="container pad-post post-bump bump-top">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 post top bottom">
    <?php if( get_field('author_note') ): ?>
      <div class="col-lg-10 col-lg-offset-1">
         <p class="author-intro">"<?php the_field('author_note'); ?>"</p>
         <h3 class="author-name"><?php the_author(); ?></h3>
      </div>
    <?php endif; ?>
    </div>
  </div>
</div>

<?php if( get_field('key_takeaways') ): ?>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 unpad">
      <hr>
      <h3 class="uppercase center section-wrap">Key takeaways</h3>
    </div>
  </div>
</div>
<div class="container pad-post">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 post top bottom">
      <div class="entry-content dual-column"><?php the_field('key_takeaways'); ?></div>
   </div>
  </div>
</div>
<?php endif; ?>
<?php if( get_field('show_timestamps') ): ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 unpad">
        <hr>
        <h3 class="uppercase center section-wrap">Show timestamps</h3>
      </div>
    </div>
  </div>
  <div class="container pad-post">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 post top bottom">
        <div class="entry-content dual-column"><?php the_field('show_timestamps'); ?></div>
     </div>
    </div>
  </div>
<?php endif; ?>
<?php if( get_field('show_links') ): ?>
  <div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 unpad">
      <hr>
      <h3 class="uppercase center section-wrap">Show links</h3>
    </div>
  </div>
</div>
<div class="container pad-post">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 post top bottom">
      <div class="entry-content dual-column"><?php the_field('show_links'); ?></div>
   </div>
  </div>
</div>
<?php endif; ?>
<?php if( get_field('show_credits') ): ?>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 unpad">
      <hr>
      <h3 class="uppercase center section-wrap">Show credits</h3>
    </div>
  </div>
</div>
<div class="container pad-post">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2 post bottom top">
      <div class="entry-content dual-column"><?php the_field('show_credits'); ?></div>
   </div>
  </div>
</div>
<?php endif; ?>
</div>
  <?php endwhile; ?>
</div>
