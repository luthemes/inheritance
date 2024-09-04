<?php
/**
 * Image Sizes Config.
 *
 * Defines the image sizes that the theme sets.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

 return [

	// Landscape sizes.
	'inheritance-landscape-small' => [
		'label'            => __( 'Landscape: Small', 'inheritance' ),
		'width'            => 284,
		'height'           => 150,
		'is_featured_size' => false
	],
	'inheritance-landscape-medium' => [
		'label'  => __( 'Landscape: Medium', 'inheritance' ),
		'width'  => 640,
		'height' => 360
	],
	'inheritance-landscape-large' => [
		'label'  => __( 'Landscape: Large', 'inheritance' ),
		'width'  => 896,
		'height' => 504
	]
];