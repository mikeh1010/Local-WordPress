<!--Footer for TEMPLATE theme -->
</div><!-- #content .site-content -->

<hr class="container footer-hr">
<footer>

	<!--Partner logos or any other persistent footer element -->
	<div id="footer-stripe">
	
	
		<div class="ribbon">
			<span class="ribbon-content">
				<h3>Build Your Own Dream, Not Someone Else’s</h3>
				<p>Start your journey today - 1-800-555-5555</p>
			</span>
			
		</div>
		
	</div><!-- #footer-stripe -->
	
	
	<!-- Footer widgets -->
	
	<div class="container" id="footer-widgets">
		
		<?php
		if(is_active_sidebar('footer-widgets')){
		dynamic_sidebar('footer-widgets');
		}
		?>
		
	</div><!-- .container -->
	
	<div class="container" id="bottom-stripe">
		
		<div class="col-md-8">
			<ul>
				<a href="/"><li>Home</li>
				<a href="/about"><li>About</li>
				<a href="/lease"><li>Lease a Suite</li>
				<a href="#"><li>Income Calculator</li></a>
				<a href="/contact"><li>Contact</li></a>
			</ul>
		</div>
		<div class="col-md-4">
			<p>COPYRIGHT &copy; 2015 | Chateau Salon Suites </p>
		</div>
	
	</div>
		
		
	
	</footer>

</div> <!-- #page -->

	
<!-- wp_footer must be right before the closing Body tag -->
<?php wp_footer(); ?> 
</body>

</html>