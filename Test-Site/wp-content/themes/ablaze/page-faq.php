<?php 
/*

*/

get_header(); ?>
<!--Begin subpage file-->
<section id="subpage" class="subpage">
	
	<!--Only display this div if there's a Featured Image to fill it -->
	<?php if ( has_post_thumbnail() ) { ?>
		<div id="subpage-heroimg" class="sub-hero" style="background-image: url('<?php $post_thumbnail_id = get_post_thumbnail_id();
			$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
			echo $post_thumbnail_url; ?>')" > 
			
				<h1>					
						<?php //meta properties must be in The Loop to display
						if ( have_posts() ) : while( have_posts() ) : the_post();
						echo get_post_meta($post->ID, 'hero_label', true);
						endwhile; endif; ?>
				</h1>

		</div>
	<?php } //Close the if statement from above ?>

	<div id="subpage-content" class="container">
		
		<h2 class="title"><?php echo get_the_title( ); ?></h2>
		<hr />		
		<!--?php if ( have_posts() ) : while( have_posts() ) : the_post();
			the_content();
			endwhile; endif; ?>-->
	
	
	
		<div id="FAQsection" class="container">
			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-1" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Why wouldn't I just do my own fixture and bulb replacements?</h2>
				</a>
				<div class="collapse" id="FAQ-1">
				  <div class="FAQ-answer">
						<p>This is a reasonable question, and for some organizations you may be able to do this yourself. But most of our customers find that Ablaze Energy turnkey services wind up being less than what it would cost to self perform. We handle all logistics, project management, finance origination, tax certification, procurement, warranty processing, and much more. With our efficient business model, manufacturer direct procurement, and national installer network, we’ve found that we are a convenient and reliable option.</p>
				  </div>
				</div>
			</div>
			
			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-2" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Are LEDs cost effective?</h2>
				</a>
				<div class="collapse" id="FAQ-2">
				  <div class="FAQ-answer">
						<p>Prices of LED’s have come down, while the technology has advanced considerably. LEDs are still more expensive than traditional lighting options as far as ‘price’ goes, but LEDs ‘cost’ much less to operate. With Ablaze Energy analytics tools you can find out exactly how much you can increase your profits by switching to LEDs.</p>
				  </div>
				</div>
			</div>
			
			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-3" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Are there ways to finance 100% of the price?</h2>
				</a>
				<div class="collapse" id="FAQ-3">
				  <div class="FAQ-answer">
						<p>Yes, Ablaze Energy offers more financing options than any other LED provider, we have a vast selection of financing options that are sure to fit your needs.</p>
				  </div>
				</div>
			</div>
				
			<div class="FAQ-container">	
				<a  data-toggle="collapse" data-target="#FAQ-4" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">How long do LEDs last?</h2>
				</a>
				<div class="collapse" id="FAQ-4">
				  <div class="FAQ-answer">
						<p>Unlike other light sources, LEDs usually don’t “burn out”; instead, they get progressively dimmer over time (a process called lumen depreciation). LED useful life is typically based on the number of operating hours until the LED is emitting 70 percent of its initial light output. Good-quality white LEDs in well-designed fixtures are expected to have a useful life of 50,000 hours or even longer, all the way up to 100,000 hours! A typical incandescent lamp lasts about 1,000 hours; a comparable CFL lasts 8,000 to 10,000 hours, and the best linear fluorescent lamps can last 50,000 hours. A primary cause of lumen depreciation is heat generated at the LED junction. LEDs do not emit heat as infrared radiation like other light sources, so the heat must be removed from the device by conduction or convection. Thermal management is arguably the most important aspect of successful LED system design.</p>
				  </div>
				</div>
			</div>
			
			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-5" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">How long is 100,000 hours?</h2>
				</a>
				<div class="collapse" id="FAQ-5">
				  <div class="FAQ-answer">
						<p>Based on how long a fixture is illuminated per day, here’s what 100,000 works out to:</p>
						<h5>Hours of Operation: 100,000 hours</h5>
						<p>11.4 years at 24 hours a day</p>
						<p>15.22 years at 18 hours a day</p>
						<p>22.8 years at 12 hours a day</p>
						<p>34.2 years at 8 hours a day</p>
				  </div>
				</div>
			</div>

			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-6" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Can I dim LEDs, and use them with control units like occupancy sensors?</h2>
				</a>
				<div class="collapse" id="FAQ-6">
				  <div class="FAQ-answer">
						<p>Yes, you can dim LEDs.</p>
				  </div>
				</div>
			</div>

			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-7" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Why the pricing differences on LED lighting?</h2>
				</a>
				<div class="collapse" id="FAQ-7">
				  <div class="FAQ-answer">
						<p>There are a LOT of manufacturers for LEDs and the price ranges vary greatly. Most of the variance is attributed to the rating and warranty of the specific light. It is important that you check any products you’re considering purchasing with Design Lights Consortium (DLC) to verify they are properly rated and certified. Most all of the Ablaze Energy products have 10 year warranties and are Energy Star rated, all of our products are DLC certified.</p>
				  </div>
				</div>
			</div>
				
			<div class="FAQ-container">	
				<a  data-toggle="collapse" data-target="#FAQ-8" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Do LEDs provide high quality lighting?</h2>
				</a>
				<div class="collapse" id="FAQ-8">
				  <div class="FAQ-answer">
						<p>Color appearance is communicated using correlated color temperature (CCT) on the Kelvin (K) scale. For most interior lighting applications, warm-white (2700K to 3000K) and in some cases neutral-white (3500K to 4000K) light is appropriate. Cool-white LEDs with very high CCT (bluish in appearance) tend to offer higher efficacy at low cost, but may not meet user expectations for color. An increasing number of high-efficacy LED products are available in warm-white or neutral-white colors, to the point where many have surpassed CFLs. Two light sources with identical CCTs can render object colors very differently due to the differences in spectra. While CCT provides an indication of whether a light source may appear yellowish or bluish in color, Duv is an additional metric that can help identify sources with excessively greenish or pinkish hues.</p>
						<p>Color rendering, or color rendering index (CRI) measures the ability of light sources to render colors, compared to either incandescent reference sources if warm in color, or daylight reference sources if cooler in color. The leading high-efficiency LED manufacturers now claim a CRI of 80 or higher for phosphor-converted, warm-white devices. In general, a minimum CRI of 80 is recommended for interior lighting, with CRIs of 90 or higher indicating excellent color rendering. The CRI has been found to be inaccurate for RGB (red, green, blue) LED systems because it’s poor at predicting the quality of the appearance of saturated color objects, and doesn’t correspond well to human perception of color quality. As a supplement to CRI, a lamp’s R9 value describes how closely it renders a saturated red color sample, relative to the reference illuminant. CCT and CRI together only get you in the ballpark for selecting and matching lamp colors. A number of new color-rendering metrics have been proposed in recent years, but none have been widely adopted as of yet. In the meantime, color rendering of LED products should be evaluated in person and in the intended application if possible.</p>
				  </div>
				</div>
			</div>

			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-9" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Why would I do a complete lighting replacement instead of replacing as I go?</h2>
				</a>
				<div class="collapse" id="FAQ-9">
				  <div class="FAQ-answer">
						<p>LED lighting uses as much as 75% less electricity and are virtually maintenance free, compound that over the amount of time it would take to replace all of your existing lighting by way of spot replacement and you will have already paid for a complete retrofit and already be benefiting from new found money. It is more expensive to pay to operate traditional lighting than to upgrade your lighting today.</p>
				  </div>
				</div>
			</div>

			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-10" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Will my solar power work if the power goes out?</h2>
				</a>
				<div class="collapse" id="FAQ-10">
				  <div class="FAQ-answer">
						<p>In the event of a power outage in your area, for safety reasons your solar system is set up to automatically shut down. This is done for safety reasons of the utility company workers because when your system produces power some of it goes back into the grid. If utility workers happen to be working on the line, they need to be assured that they will not be shocked by any live electricity that could potentially be coming from a solar system.</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
	
	<?//php get_sidebar(); ?><!--no sidebar on default page-->
	
	<!--<div class="divider">	</div>-->
</section><!--subpage-->


<?php get_footer(); ?>
