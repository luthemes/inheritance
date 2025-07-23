<li class="grid-item">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
			<picture class="post-thumbnail">
				<?php the_post_thumbnail( 'inheritance-landscape-small' ); ?>
				<?php the_post_thumbnail( 'inheritance-landscape-medium' ); ?>
			</picture>
		<?php } ?>
		<header class="entry__header">
			<?php Backdrop\Post\display_title(); ?>
			<div class="entry__metadata">
				<?php Backdrop\Post\display_author( [ 'before' => Inheritance\Tools\Svg::display( 'meta-icons', 'user' ) ] ); ?>
				<?php Backdrop\Post\display_date( [ 'before' => Inheritance\Tools\Svg::display( 'meta-icons', 'calendar' ) ] ); ?>
				<?php Backdrop\Post\display_comments_link( [ 'before' => Inheritance\Tools\Svg::display( 'meta-icons', 'comment' ) ] ); ?>
			</div>
		</header>
		<div class="entry__content">
			<?php the_excerpt(); ?>
		</div>
	</article>
</li>