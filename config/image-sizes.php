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
	'post-thumbnail' => [
		'label'            => __( 'Landscape: Thumbnail', 'inheritance' ),
		'width'            => 178,
		'height'           => 100,
		'is_featured_size' => false
	],
	'inheritance-landscape-small' => [
		'label'            => __( 'Landscape: Small', 'inheritance' ),
		'width'            => 284,
		'height'           => 150,
	],
	'inheritance-landscape-medium' => [
		'label'  => __( 'Landscape: Medium', 'inheritance' ),
		'width'  => 640,
		'height' => 360
	],
	'inheritance-landscape-large' => [
		'label'  => __( 'Landscape: Large', 'inheritance' ),
		'width'  => 800,
		'height' => 450
	]
];