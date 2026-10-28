<li class="grid-item">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
			<picture class="post-thumbnail">
				<?php the_post_thumbnail( 'inheritance-landscape-small' ); ?>
				<?php the_post_thumbnail( 'inheritance-landscape-medium' ); ?>
			</picture>
		<?php } ?>
		<header class="entry-header">
			<?php Backdrop\Post\display_title(); ?>
			<div class="entry-metadata">
				<?php Backdrop\Post\display_author(); ?>
				<?php Backdrop\Post\display_date( [ 'before' => Inheritance\sep() ] ); ?>
			</div>
		</header>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
	</article>
</li>