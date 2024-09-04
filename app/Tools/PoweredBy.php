<?php
/**
 * Powered By Text Class.
 *
 * A simple class for randomly displaying a "powered by..." line of text in the
 * theme footer.
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2022 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/inheritance
 */

namespace Inheritance\Tools;

/**
 * Powered by class.
 *
 * @since  1.0.0
 * @access public
 */
class PoweredBy {

	/**
	 * Returns an array of all the powered by quotes.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public static function all() {

		return apply_filters( 'inheritance/poweredby/collection', [
			esc_html__( 'Powered by heart and soul.', 'inheritance' ),
			esc_html__( 'Powered by crazy ideas and passion.', 'inheritance' ),
			esc_html__( 'Powered by the thing that holds all things together in the universe.', 'inheritance' ),
			esc_html__( 'Powered by love.', 'inheritance' ),
			esc_html__( 'Powered by the vast and endless void.', 'inheritance' ),
			esc_html__( 'Powered by the code of a maniac.', 'inheritance' ),
			esc_html__( 'Powered by peace and understanding.', 'inheritance' ),
			esc_html__( 'Powered by coffee.', 'inheritance' ),
			esc_html__( 'Powered by sleepness nights.', 'inheritance' ),
			esc_html__( 'Powered by the love of all things.', 'inheritance' ),
			esc_html__( 'Powered by something greater than myself.', 'inheritance' ),
			esc_html__( 'Powered by whispers from the future.', 'inheritance' ),
			esc_html__( 'Powered by the fusion of technology and dreams.', 'inheritance' ),
			esc_html__( 'Powered by the strength found in kindness.', 'inheritance' ),
			esc_html__( 'Powered by the melodies of the unseen world.', 'inheritance' ),
			esc_html__( 'Powered by the courage of the unheard voices.', 'inheritance' ),
			esc_html__( 'Powered by the beauty of the human spirit.', 'inheritance' ),
			esc_html__( 'Powered by the quest for eternal wisdom.', 'inheritance' ),
			esc_html__( 'Powered by the energy of uncharted galaxies.', 'inheritance' ),
			esc_html__( 'Powered by the magic hidden in plain sight.', 'inheritance' ),
			esc_html__( 'Powered by the legacy of the ancients.', 'inheritance' ),
			esc_html__( 'Powered by the dance between light and darkness.', 'inheritance' ),
			esc_html__( 'Powered by the touch of the morning sun.', 'inheritance' ),
			esc_html__( 'Powered by the secrets of the deep ocean.', 'inheritance' ),
			esc_html__( 'Powered by the echoes of laughter and joy.', 'inheritance' ),
			esc_html__( 'Powered by the relentless pursuit of truth.', 'inheritance' ),
		] );
	}

	/**
	 * Displays a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public static function display() {

		echo esc_html( static::render() );
	}

	/**
	 * Returns a random powered by quote.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string
	 */
	public static function render() {

		$collection = static::all();

		return $collection[ array_rand( $collection, 1 ) ];
	}
}