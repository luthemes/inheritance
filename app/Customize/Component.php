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
		add_action( 'customize_preview_init',             [ $this, 'previewEnqueue' ] );
	}

	/**
	 * Register or enqueue scripts/styles for the controls that are output
	 * in the controls frame.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function controlsEnqueue() {

		// Enqueue controls style.
		wp_enqueue_style( 'inheritance-customize-controls', asset( 'assets/css/customize-controls.css' ), [], null );

		// Enqueue controls script.
		wp_enqueue_script( 'inheritance-customize-controls', asset( 'assets/js/customize-controls.js' ), [ 'customize-controls' ], null, true );

		// Set up a new collection to store our JSON.
		$json = new Collection();

		// Register component controls JSON.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->controlsJson( $json );
		}

		// Pass JSON to the controls script.
		wp_localize_script( 'inheritance-customize-controls', 'inheritanceCustomizeControls', $json );
	}

	/**
	 * Register or enqueue scripts/styles for the live preview frame.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function previewEnqueue() {

		// Enqueue preview style.
		wp_enqueue_style( 'inheritance-customize-preview', asset( 'assets/css/customize-preview.css' ), [], null );

		// Enqueue preview script.
		wp_enqueue_script( 'inheritance-customize-preview', asset( 'assets/js/customize-preview.js' ), [ 'customize-preview' ], null, true );

		// Set up a new collection to store our JSON.
		$json = new Collection();

		// Register component preview JSON.
		foreach ( $this->components as $component ) {
			App::resolve( $component )->previewJson( $json );
		}

		// Pass JSON to the preview script.
		wp_localize_script( 'inheritance-customize-preview', 'inheritanceCustomizePreview', $json );
	}
}