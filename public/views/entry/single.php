<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<?php Backdrop\Post\display_title(); ?>
		<div class="entry__metadata">
			<?php Backdrop\Post\display_author(); ?>
			<?php Backdrop\Post\display_date( [ 'before' => Inheritance\Sep() ] ); ?>
		</div>
	</header>
	<div class="entry-container">
		<div class="story-content">
			<?php if ( has_post_thumbnail() ) { ?>
				<picture class="post-thumbnail">
					<?php
						$size = get_theme_mod( 'theme_content_feature_image' );
						$size = ! empty( $size ) ? $size : ( Inheritance\Tools\Mod::fallback( 'featured_image_size' ) ?: 'inheritance-landscape-medium' );
						the_post_thumbnail( $size );
					?>			
				</picture>
			<?php } ?>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php Backdrop\View\display( 'nav/pagination', 'post' ); ?>
				<?php comments_template(); ?>
			</div>	
		</div>
		<?php Backdrop\View\display( 'sidebar', 'primary', [ 'sidebar' => 'primary'] ); ?>
	</div>
</article>
