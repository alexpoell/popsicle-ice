<?php
/*
Template Name: Archive Page
*/
?>
</div></div><!--End the wrapper forced upon us-->


<div class="dark-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-lg-offset-1">
        <h2>Archive</h2>
      </div>
      <div class="col-lg-4 col-lg-offset-1">
      <?php the_field('archive_description', 'option'); ?>
      </div>
    </div>
  </div>
</div>

<div class="container">
<div class="col-lg-10 col-lg-offset-1">
      <?php
      query_posts( array( 'post_type' => 'post') );
      $the_query = new WP_Query( $args );
      $count = 0;
      if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ($count == 0): ?>
          <div class="row archive">
          <div class="col-lg-4 center archive-contain">
      <?php elseif ($count % 3 == 0): ?>
          </div>
          <div class="row archive">
          <div class="col-lg-4 center archive-contain">
          <?php $count = 0; ?>
      <?php else: ?>
        <div class="col-lg-4 center archive-contain">
      <? endif; ?>
        <img src="<?php $image = get_field('archive_image'); echo($image['sizes']['large']); ?>">
        <div class="archive-box">
          <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_field('post_description'); ?></p>
          <a class="button" href="" style="color:white;">LISTEN</a>
        </div>
      </div>


      <?php $count++;?>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-lg-offset-1">
      <div class="nav-previous alignleft"><?php next_posts_link( '< Older posts' ); ?></div>
    </div>
    <div class="col-lg-3 col-lg-offset-4">
      <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts >' ); ?></div>
    </div>
  </div>
</div>
