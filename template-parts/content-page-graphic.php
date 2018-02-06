<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<?php
  $graphic = ( array(
                    'post_type' => 'page',
                    'post__in' => array( 14 )
  ));
 ?>

  <?php get_template_part( 'template-parts/content', 'masthead' ); ?>

  <?php if(is_page('graphic-design')) : ?>
    <?php $loop = new WP_Query($graphic); ?>
      <?php while($loop->have_posts()): $loop->the_post(); ?>
        <section id="graphic" class="outer">
          <div class="grid-container">
            <div class="grid-x grid-padding-x grid-margin-x align-center">
              <section class="cell inner small-8 medium-11 large-10">
                <div class="grid-x grid-margin-x">
                  <article class="large-9 cell">
                    <div class="the-tag-line cell"><?php strtoupper(the_field('custom_title')); ?></div>
                    <?php the_content(); ?>
                  </article>
                  <aside class="large-3 cell">
                    <?php get_sidebar(); ?>
                  </aside>
                </div>
              </section>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
