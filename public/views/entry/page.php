<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php Backdrop\Post\display_title(); ?>
	</header>
	<div class="entry-container">
		<div class="story-content">
			<?php if ( has_post_thumbnail() ) { ?>
				<picture class="post-thumbnail">
				<?php
					$size = get_theme_mod( 'theme_content_feature_image', 'inheritance-landscape-medium' ) ? get_theme_mod( 'theme_content_feature_image' ) : Mod::fallback( 'featured_image_size' );
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
		<?php Backdrop\View\display( 'sidebar', 'subsidiary', [ 'sidebar' => 'subsidiary'] ); ?>
	</div>
</article>
