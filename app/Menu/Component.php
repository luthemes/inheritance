<?php
/**
 * Menu - Component
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */

namespace Inheritance\Menu;
use Benlumia007\Backdrop\Theme\Menu\Component as MenuContract;
use function Benlumia007\Backdrop\Mix\Manifest\asset;

class Component extends MenuContract {
    public function menus() {
        return [
            'primary'   => esc_html__( 'Primary Navigation', 'inheritance' ),
        ];
    }

	public function enqueue() {
		wp_enqueue_script( 'inheritance-navigation', asset( 'assets/js/navigation.js' ), null, null, true );
		wp_localize_script( 'inheritance-navigation', 'inheritanceScreenReaderText', [
            'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'inheritance' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'inheritance' ) . '</span>',
        ] );
	}
}   