<?php
/*
Template Name: Home Page
*/
get_header(); ?>




<?php get_template_part( 'template-parts/featured-image' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<!--<?php get_template_part( 'template-parts/content', 'page' ); ?> -->

				<?php get_template_part( 'template-parts/content', 'page-home' ); ?>


				<?php comments_template(); ?>
			<?php endwhile; ?>
<?php get_footer();
