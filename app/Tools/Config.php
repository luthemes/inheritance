<?php
/**
 * Config Class.
 *
 * A simple class for grabbing and returning a configuration file from `/config`.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2024 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

namespace Inheritance\Tools;

/**
 * Config class.
 *
 * @since  1.0.0
 * @access public
 */
class Config {

	/**
	 * Includes and returns a given PHP config file. The file must return
	 * an array.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $name
	 * @return array
	 */
	public static function get( $name ) {

		$file = static::path( "{$name}.php" );

		$config = apply_filters( "inheritance/config/{$name}", file_exists( $file ) ? include( $file ) : [] );

		// Deprecated filter name with a trailing slash, kept for child themes that still use it.
		return ( array ) apply_filters_deprecated( "inheritance/config/{$name}/", [ $config ], '0.1.3', "inheritance/config/{$name}" );
	}

	/**
	 * Returns the config path or file path if set.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $file
	 * @return string
	 */
	public static function path( $file = '' ) {

		$file = trim( $file, '/' );

		return get_theme_file_path( $file ? "config/{$file}" : 'config' );
	}
}