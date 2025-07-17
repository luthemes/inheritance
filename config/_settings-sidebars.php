<?php
/**
 * Sidebar Settings Configuration.
 *
 * This file defines the sidebar locations for the inheritance theme.
 * These settings are used during theme initialization to register
 * the available sidebars with their respective names and descriptions.
 *
 * @package   inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

return [
    'primary' => [
        'name'        => esc_html__( 'Primary Sidebar', 'inheritance' ),
        'description' => 'The main sidebar for widgets alongside primary content.'
    ],
    'footer' => [
        'name'        => 'Footer Sidebar',
        'description' => 'A widget area displayed in the footer section of the site.'
    ],
];