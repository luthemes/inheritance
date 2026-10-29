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
// Reuse an application that has already been booted. `Backdrop\booted()` was added on the
// framework's `develop` branch; if an older copy of the framework is loaded first (for
// example, one bundled with a plugin), fall back to creating a new application.
$theme = function_exists( 'Backdrop\booted' ) && Backdrop\booted()
	? Backdrop\app()
	: new Backdrop\Core\Application();

# ------------------------------------------------------------------------------
# Register default service providers with the application.
# ------------------------------------------------------------------------------
#
# Here are the default service providers that are essential for the theme to function
# before booting the application. These service providers form the foundation for the
# theme.
$theme->provider( Backdrop\Fonts\Provider::class );

/**
 * Register custom providers for the theme.
 */

$theme->provider( Inheritance\Provider::class );
$theme->provider( Inheritance\Clean\Provider::class );
// Boots the theme's customize component, which extends the framework's
// `Backdrop\Customize\Component`, so `Backdrop\Customize\Provider` isn't registered as well.
$theme->provider( Inheritance\Customize\Provider::class );
$theme->provider( Inheritance\Image\Provider::class );
$theme->provider( Inheritance\Menu\Provider::class );
$theme->provider( Inheritance\Settings\Provider::class );
$theme->provider( Inheritance\Sidebar\Provider::class );
$theme->provider( Inheritance\Vite\Provider::class );

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