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
  $identity = ( array(
                    'post_type' => 'page',
                    'post__in' => array( 10 )
  ));
  $digital = ( array(
                    'post_type' => 'page',
                    'post__in' => array( 12 )
  ));
  $graphic = ( array(
                    'post_type' => 'page',
                    'post__in' => array( 14 )
  ));
  $aboutUs = ( array(
                    'post_type' => 'page',
                    'post__in' => array( 23 )
  ));
  $whatWeDo = ( array(
                    'post_type' => 'page',
                    'post__in' => array( 25 )
  ));
 ?>



 <?php if (is_page('home')): ?>
   <?php get_template_part( 'template-parts/content', 'masthead' ); ?>
 <div class="container">
   <div class="grid-container">
     <div class="grid-x">
       <section id="hero" class="cell">

       </section><!-- END OF HERO SECTION -->

       <main class="content">
         <section class="services">
           <div class="grid-container">
             <div class="grid-x grid-padding-x align-center">
               <div class="large-10 medium-11 small-12 cell">
                 <div class="grid-x large-up-3">
                   <div id="identity" class="cell silo">
                     <?php $loop = new WP_Query($identity); ?>
                     <?php while($loop->have_posts()): $loop->the_post();?>
                       <div class="entry-title">
                         <?php the_title(); ?>
                       </div>
                       <div class="entry-image">
                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/mapPointer_03.png" />
                       </div>
                       <div class="entry-content">
                         <?php echo wp_trim_words(get_the_content(),15,""); ?>
                       </div>
                       <div class="entry-page-link">
                         <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
                       </div>
                     <?php endwhile;?>
                     <?php wp_reset_postdata(); ?>
                   </div><!-- END OF IDENTITY SILO -->

                   <div id="digital" class="cell silo">
                     <?php $loop = new WP_Query($digital); ?>
                     <?php while($loop->have_posts()): $loop->the_post();?>
                       <div class="entry-title">
                         <?php the_title(); ?>
                       </div>
                       <div class="entry-image">
                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/greyClouds_03.png" />
                       </div>
                       <div class="entry-content">
                         <?php echo wp_trim_words(get_the_content(),15,""); ?>
                       </div>
                       <div class="entry-page-link">
                         <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
                       </div>
                     <?php endwhile;?>
                     <?php wp_reset_postdata(); ?>
                   </div><!-- END OF DIGITAL SILO -->

                   <div id="graphic" class="cell silo">
                     <?php $loop = new WP_Query($graphic); ?>
                     <?php while($loop->have_posts()): $loop->the_post();?>
                       <div class="entry-title">
                         <?php the_title(); ?>
                       </div>
                       <div class="entry-image">
                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/graphicSet_03.png" />
                       </div>
                       <div class="entry-content">
                         <?php echo wp_trim_words(get_the_content(),15,""); ?>
                       </div>
                       <div class="entry-page-link">
                         <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
                       </div>
                     <?php endwhile;?>
                     <?php wp_reset_postdata(); ?>
                   </div><!-- END OF GRAPHIC SILO -->
                 </div>
               </div>
             </div>
           </div>
         </section><!-- END OF SERVICES SECTION -->

         <section class="about-us">
           <div class="grid-container">
             <div class="grid-x grid-margin-x align-center">
               <div class="large-10 medium-11 small-12 cell">
                 <?php $loop = new WP_Query($aboutUs); ?>
                 <?php while($loop->have_posts()): $loop->the_post();?>
                   <div class="grid-x">
                       <div class="entry-title cell">
                         <?php the_title(); ?>
                       </div>
                       <div class="medium-4 cell medium-order-2 section-image">

                       </div>
                       <div class="medium-8 cell medium-order-1 section-content">
                         <div class="entry-content cell">
                           <?php echo wp_trim_words(get_the_content(),500,""); ?>
                         </div>
                       </div>
                   </div>
                   <div class="entry-page-link cell">
                     <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
                   </div>
                 <?php endwhile;?>
                 <?php wp_reset_postdata(); ?>
               </div>
             </div>
           </div>
         </section><!-- END OF ABOUT-US SECTION -->

         <section class="about-us">
           <div class="grid-container">
             <div class="grid-x align-center">
               <div class="large-10 medium-11 small-12 cell">
                 <?php $loop = new WP_Query($whatWeDo); ?>
                 <?php while($loop->have_posts()): $loop->the_post();?>
                   <div class="grid-x">
                       <div class="entry-title cell">
                         <?php the_title(); ?>
                       </div>
                       <div class="medium-4 cell medium-order-2 section-image">

                       </div>
                       <div class="medium-8 cell medium-order-1 section-content">
                         <div class="entry-content cell">
                           <?php echo wp_trim_words(get_the_content(),500,""); ?>
                         </div>
                       </div>
                   </div>
                   <div class="entry-page-link cell">
                     <?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
                   </div>
                 <?php endwhile;?>
                 <?php wp_reset_postdata(); ?>
               </div>
             </div>
           </div>
         </section><!-- END OF WHATWEDO SECTION -->

       </main><!-- END OF MAIN CONTENT -->
     </div><!-- END OF MAIN GRID -->
   </div>
 </div><!-- END OF MAIN CONTAINER -->
 <?php endif; ?>
