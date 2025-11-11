<li class="grid-item <?php echo ( 0 === $GLOBALS['wp_query']->current_post && ! is_paged() ) ? 'is-featured' : ''; ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
			<picture class="post-thumbnail">
				<?php the_post_thumbnail( 'inheritance-landscape-small' ); ?>
			</picture>
		<?php } ?>
		<header class="entry__header">
			<?php Backdrop\Post\display_date(); ?>
			<?php Backdrop\Post\display_title(); ?>
		</header>
		<div class="entry__content">
			<?php the_excerpt(); ?>
		</div>
			<div class="entry__metadata">
				<?php Backdrop\Post\display_author(); ?>
			</div>
	</article>
</li>