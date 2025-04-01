<li class="grid-item">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
			<picture class="post-thumbnail">
				<?php the_post_thumbnail( 'inheritance-landscape-small' ); ?>
				<?php the_post_thumbnail( 'inheritance-landscape-medium' ); ?>
			</picture>
		<?php } ?>
		<header class="entry-header">
			<?php Backdrop\Theme\Entry\display_title(); ?>
			<div class="entry-metadata">
				<?php Backdrop\Theme\Entry\display_author(); ?>
				<?php Backdrop\Theme\Entry\display_date( [ 'before' => Inheritance\Sep() ] ); ?>
			</div>
		</header>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
	</article>
</li>