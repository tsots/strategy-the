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
  $digital = ( array(
                    'post_type' => 'page',
                    'post__in' => array( 12 )
  ));
 ?>

  <section id="identity">
    <?php if(is_page('digital-design')) : ?>
      <?php get_template_part( 'template-parts/content', 'masthead' ); ?>
      <?php $loop = new WP_Query($digital); ?>
        <?php while($loop->have_posts()): $loop->the_post(); ?>
          <div class="grid-container">
            <div class="grid-x grid-padding-x grid-margin-x align-center">
              <div class="cell small-8 medium-11 large-10">
              <div class="grid-x grid-margin-x">
                <div class="large-9 cell">
                  <div class="the-tag-line cell"><?php strtoupper(the_field('custom_title')); ?></div>
                  <?php the_content(); ?>
                </div>
                <aside class="large-3 cell">
                  <?php get_sidebar(); ?>
                </aside>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </section>
