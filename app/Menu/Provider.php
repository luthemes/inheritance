<?php
/**
 * Menu - Provider
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */

/**
 * Define namespace
 */
namespace Inheritance\Menu;
use Benlumia007\Backdrop\Support\ServiceProvider;
use Inheritance\Menu\Component;

/**
 * Attr provider class.
 *
 * @since  5.0.0
 * @access public
 */
class Provider extends ServiceProvider {

	/**
	 * Binds the implementation of the attributes contract to the container.
	 *
	 * @since  2.0.0
	 * @access public
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'inheritance/menu', Component::class );
    }
    
    public function boot() {
        $this->app->resolve( 'inheritance/menu' )->boot();
    }
}