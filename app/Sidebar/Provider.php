<?php
/**
 * Component Service Provider.
 *
 * Bootstraps the sidebar components.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

namespace Inheritance\Sidebar;

use Backdrop\Core\ServiceProvider;

/**
 * Component service provider class.
 *
 * @since  0.0.1
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds sidebar and menu components to the container.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function register() {


		// Register the Sidebars collection with shorthand
		$this->app->singleton( 'inheritance/sidebars', Sidebars::class );

		// Register the Sidebar Component
		$this->app->singleton( Component::class, function() {
			return new Component( $this->app->resolve( 'inheritance/sidebars' ) );
		});
	}

	/**
	 * Bootstrap the sidebar and menu components.
	 *
	 * @since  0.0.1
	 * @access public
	 * @return void
	 */
	public function boot() {

		// Boot Sidebar Component
		$this->app->resolve( Component::class)->boot();
	}
}