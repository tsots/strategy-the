<?php
/*
Template Name: Right Sidebar
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
		<div class="grid-x outer align-center">
			<div class="cell large-10">
				<div class="grid-x content inner">
					<div class="cell large-10">
							<?php if(is_page('identity-design')) : ?>
								<?php get_template_part( 'template-parts/content', 'identity-design' ); ?>
								<?php get_template_part( 'template-parts/content', 'identity-children' ); ?>
							<?php endif; ?>
							<?php if(is_page('digital-design')) : ?>
								<?php get_template_part( 'template-parts/content', 'digital-design' ); ?>
								<?php get_template_part( 'template-parts/content', 'digital-children' ); ?>
							<?php endif; ?>
					</div>
					<aside class="cell large-2">
						<?php get_sidebar(); ?>
					</aside>
				</div>
			</div>
		</div>
<?php get_footer();
