<?php
/**
 * Default index template
 *
 * @package   Inheritance
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright Copyright (C) 2022. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/benlumia007/inheritance
 */
?>
<?php $engine = Benlumia007\Backdrop\App::resolve( 'view/engine' ); ?>
<?php $engine->display( 'header' ); ?>
	<section id="content" class="app-content">
		<main id="main" class="app-main">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						$engine->display( 'content', get_post_format()  );
					endwhile;
					the_posts_pagination();
				else :
						$engine->display( 'content/none' );
				endif;
			?>
		</main>
	</section>
<?php $engine->display( 'footer' ); ?>