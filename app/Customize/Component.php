<?php
/**
 * Customize component.
 *
 * Integrates the theme's settings into the customizer.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

namespace Inheritance\Customize;

use Backdrop\App;
use Backdrop\Contracts\Bootable;
use Backdrop\Customize\Component as Customize;

use Inheritance\Tools\Config;
use Inheritance\Tools\Collection;

use WP_Customize_Manager;
use function Inheritance\Vite\asset;
/**
 * Handles setting up everything we need for the customizer.
 *
 * @link   https://developer.wordpress.org/themes/customize-api
 * @since  1.0.0
 * @access public
 */
class Component extends Customize implements Bootable {

    /**
     * Adds our customizer-related actions to the appropriate hooks.
     *
     * @since  0.0.1
     * @return void
     *
     * @access public
     */
    public function boot(): void {

		parent::boot(); // Boots everything from Backdrop

		// Enqueue scripts and styles.
		add_action( 'customize_controls_enqueue_scripts', [ $this, 'controlsEnqueue'] );
	}

	/**
	 * Enqueues the customizer controls script, which hides controls whose active
	 * callback is false (see `resources/js/customize-controls.js`), and passes it the
	 * components' controls JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function controlsEnqueue() {

		wp_enqueue_script( 'inheritance-customize-controls', asset( 'resources/js/customize-controls.js' ), [ 'customize-controls' ], null, true );

		wp_add_inline_style( 'customize-controls', 'li.customize-control.inheritance-control-inactive { display: none !important; }' );

		// Set up a new collection to store our JSON.
		$json = new Collection();

		// Register component controls JSON.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->controlsJson( $json );
		}

		// Pass JSON to the controls script. `wp_localize_script()` needs an array.
		if ( $json->all() ) {
			wp_localize_script( 'inheritance-customize-controls', 'inheritanceCustomizeControls', $json->all() );
		}
	}
}