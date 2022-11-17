<?php

namespace Initiator\Menu;
use Benlumia007\Backdrop\Theme\Menu\Component as MenuContract;
use function Benlumia007\Backdrop\Mix\Manifest\asset;

class Component extends MenuContract {
    public function menus() {
        return array(
            'primary'   => esc_html__( 'Primary Navigation', 'initiator' ),
            'secondary' => esc_html__( 'Secondary Navigation', 'initiator' ),
            'social'    => esc_html__( 'Social Navigation', 'initiator' )
        );
    }

	public function enqueue() {
		wp_enqueue_script( 'initiator-navigation', asset( 'assets/js/navigation.js' ), null, null, true );
		wp_localize_script( 'initiator-navigation', 'initiatorScreenReaderText', array(
			'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'initiator' ) . '</span>',
			'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'initiator' ) . '</span>',
		) );
	}
}   