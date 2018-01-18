<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php $children = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => 8,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 ); ?>


					<?php $loop = new WP_Query($children); ?>
						<?php if($loop->have_posts()): ?>
							<?php while($loop->have_posts()): $loop->the_post() ; ?>
                <?php if(has_post_thumbnail()) : ?>
                  <section class="identity-children">
                    <div class="grid-container">
                      <div class="grid-x align-center">
                        <div class="cell large-10">
                          <div class="grid-x grid-margin-x grid-padding-x">
                            <header class="cell">
                              <span class="entry-title"><?php the_title(); ?></span>
                            </header>
                            <aside class="cell large-4">
                              <?php the_post_thumbnail(); ?>
                            </aside>
                            <article class="cell large-8" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                              <div class="entry-content">
                                <?php the_content(); ?>
                                <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
                              </div>
                              <footer>
                                <?php
                                  wp_link_pages(
                                    array(
                                      'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
                                      'after'  => '</p></nav>',
                                    )
                                  );
                                ?>
                                <?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
                              </footer>
                            </article>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                <?php else: ?>
                    <section class="identity-children">
                      <div class="grid-container">
                        <div class="grid-x grid-padding-x grid-margin-x align-center">
                          <div class="cell large-10">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                              <header>
                                <span class="entry-title"><?php the_title(); ?></span>
                              </header>
                              <div class="entry-content">
                                <?php the_content(); ?>
                                <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
                              </div>
                              <footer>
                                <?php
                                  wp_link_pages(
                                    array(
                                      'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
                                      'after'  => '</p></nav>',
                                    )
                                  );
                                ?>
                                <?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
                              </footer>
                            </article>
                          </div>
                        </div>
                      </div>
                    </section>
                <?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					<?php wp_reset_postdata(); ?>
