<?php
/**
 * Default functions template
 * 
 * This file is used to bootstrap the theme.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */

# ------------------------------------------------------------------------------
# Load the composer files
# ------------------------------------------------------------------------------
#
# Load the composer files. Note that autoloading should happen first so that
# any classes or functions are available that we might need.

if ( file_exists( get_parent_theme_file_path( '/vendor/autoload.php' ) ) ) {
	require_once get_parent_theme_file_path( '/vendor/autoload.php' );
}
