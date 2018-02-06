<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
					<?php if (is_page('identity-design')): ?>
							<?php get_template_part( 'template-parts/content', 'page-identity' ); ?>
						<?php elseif (is_page('digital-design')): ?>
							<?php get_template_part( 'template-parts/content', 'page-digital' ); ?>
						<?php elseif (is_page('graphic-design')): ?>
							<?php get_template_part( 'template-parts/content', 'page-graphic' ); ?>
					<?php endif; ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
<?php get_footer();
