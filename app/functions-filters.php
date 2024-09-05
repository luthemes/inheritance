<?php
/**
 * Theme filters and actions.
 *
 * Adds and defines custom filters and actions the theme adds to core ClassicPress.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

namespace Inheritance;

use Inheritance\Template\ErrorPage;

/**
 * Change Tempalate Path
 * 
 * @since  1.0.0
 */
add_filter( 'backdrop/template/path', function() {

	return 'public/views';
} );

/**
 * Filters the excerpt length.
 *
 * @since  1.0.0
 * @access public
 * @return int
 */
add_filter( 'excerpt_length', function() {

	return 20;
}, 5 );

/**
 * Filters the excerpt more link.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
add_filter( 'excerpt_more', function() {

	return sprintf(
		'&thinsp;&hellip;&thinsp;<a href="%s" class="entry__more-link italic">%s</a>',
		esc_url( get_permalink() ),
		sprintf(
			// Translators: %s is the post title for screen readers.
			esc_html__( 'Continue reading&nbsp;%s&nbsp;&rarr;', 'inheritance' ),
			the_title( '<span class="screen-reader-text">', '</span>', false )
		)
	);
} );

/**
 * Adds error data for the 404 content template. Passes in the `ErrorPage` object
 * as the `$error` variable.
 *
 * @since  1.0.0
 * @access public
 * @param  \backdrop\Tools\Collection  $data
 * @return \backdrop\Tools\Collection
 */
add_filter( 'backdrop/view/content/data', function( $data ) {

	if ( is_404() ) {
		$data->add( 'error', new ErrorPage() );
	}

	return $data;

} );

/**
 * Filters the post states on the manage pages screen. Adds a "404 Page" state
 * to show users which page has been assigned as their 404 page.
 *
 * @since  1.0.0
 * @access public
 * @param  array    $states
 * @param  \WP_Post $post
 * @return array
 */
add_filter( 'display_post_states', function( $states, $post ) {

	if ( 'page' === $post->post_type && $post->ID === absint( Options::get( 'error_page' ) ) ) {
		$states['exhale_error_404'] = __( '404 Page', 'inheritance' );
	}

	return $states;

}, 10, 2 );