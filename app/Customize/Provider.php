<?php
/**
 * Customize service provider.
 *
 * Bootstraps the customize component.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

namespace Inheritance\Customize;

use Backdrop\Tools\Collection;
use Backdrop\Core\ServiceProvider;
use Inheritance\Customize\Background;
use Inheritance\Customize\Footer;

/**
 * Customize service provider.
 *
 * @since  1.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds customize component to the container.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function register(): void {

		$this->app->singleton( Component::class, function() {
			return new Component( [
                FeatureImage\Customize::class,
				Footer\Customize::class
			] );
		} );
	}

	/**
	 * Bootstrap the customize component.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function boot(): void {

		$this->app->resolve( Component::class )->boot();
	}
}