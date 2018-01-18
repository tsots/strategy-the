<?php

// Custom Logo Setup
function theme_logo_setup() {

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_logo_setup' );

// The filter that controls body classes
add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_page() ) {
        $classes[] = strtolower (wp_trim_words ("page_" . get_the_title(),1,''));
    }
    return $classes;
}

add_post_type_support( 'page', 'excerpt' );

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Declare Woocommerce support in theme_logo_setup
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

register_nav_menus(
	array(
'social-nav' => esc_html__( 'Social Navigation', 'foundationpress' ),
));


function foundationpress_social_nav() {
	wp_nav_menu( array(
		'theme_location' => 'social-nav',
		'menu' => 'Social Menu',
		'container' => false, // remove nav container
		'container_class' => '', // class of container
		'menu_class' => 'top-bar-menu right menu', // adding custom nav class
		'before' => '', // before each link <a>
		'after' => '', // after each link </a>
		'link_before' => '', // before each link text
		'link_after' => '', // after each link text
		'depth' => 5, // limit the depth of the nav
		'fallback_cb' => false, // fallback function (see below)
		'walker' => new social_nav_walker()
	) );
}


/**
 * Customized menu output
 */
class social_nav_walker extends Walker_Nav_Menu {
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
		$element->has_children = !empty( $children_elements[$element->ID] );
		$element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
		$element->classes[] = ( $element->has_children ) ? 'has-dropdown not-click' : '';
		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
	function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
		$item_html = '';
		parent::start_el( $item_html, $object, $depth, $args );
		//$output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';
		$classes = empty( $object->classes ) ? array() : (array) $object->classes;
		if ( in_array('label', $classes) ) {
			//$output .= '<li class="divider"></li>';
			$item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
		}
		if ( in_array('divider', $classes) ) {
			$item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
		}
		$output .= $item_html;
	}
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$output .= "\n<ul class=\"sub-menu dropdown\">\n";
	}
}
