<!--Footer file for theme - Ablaze -->

</div><!--class="site-content"-->

<footer>

	<div id="yellow-logos">
		<div class="container">
			<img src="<?php bloginfo('template_directory');?>/img/footer-center.jpg">
		</div>
	</div>
	
	<div class="container">
	
		<p id="copyright">© 2015 ABLAZE ENERGY. ALL RIGHTS RESERVED.</p>
		<div class="footerbox col-md-2 col-sm-4">
			<a href="/solar"><h3>Solar</h3></a>
			<ul class="menulist"> 
				<li><a href="/residential-solar/">Residential</a></li>
				<li><a href="/commercial-solar/">Commercial</a></li>
				<li><a href="/what-solar-costs">What it Costs</a></li>
				<li><a href="/how-it-works/">How Solar Works</a></li>
				<li><a href="/why-ablaze/">Why Ablaze</a></li>
				<li><a href="/solar-faq">FAQ</a></li>
				<li><a href="/testimonials">Testimonials</a></li>
				<li><a href="/apply-now">Apply For Solar Now</a></li>
			</ul>
		</div>
		<div class="footerbox col-md-2 col-sm-4">
			<a href="/lighting"><h3>Lighting</h3></a>
			<ul class="menulist">
				<li><a href="/faq">FAQ</a></li>				
			</ul>
		</div>
		<div class="footerbox col-md-2 col-sm-4">
			<a href="/sell-ablaze-energy"><h3>Sell Ablaze</h3></a>
			<ul class="menulist">
				<li><a href="/sales">Sales</a></li>				
				<li><a href="/requirements">Requirements</a></li>				
				<li><a href="/benefits">Benefits</a></li>				
				<li><a href="/how-to-qualify">How to Qualify</a></li>				
			</ul>
		</div>
		<div class="footerbox col-md-2 col-sm-4">
			<a href="/about-us"><h3>Company</h3></a>
			<ul class="menulist">
				<li><a href="/blog">Blog</a></li>
				<li><a href="/what-we-stand-for">What We stand for</a></li>								
			</ul>
		</div>
		<div class="footerbox col-md-2 col-sm-4">
			<a href="/get-started"><h3>Contact Us</h3></a>
		</div>
		<div class="footerbox col-md-2 col-sm-4">
			<a href="/apply-now"><h3>Apply For Solar Now</h3></a>
		</div>

		<!--<div class="live-chat-button">
            <a href="#" onclick="LC_API.show_full_view();return false;"><img src="<?php bloginfo('template_directory');?>/img/btn-live-chat@2x.png" /></a>
        </div>-->
	</div>

	
	
	
</footer>

</div><!-- ID = page-->

<!--Code for the live chat button:-->
<script type="text/javascript">
var __lc = {};
__lc.license = 4086841;
__lc.group = 31;

(function() {
	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
<?php wp_footer(); ?> 

<!--Adroll integration -->
<script type="text/javascript">
adroll_adv_id = "IOKAG4LGDRDAFIAQHKSCFO";
adroll_pix_id = "HKBSA4G3IZGE5GA3P6VZ75";
(function () {
var oldonload = window.onload;
window.onload = function(){
   __adroll_loaded=true;
   var scr = document.createElement("script");
   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
   scr.setAttribute('async', 'true');
   scr.type = "text/javascript";
   scr.src = host + "/j/roundtrip.js";
   ((document.getElementsByTagName('head') || [null])[0] ||
    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
   if(oldonload){oldonload()}};
}());
</script>

</body>


</html>	

<?php /* MUST MAKE:
1. Subpage template - landing page template
2. Footer
1a. make several subpages
3. Make dropdown menu horizontal dividers
5. Make list of improvements

3. Bring over blog template
3. Check on forms - pardot or Contact Form 7?

*/
?>