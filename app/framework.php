<?php
/**
 * Boot the framework
 *
 * @package   inheritance
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */

/**
 * Create a new framework instance
 *x
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$inheritance = new Benlumia007\Backdrop\Framework();

/**
 * Register default providers.
 */
$inheritance->provider( Benlumia007\Backdrop\FontAwesome\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Fonts\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Mix\Manifest\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Template\Hierarchy\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Template\Manager\Provider::class );
$inheritance->provider( Benlumia007\Backdrop\Template\View\Provider::class );

/**
 * Register custom providers for the theme.
 */
$inheritance->provider( Inheritance\Menu\Provider::class );
// $inheritance->provider( inheritance\Sidebar\Provider::class );

/**
 * Create an action hook for child themes.
 */
do_action( 'inheritance/child/theme', $inheritance );

/**
 * Boot the Framework
 */
$inheritance->boot();