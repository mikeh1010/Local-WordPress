<?php 

/*

Default Page Template

*/



get_header("referralform"); ?>

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



	<div id="referralform" class="container">

		<!--<div class="formheader">

			<h1>Friends of <span class="yellow">Solar</span></h1>

			<h3>Welcome to the Ablaze Energy Referral Program</h3>

			<p>4 Easy Steps:</p>

		</div>-->

		<div class="col-md-6 formheader">

			<h1>Friends of <span class="yellow">Solar</span></h1>

			<h3>Welcome to the Ablaze Energy Referral Program</h3>

			<p>4 Easy Steps:</p>

			

			<h2 class="bignumber one">Sign Up</h2>

			<p>Complete the form to Join our Referral Network</p>

			

			<h2 class="bignumber two">Reach Out</h2>

			<p>Talk to friends and family who could benefit from a lower electric bill</p>

			

			<h2 class="bignumber three">Add Referrals to Your Account</h2>

			<p>Input contact information for each of your referrals</p>

			

			<h2 class="bignumber four">Help the Planet, Get Referral Bonuses</h2>

			<p>We pay $500 for each referral who works with us to go Solar</p>

		</div>

		

		<div id="SpencersFormHolder" class="col-md-6" style="display:none; width:100%">

	
<!-- 		<div class="bar"><span></span></div> -->
			<div class="BStage">

				<div class="bar"><span></span></div>

				<div class="SuccessMSG">

					<div class="Header headone">Congratulations!</div>

					<div class="Header headthree">Please Check Your Email!</div>

					<div class="message">Thank you, <span class="FullName"></span>! Your account has been created, and you are one small step away from accessing your referral portal.<br><br>

						Please check your inbox or possibly your spam/junk for an email from: <b>CustomerCare@AblazeEnergy.com</b>.<br>The subject will read <b>"Welcome To Your Referral Portal"</b>.

						<br><br>

						Click the link labeled <b>"Activate Your Account Now"</b> to finish setting up your account. 

						<div style="float:right; margin:20px 10px; color: #333333;"><b>Sincerely,</b><br><img src="http://www.ablazeenergy.com/wp/wp-content/themes/ablazeenergy/img/logo@2x.png" width="250px"/></div>	

						<div class="CB"></div>

					</div>

				</div>	

				<div class="ResetPasswordMSG">

					<div class="Header headone">Hang On A Minute!</div>

					<div class="Header headthree">You already have an account!</div>

					<div class="message">If you're having problems signing in, Please click the link below to reset your password. Or please contact customer service at 1-888-462-2529 <br>

						<div class="SB resetPWBTN" style="width:200px; margin:40px auto;">Reset Your Password</div>

						<div style=" margin:20px auto; color: #333333; width: 250px;"><img src="http://www.ablazeenergy.com/wp/wp-content/themes/ablazeenergy/img/logo@2x.png" width="250px"/></div>	

						<div class="CB"></div>

					</div>

				</div>	

				<div class="PasswordWasResetMSG">

					<div class="Header headone">Your Password Was Reset!</div>

					<div class="Header headthree">Please Check Your Email!</div>

					<div class="message">An email has been dispatched to: <span class="resetPWEmail"></span>.<br><br>Within this email, please click on the link labeled:<br><b>`Create New Password`</b> to finish reseting your password.<br><br><br> If you still have trouble logging in or have any questions, please contact customer service at 1-888-462-2529 <br>

						<div style="float:right; margin:30px 10px; color: #333333;"><b>Sincerely,</b><br><img src="http://www.ablazeenergy.com/wp/wp-content/themes/ablazeenergy/img/logo@2x.png" width="250px"/></div>

						<div class="CB"></div>

					</div>

				</div>

			</div>

			<div class="FStage" style="min-width: 500px;">

				

					<form class="form">

						<div class="CB Header headone">Sign Up Today!</div>

						<div class="FieldWrapper">

							<div class="FieldLable">First Name:</div>

							<input id='First-Name' type="text" />

							<div class="informalMessages">

								<div class="instructions"></div>

								<div class="errorMessage">Must be at least 2 characters long.</div>

							</div>

						</div>

						<div class="FieldWrapper">

							<div class="FieldLable">Last Name:</div>

							<input id="Last-Name" type="text" />

							<div class="informalMessages">

								<div class="instructions"></div>

								<div class="errorMessage">Must be at least 2 characters long.</div>

							</div>

						</div>

						<div class="FieldWrapper">

							<div class="FieldLable">Phone Number:</div>

							<input id='Phone-Number' class="Phone-Number" type="text" />

							<div class="informalMessages">

								<div class="instructions"></div>

								<div class="errorMessage">Must be at least 10 characters long.</div>

							</div>

						</div>

						<div class="FieldWrapper">

							<div class="FieldLable">Email Address:</div>

							<input id="Email-Address" type="text" />

							<div class="informalMessages">

								<div class="instructions">Will be used as your log in id.</div>

								<div class="errorMessage">Must be valid email address.</div>

							</div>

						</div>

						<div class="CB Header headtwo">Where Do You Want Your Checks Delivered?</div>

						<div class="FieldWrapper">

							<div class="FieldLable">Street Address:</div>

							<input id='Street-Address' type="text" />

							<div class="informalMessages">

								<div class="instructions"></div>

								<div class="errorMessage">Must be at least 5 characters long.</div>

							</div>

						</div>

						<div class="FieldWrapper">

							<div class="FieldLable">Zip Code:</div>

							<input class="locationAutoSuggest" id='Zip' type="text" />

							<div class="informalMessages">

								<div class="instructions">Fill to auto complete fields.</div>

								<div class="errorMessage">Must be at least 5 characters long.</div>

							</div>

						</div>

						<div class="FieldWrapper">

							<div class="FieldLable">City:</div>

							<input class="locationAutoSuggest" id="City" type="text" />

							<div class="informalMessages">

								<div class="instructions">Fill to auto complete fields.</div>

								<div class="errorMessage">Must be at least 2 characters long.</div>

							</div>

						</div>

						<div class="FieldWrapper">

							<div class="FieldLable">State:</div>

							<input class="locationAutoSuggest" id="State" type="text" />

							<div class="informalMessages">

								<div class="instructions">Fill to auto complete fields.</div>

								<div class="errorMessage">Must be at least 2 characters long.</div>

							</div>

						</div>

						<div class="FieldWrapper">

							<div class="FieldLable">County:</div>

							<input class="locationAutoSuggest" id="County" type="text" />

							<div class="informalMessages">

								<div class="instructions">Fill to auto complete fields.</div>

								<div class="errorMessage">Must be at least 2 characters long.</div>

							</div>

						</div>

						<div class="FieldWrapper">

							<div class="SB SSB">Submit</div>

						</div>

						<div class="CB"></div>



					</form>

					<div class="CB"></div>

			</div>

				

		</div><!--Spencer's form holder-->



		<hr>

	</div><!--id="referralform" -->

	<div id="SpencersDeBug"></div>

	

	<?//php get_sidebar(); ?><!--no sidebar on default page-->

	

	<!--<div class="divider">	</div>-->

</section><!--subpage-->





<?php get_footer(); ?>

	

	