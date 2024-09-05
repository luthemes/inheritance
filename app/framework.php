<?php
/**
 * Boot the Framework
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */

/**
 * Create a new framework instance
 *x
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$theme = Backdrop\booted() ? Backdrop\app() : new Backdrop\Core\Application();

/**
 * Register default providers.
 */
$theme->provider( Backdrop\Fonts\Provider::class );
$theme->provider( Backdrop\Languages\Provider::class );
$theme->provider( Backdrop\Mix\Provider::class );
$theme->provider( Backdrop\Pagination\Provider::class );
$theme->provider( Backdrop\Template\Hierarchy\Provider::class );
$theme->provider( Backdrop\Template\Manager\Provider::class );
$theme->provider( Backdrop\Theme\Provider::class );
$theme->provider( Backdrop\View\Provider::class );

/**
 * Register custom providers for the theme.
 */
$theme->provider( Inheritance\Provider::class );
$theme->provider( Inheritance\Customize\Provider::class );
$theme->provider( Inheritance\FeatureImage\Provider::class );
$theme->provider( Inheritance\Settings\Provider::class );

/**
 * Create an action hook for child themes.
 */
do_action( 'inheritance/child/theme', $theme );

/**
 * Boot the Framework
 */
$theme->boot();