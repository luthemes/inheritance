	<footer id="colophon" class="site-footer">
		<?php Backdrop\View\display( 'nav/menu', 'social', [ 'location' => 'social' ] ); ?>
		<div class="site-info">
			<?php Inheritance\Template\Footer::displayCredit(); ?>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>