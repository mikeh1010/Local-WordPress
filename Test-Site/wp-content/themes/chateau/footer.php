<!--Footer for TEMPLATE theme -->

</div><!-- #content .site-content -->

<footer>

	<!--Partner logos or any other persistent footer element -->
	<div id="footer-stripe">
	
	</div><!-- #footer-stripe -->
	
	
	<!-- Footer widgets -->
	
	<div class="container">
		
		<?php
		if(is_active_sidebar('footer-widgets')){
		dynamic_sidebar('footer-widgets');
		}
		?>
		
	</div><!-- .container -->
		
		
	
	</footer>

</div> <!-- #page -->
	


	
<!-- wp_footer must be right before the closing Body tag -->
<?php wp_footer(); ?> 
</body>

</html>