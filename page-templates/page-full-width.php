<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
					<?php if(is_page('home')) : ?>
						<?php get_template_part( 'template-parts/content', 'section-services' ); ?>
						<?php get_template_part( 'template-parts/content', 'section-about-us' ); ?>
						<?php get_template_part( 'template-parts/content', 'section-what-we-do' ); ?>
					<?php endif; ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
<?php get_footer();
