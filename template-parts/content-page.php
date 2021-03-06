<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	<main class="maincontent-class">
		<div class="grid-container">
			<div class="grid-x grid-padding-x grid-margin-x align-center">
				<div class="cell large-10">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header>
							<h1 class="entry-title"><?php the_title(); ?></h1>
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
	</main>
