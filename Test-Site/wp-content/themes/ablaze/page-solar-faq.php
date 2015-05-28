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
				  <h3 class="FAQ-question">How much does solar cost?</h2>
				</a>
				<div class="collapse" id="FAQ-1">
				  <div class="FAQ-answer">
						<p>There are two ways that you can look at purchasing solar. First you can purchase the system and own the equipment or you can have a third party own the system and purchase the power that is produced from that system in what is known as a lease or a Power Purchase Agreement. If you decide you would like to own the system, pricing is often determined on what is known as a price per watt. This is the sum price of all the equipment (panels, inverter, racking and electrical equipment), the installation, engineering).</p>
						<p>How many watts you need is dependent upon your homes energy usage and how much of your usage you want to offset. You will be given a system size for your house in a range of kW. Your total price will be determined by the price per watt, multiplied by the size system you need. The price that you pay will be reduced 30% through a federal tax credit and depending on where you live additional funds will be subtracted for utility rebates. The major advantages of owning the system is a greater financial return and more flexibility system with a significantly reduced energy bill every month.</p>
						<p>You also have the option to have the system installed on your house for little to no money down through what is known as a lease or a PPA. In this case a third party finance group pays the for the cost of the installation of the system on our roof and you either pay a flat lease payment each month that is lower than your current utility bill or you pay for the power produced by the system at a lower rate than what you currently pay the utility company. In either case you instantly begin paying less than your current monthly payment. The advantages of leasing a system are no money upfront and all maintenance and upkeep is covered by the system owner.</p>
				  </div>
				</div>
			</div>
			
			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-2" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">How long does it take to install solar on my house?</h2>
				</a>
				<div class="collapse" id="FAQ-2">
				  <div class="FAQ-answer">
						<p>Due to an increase in training and qualified workers, the actual time that will be spent installing the system on your roof will be only 1-2 days. It is important to note that once you make the decision to go solar, it will take about 3-6 weeks before installation can officially begin. During this time the agreement with your utility is generated and permits are obtained from the building department in your area. Also since most solar systems are unique, materials will have to be ordered and delivery times can vary. After the installation is complete, you will have to get permission to turn the system from the utility and the building department. This can take around a week. All in all from when you make your decision to when your system is operational can be about 1-2 months.</p>
				  </div>
				</div>
			</div>
			
			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-3" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">What rebates and incentives are available?</h2>
				</a>
				<div class="collapse" id="FAQ-3">
				  <div class="FAQ-answer">
						<p>Through 2016, as part af the American Recovery and Reinvestment Act (ARRA) the federal government is offering a tax credit for 30% of the entire systems cost through the Investment Tax Credit (ITC). When tax time comes Ablaze Energy will ensure that you have all of the necessary documentation to receive this credit. There are a lot of other incentives available through local governments and utility companies. With these outlets there are two main forms of incentives that you can receive.</p>
						<h5>Upfront Rebate</h5>
						<p>With an upfront rebate, customers are offered a rebate upfront to offset the initial cost of their system REC</p>
						<h5>Credit/FIT</h5>
						<p>With a REC credit, customers are paid a small rate ($.08-.16) for each unit of power that is produced on top of the avoided cost of not having to pay for power fromt the utility case. In this instance customers receive a separate check (typically from the utility company) essentially as a way to pay them for power that was produced by your system and they didn't have to produce.</p>					
						<p>For more information about the local rebates and incentives available in your contact us and we will be happy to provide you with the most current and up to date information in your area.</p>
				  </div>
				</div>
			</div>
				
			<div class="FAQ-container">	
				<a  data-toggle="collapse" data-target="#FAQ-4" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">How old can my roof be? Do I need to replace it before I put solar on?</h2>
				</a>
				<div class="collapse" id="FAQ-4">
				  <div class="FAQ-answer">
						<p>Because solar panels typically mount on your roof and are expected to remain up there for at least 20 years, the condition of your roof is an important factor. It is not necessary to replace your roof before you go solar but if your roof is in poor condition or older than 15 years, Ablaze Energy does recommend replacement. Once the solar panels are in place they will actually provide some protection to your roof against weather and aging. If it is determined that your roof is in need of replacement, Ablaze Energy has many strategic relationships with roofing companies that we can refer you to that will provide you a discount to replace your roof and go solar.</p>
				  </div>
				</div>
			</div>
			
			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-5" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">What if I sell my house?</h2>
				</a>
				<div class="collapse" id="FAQ-5">
				  <div class="FAQ-answer">
						<p>Adding solar to your home has shown to add equity and increase your homes value, studies have also shown that homes with solar systems sell faster than those without. Depending on how you choose to obtain your system will determine the options that you have when you decide to sell your home and the solar system on it. If you purchased the system, you own it and can sell the house to the homeowner with the added benefit of free electricity. Just like any other home upgrade such as a remodel or home improvement, a solar system is a part of the house that provides a benefit to the homeowner. If you have a lease or a PPA in place for the solar system, you have a couple of options depending on how long you have owned your solar system and the agreement that you have in place none of which should deter you from selling your home quickly and providing a benefit to the new homeowners. Here is a breakdown of the options that you might have.</p>
						<h5>1. Transfer the agreement</h5>
						<p>Ablaze Energy makes it easy for the new homeowner can take over your reduced monthly payments for the electricity and take care of the payments. The new homeowner will continue to enjoy the worry free maintenance coverage of the system.</p>
						<h5>2. Prepay the remaining monthly payments</h5>
						<p>It can be easily estimated how much your solar system will cost through the rest of your agreement and you as the homeowner have the option to pay off the remaining balance of the agreement and the new homeowner can come in and enjoy free electricity for the remainder of the agreement that was originally set forth.</p>
						<h5>3. Purchase the system</h5>
						<p>You also have the option to purchase the equipment on your roof at the current fair market value for the system on your roof. In this case you now own the system and consider another part of your house.</p>
				  </div>
				</div>
			</div>

			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-6" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">What is the difference between a lease and Power Purchase Agreement (PPA)?</h2>
				</a>
				<div class="collapse" id="FAQ-6">
				  <div class="FAQ-answer">
						<p>When solar was first introduced, homeowners had no other option to spend money upfront to add solar to their home. Recent developments in available incentives and changes in utility rules now allow for a third party to purchase the system on your roof and provide you with the power produced by the system. Both a lease and a PPA operate in a similar fashion in that your monthly payment for the electricity is replaced by a lower monthly payment for the solar system. In both cases the maintenance and repairs of the system are covered at no cost to you.</p>
						<p>A lease system is very similar to the way you would lease a car. You receive the system at no upfront cost with the agreement that you will pay a fixed monthly amount for a designated amount of time. That rate is agreed upon in advance no matter how much electricity is produced by the system. The amount of your lease payment should be lower than your current average monthly electricity bill. In a Power Purchase Agreement (PPA) the amount you pay every month is determined by the amount of power the system produces. The amount of system your power produces is determined by the amount of sun it receives in that month.</p>
						<p>With net metering, there is a virtual bank with the utility company between the power that is consumed and the power that is produced by the system. So if there is a month where you produce more than you use, that money is credited towards future months where you might not produce as much you use. Continue reading below for more information about net metering. Although Ablaze Energy offers both options, the option that you choose might be dependent on what your utility company allows.</p>
				  </div>
				</div>
			</div>

			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-7" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Do you provide any type of financing?</h2>
				</a>
				<div class="collapse" id="FAQ-7">
				  <div class="FAQ-answer">
						<p>Ablaze Energy specializes in financing, in most cases we can find a system that will work for you to make the switch to a lower monthly payment for your electricity. We also have a great network of banks and financing companies that we work with that can help provide you with any help that you might need.</p>
				  </div>
				</div>
			</div>
				
			<div class="FAQ-container">	
				<a  data-toggle="collapse" data-target="#FAQ-8" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">Do I need batteries?</h2>
				</a>
				<div class="collapse" id="FAQ-8">
				  <div class="FAQ-answer">
						<p>One of the major advancements in increasing the adoption of solar in the United States is the introduction of net metering by utility companies. This concept works similar to the way batteries would by allowing you to "bank" or store excess power that is being produced when you are not using it and use it again at another time when you might be consuming more power than your system is producing. Net metering works like a virtual battery for storing power that you are not using. Customers do still have the option to purchase batteries for their system if they choose to do so but there is an additional cost to have them. Developments in battery technology are progressing but the cost to incorporate them into a solar system is still fairly expensive, which increases the financial return one might expect to see on a system.</p>
				  </div>
				</div>
			</div>

			<div class="FAQ-container">
				<a  data-toggle="collapse" data-target="#FAQ-9" aria-expanded="false" aria-controls="collapseExample">
				  <h3 class="FAQ-question">What happens at night or when it is cloudy outside?</h2>
				</a>
				<div class="collapse" id="FAQ-9">
				  <div class="FAQ-answer">
						<p>Depending on how cloudy it is, solar energy from the sun can still be collected on cloudy days. With net metering policies (explained in detail above) excess power that your system produced is virtually stored or credited to you to use at times when you are consuming more power than your system is using (like at night). No matter what time of day or the weather outside you can rest assured that you will always have reliable power provided to your home when you need it.</p>
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
