<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="container" class="site-container">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'inheritance' ); ?></a>
	<header id="masthead" class="site-header">
		<div class="branding-navigation">
			<div class="site-branding">
				<?php Backdrop\Site\display_title(); ?>
				<?php
					$tagline = get_bloginfo( 'description' );

					if ( ! empty( $tagline ) ) {
						if ( $sep = Inheritance\Tools\Mod::get( 'branding_sep' ) ) : ?>
							<span class="sep" aria-hidden="true"><?php echo esc_html( $sep ) ?></span>
						<?php endif;

						Backdrop\Site\display_description();
					}
				?>
			</div>
			<?php Backdrop\View\display( 'nav/menu', 'primary', [ 'location' => 'primary' ] ); ?>
		</div>
	</header>