<?php
/**
 * Theme - Scripts
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/luthemes/inheritance
 */

namespace Inheritance;
  
use function Inheritance\Vite\asset;

/**
 * Enqueue Scripts and Styles
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
add_action( 'wp_enqueue_scripts', function() {

	/**
	 * Rather than enqueue the main stylesheet, we are going to enqueue sceen.css since all of the styles will
	 * go here. We only need parse the information for the Theme in style.css so that it can be activated.
	 */
	wp_enqueue_style( 'inheritance-screen', asset( 'resources/scss/screen.scss' ), null, null );
	wp_enqueue_script( 'inheritance-app', asset( 'resources/js/app.js' ), [ 'jquery' ], null, true );

	// Enqueue Navigation.
	wp_enqueue_script( 'inheritance-navigation', asset( 'resources/js/navigation.js' ), [ 'jquery' ], null, true );

	// Screen reader text for the menu toggles. `navigation.js` sets these as plain text.
	wp_localize_script( 'inheritance-navigation', 'inheritanceScreenReaderText', [
		'expandMain'    => __( 'Open the main menu', 'inheritance' ),
		'collapseMain'  => __( 'Close the main menu', 'inheritance' ),
		'expandChild'   => __( 'expand child menu', 'inheritance' ),
		'collapseChild' => __( 'collapse child menu', 'inheritance' ),
	] );

	/**
	 * This allows users to comment by clicking on reply so that it gets nested.
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );