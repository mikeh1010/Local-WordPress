<?php if ( is_active_sidebar( 'blog-default' ) ) : ?>
	<div id="blog-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'blog-default' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>