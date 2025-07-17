<?php
/**
 * Boot the Framework
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/luthemes/inheritance
 */

# ----------------------------------------------------------------------------------
# Create a new application.
# ----------------------------------------------------------------------------------
#
# This code creates the one true instance of the Backdrop Core Application, which can
# be access via the `Backdrop\app();` function or the `Backdrop\App` static class after
# the application has been booted.
$theme = new Backdrop\Core\Application();

# ------------------------------------------------------------------------------
# Register default service providers with the application.
# ------------------------------------------------------------------------------
#
# Here are the default service providers that are essential for the theme to function
# before booting the application. These service providers form the foundation for the
# theme.
// $theme->provider( Backdrop\Customize\Provider::class );
$theme->provider( Backdrop\Fonts\Provider::class );
$theme->provider( Backdrop\Mix\Provider::class );

/**
 * Register custom providers for the theme.
 */

$theme->provider( Inheritance\Provider::class );
$theme->provider( Inheritance\Customize\Provider::class );
$theme->provider( Inheritance\Menu\Provider::class );
$theme->provider( Inheritance\FeatureImage\Provider::class );
$theme->provider( Inheritance\Settings\Provider::class );

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# This code creates an action hook that child themes or plugins can utilize to
# integrate their own binding into the bootstrap process before the app is booted.
# The action callback receives the application instance as a parameter.

do_action( 'inheritance/child/theme', $theme );

# ------------------------------------------------------------------------------
# Bootstrap the application.
# ------------------------------------------------------------------------------
#
# The code invokes the `boot();` method of the application, which initiates the
# launch of the application. Congratulations on a job well done!

$theme->boot();