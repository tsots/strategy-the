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
		$services = ( array(
											'post_type' => 'page',
											'post__in' => array( 14 )
		));
	 ?>

	<section class="services">
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-margin-x align-center">
				<div class="cell large-10">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php $loop = new WP_Query($services); ?>
						<?php if($loop->have_posts()): ?>
						<div class="grid-x">
							<?php while ($loop->have_posts()) : $loop->the_post(); ?>
									<div class="cell">
										<h1 class="entry-title"><?php the_title(); ?></h1>
									</header>
									<div class="entry-content">
										<?php the_content(); ?>
										<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
									</div>
									</div>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
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
