<?php
/**
 * Theme - Filters
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
namespace Inheritance;

/**
 * Change Tempalate Path
 * 
 * @since  1.0.0
 */
add_filter( 'backdrop/template/path', function() {
	return 'public/views';
} );