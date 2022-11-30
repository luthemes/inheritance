<?php
/**
 * Theme - Compatibility
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */

/**
 * 1.0 - Compatibility Check
 */
function inheritance_compatibility_check() {
	if ( version_compare( $GLOBALS['wp_version'], '4.9', '<' ) ) {
		return sprintf(
			// translators: 1 =  a version string, 2 = current wp version string.
			__( 'Inheritance requires at least WordPress version %1$s. You are currently running %2$s. Please upgrade and try again.', 'inheritance' ),
			'4.9',
			$GLOBALS['wp_version']
		);
	} elseif ( version_compare( PHP_VERSION, '7.4', '<' ) ) {
		return sprintf(
			// translators: 1 =  a version string, 2 = current wp version string.
			__( 'Inheritance requires at least PHP version %1$s. You are currently running %2$s. Please upgrade and try again.', 'inheritance' ),
			'7.4',
			PHP_VERSION
		);
	}
	return '';
}

/**
 * Triggered after switch themes and check if it meets the requirements.
 */
function inheritance_switch_theme() {
	if ( version_compare( $GLOBALS['wp_version'], '4.9', '<' ) || version_compare( PHP_VERSION, '7.4', '<' ) ) {
		switch_theme( get_option( 'theme_switched' ) );
		add_action( 'admin_notices', 'inheritance_upgrade_notice' );
	}
	return false;
}
add_action( 'after_switch_theme', 'inheritance_switch_theme' );

/**
 * Displays an error if it doesn't meet the requirements.
 */
function inheritance_upgrade_notice() {
	printf( '<div class="error"><p>%s</p></div>', esc_html( inheritance_compatibility_check() ) );
}