<?php
/**
 * Boot the framework
 *
 * @package   Initiator
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2019-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/initiator
 */

/**
 * Create a new framework instance
 *x
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$initiator = new Benlumia007\Backdrop\Framework();

/**
 * Register default providers.
 */
$initiator->provider( Benlumia007\Backdrop\FontAwesome\Provider::class );
$initiator->provider( Benlumia007\Backdrop\Fonts\Provider::class );
$initiator->provider( Benlumia007\Backdrop\Mix\Manifest\Provider::class );
$initiator->provider( Benlumia007\Backdrop\Template\Hierarchy\Provider::class );
$initiator->provider( Benlumia007\Backdrop\Template\Manager\Provider::class );
$initiator->provider( Benlumia007\Backdrop\Template\View\Provider::class );

/**
 * Register custom providers for the theme.
 */
$initiator->provider( Initiator\Menu\Provider::class );
$initiator->provider( Initiator\Sidebar\Provider::class );

/**
 * Create an action hook for child themes.
 */
do_action( 'initiator/child/theme', $initiator );

/**
 * Boot the Framework
 */
$initiator->boot();