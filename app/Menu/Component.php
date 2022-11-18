<?php

namespace Inheritance\Menu;
use Benlumia007\Backdrop\Theme\Menu\Component as MenuContract;
use function Benlumia007\Backdrop\Mix\Manifest\asset;

class Component extends MenuContract {
    public function menus() {
        return array(
            'primary'   => esc_html__( 'Primary Navigation', 'inheritance' ),
            'secondary' => esc_html__( 'Secondary Navigation', 'inheritance' ),
            'social'    => esc_html__( 'Social Navigation', 'inheritance' )
        );
    }

	public function enqueue() {
		wp_enqueue_script( 'inheritance-navigation', asset( 'assets/js/navigation.js' ), null, null, true );
		wp_localize_script( 'inheritance-navigation', 'inheritanceScreenReaderText', array(
			'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'inheritance' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'inheritance' ) . '</span>',
		) );
	}
}   