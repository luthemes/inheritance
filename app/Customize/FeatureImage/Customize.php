<?php
/**
 * Footer component.
 *
 * Integrates the theme's settings into the customizer.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

namespace Inheritance\Customize\FeatureImage;

use Inheritance\Customize\Customizable;
use Inheritance\Tools\Collection;
use Inheritance\Tools\Config;
use Inheritance\Tools\Mod;

use WP_Customize_Manager;

class Customize extends Customizable {

	/**
	 * Registers customizer sections.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerSections( WP_Customize_Manager $manager ) {

		$manager->add_section( 'theme_content_feature_image', [
			'panel' => 'theme_content',
			'title' => 'Feature Image',
		] );
	}

	/**
	 * Registers customizer settings.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerSettings( WP_Customize_Manager $manager ) {

        // Add a setting for the feature image size.
        $manager->add_setting( 'theme_content_feature_image', array(
        'default'   => Mod::fallback( 'featured_image_size' ),
        ) );
	}

	/**
	 * Registers customizer controls.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerControls( WP_Customize_Manager $manager ) {

        // Prepare choices array.
        $choices = Config::get( 'image-sizes' );

        $choices = array_slice( $choices, -2, 2, true );

        foreach ( $choices as $size_name => $size_attrs ) {
            $choices[ $size_name ] = $size_attrs['label'];
        }

        // Add a control for the feature image size.
        $manager->add_control( 'theme_content_feature_image', array(
            'label'    => __( 'Feature Image Size', 'inheritance' ),
            'section'  => 'theme_content_feature_image',
            'settings' => 'theme_content_feature_image',
            'type'     => 'select',
            'choices'  => $choices,
        ) );
	}

	/**
	 * Registers customizer partials.
	 *
	 * @since  2.1.0
	 * @access public
	 * @param  WP_Customize_Manager  $manager
	 * @return void
	 */
	public function registerPartials( WP_Customize_Manager $manager ) {

	}

	/**
	* Registers JSON for the customize controls script via `wp_localize_script()`.
	*
	* @since  2.1.0
	* @access public
	* @param  Collection  $json
	* @return void
	*/
	public function controlsJson( Collection $json ) {

	}

	/**
	* Registers JSON for the customize preview script via `wp_localize_script()`.
	*
	* @since  2.1.0
	* @access public
	* @param  Collection  $json
	* @return void
	*/
	public function previewJson( Collection $json ) {

	}
}