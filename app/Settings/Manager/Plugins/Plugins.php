<?php
/**
 * Plugins Collection.
 *
 * Houses the collection of plugins in a single array-object.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2024 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

namespace Inheritance\Settings\Manager\Plugins;

use Inheritance\Tools\Collection;

/**
 * Themes class.
 *
 * @since  1.2.0
 * @access public
 */
class Plugins extends Collection {

	/**
	 * Adds a new theme to the collection.
	 *
	 * @since  1.2.0
	 * @access public
	 * @param  string  $name
	 * @param  array   $value
	 * @return void
	 */
	public function add( $name, $value ) {
		
		parent::add( $name, new Plugin( $name, $value ) );
	}
}