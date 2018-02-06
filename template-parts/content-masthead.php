<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<?php if(is_page('home')): ?>
  <section id="masthead" class="masthead">
    <div class="section overlay">
      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x align-center">
          <div class="large-6 cell tagline">
            <h1>Suck my dick</h1>
            <p><?php the_field('custom_tagline'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php elseif (is_page('identity-design')): ?>
  <section id="masthead" class="masthead">
    <div class="section-overlay">
      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x align-center">
          <div class="large-10 cell">
            <div class="grid-x">
              <div class="large-8 cell tagline">
                <h1>Suck my dick</h1>
                <p><?php the_field('custom_tagline'); ?></p>
              </div>
              <div class="large-4 cell image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/identity-hero-medium_03.png" />
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
  </section>
<?php elseif (is_page('digital-design')): ?>
  <section id="masthead" class="masthead">
    <div class="section-overlay">
      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x align-center">
          <div class="large-10 cell">
            <div class="grid-x">
              <div class="large-8 cell tagline">
                <h1>Suck my dick</h1>
                <p><?php the_field('custom_tagline'); ?></p>
              </div>
              <div class="large-4 cell image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/digital-world-hero-medium_03.png" />
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
  </section>
<?php elseif (is_page('graphic-design')): ?>
  <section id="masthead" class="masthead">
    <div class="section-overlay">
      <div class="grid-container">
        <div class="grid-x grid-padding-x grid-margin-x align-center">
          <div class="large-10 cell">
            <div class="grid-x">
              <div class="large-8 cell tagline">
                <h1>Suck my dick</h1>
                <p><?php the_field('custom_tagline'); ?></p>
              </div>
              <div class="large-4 cell image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/assets/images/graphic-hero-medium_03.png" />
              </div>
            </div>
            </div>
          </div>
      </div>
    </div>
  </section>
<?php endif; ?>
