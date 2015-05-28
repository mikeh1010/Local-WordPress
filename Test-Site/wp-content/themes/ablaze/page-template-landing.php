<?php
/*
Template Name: Landing Page
*/

// email submission
if(isset($_POST['submitted'])) {
        $emailTo = get_field('email_to');
        $landingPage = get_the_title($post->post_parent);

        $name = trim($_POST['first']) . " " . trim($_POST['last']);
        $phone = trim($_POST['phone']);
        $zip = trim($_POST['zip']);
        $email = trim($_POST['email']);
        $bill = trim($_POST['bill']);

        $headers = 'From: ' . $emailTo . "\r\n" . 'Reply-To: ' . $email;
        $subject = 'Landing page submission from: '.$name;

        $body = "Landing Page: $landingPage \n
                Name: $name \n
                Phone: $phone \n
                Zip: $zip \n
                Bill: $bill \n
                Email: $email \n";

        $res = wp_mail($emailTo, $subject, $body, $headers);

        // set the emailSent flag for the modal after sending
        $emailSent = true;
}

get_header('landing-page'); ?>

    <style>
        h2 {
            font-weight: 900;
        }
    
        strong {
            font-weight: bold;
        }
        em {
            font-style: italic;
        }

        #landingpage {
            position: relative;
            font-size: 16px;
            padding: 11em 0 2.5em 0;
            background: url(<?php bloginfo('template_directory'); ?>/img/landing-page/bg.jpg) no-repeat 100%,
                        url(<?php bloginfo('template_directory'); ?>/img/landing-page/concrete_seamless.png);
            background-position: center 0;
            background-size: 110%, 40px;
        }
        .logo {
            position: absolute;
            top: 0;
            left: 1em;
            padding: .5em 2em;
            background: rgba(238,238,238,.7)
        }
        .landing-container {
            width: 90%;
            margin: 0 auto;
            padding: 2em 0 2em 0;
            background: white; 
            border-radius: 10px;
            box-shadow: 3px 3px 3px gray;
        }
        .middle {
            position: relative;
            top: 2em;
            margin-bottom: 4em;
        }
        .body-text {
            padding: 15px 10px;

            word-wrap: break-word;

            border-radius: 15px;
            <!--background: lightgray;-->
        }
        .form-box {
            margin-top: 2em;
        }
        .form-box .top {
            position: relative;
            z-index: 2;
            background: #1973b0;
            color: white;
            width: 80%;
            margin: 0 auto;
            padding: 1em 1em;
            text-align: center;
            box-shadow: 3px 3px 3px gray;
        }
        .form-box form {
            position: relative;
            z-index: 1;
            display: block;
            width: 70%;
            margin: 0 auto;
            padding: .75em;
            background: rgb(219, 219, 77);
            border-radius: 0 0 15px 15px;
            border: 1px solid lightgray;

            background: -moz-linear-gradient(top, #f1da36 0%, #fefcea 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f1da36), color-stop(100%,#fefcea)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, #f1da36 0%,#fefcea 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, #f1da36 0%,#fefcea 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, #f1da36 0%,#fefcea 100%); /* IE10+ */
            background: linear-gradient(to bottom, #f1da36 0%,#fefcea 100%); /* W3C */
        }
        .form-box form label {
            text-align: left !important;
        }
        .form-box form input {
            /* changed for bootstrap attempt */
            <!--float: right;-->
            <!--margin-bottom: .8em;-->
            <!--width: 60%;-->
            border: 0;
            padding: 5px;
            outline: 0;
        }
        .form-box form button{
            clear: both;
            display: block;
            width: 10em;
            margin: 0 auto;
            font-weight: 900;
            color: white;
            background: gray;
            padding: 7px;
        }
        <!--.form-group {-->
            <!--margin-bottom: 0;-->
        <!--}-->
        .glyphs {
            text-align: center;
        }
        .glyphs h2 {
            padding-top: 0;
            margin-top: 0;
            margin-bottom: .5em;
        }
        .landing-glyph {
            margin-bottom: 1.5em;
        }
        .landing-glyph span {
            display: inline-block;
            width: 80%;
            font-size: 1.3em;
        }
        .glyphs img {
            display: block;
            margin: 0 auto .5em;
        }

        footer {
            text-transform: none;
            text-align: center;
            font-size: 14px;
            background: #F1C229;
            overflow: hidden;
            padding-bottom: 0;
            min-height: 0px;
        }
        footer #yellow-logos img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }
        .site-links a {
            margin-right: 1.5em;
            color: black;
        }
        .social-links {
            width: 80%;
            margin: 1em auto;
        }
        .social-links img {
            width: 25px;
            height: 25px;
        }
        .footer-links {
            margin: .75em auto;
        }
        #yellow-logos {
            margin: 0 auto !important;
        }
    </style>

<script>
$(function(){
	$.get('http://pm.ablazeenergy.com/GlobalScripts/Ablaze-API/Landing-Page-Form.php',{'Page':'<?php echo $_SERVER['REQUEST_URI']; ?>'},function(formHTML){
		console.info('Loading Landing Page Form')		
		$('#spencersLandingPageFormContainer').css({'opacity':0}).html(formHTML).animate({'opacity':1},1000);
	});
})
</script>
    <section id="landingpage" class="subpage">

        <div class="logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/landing-page/logo.png" alt="">
        </div>

        <div class="landing-container container">
            <div class="page-content">
                <div class="col-sm-6 col-md-5">
                    <div class="form-box">
                        <h2 class="top">Get Informed on Solar</h2>
<div id="spencersLandingPageFormContainer"></div>
                     <!--   <form class="form-horizontal" action="<?php the_permalink(); ?>" id="contactForm" method="post">

                            <div class="form-group">
                                <label for="first" class="col-lg-5 control-label">First Name:</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" name="first" required>
                                </div>
                            </div>
	
                            <div class="form-group">
                                <label for="last" class="col-lg-5 control-label">Last Name:</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" name="last" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-lg-5 control-label">Phone Number:</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="tel" name="phone" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zip" class="col-lg-5 control-label">Zip Code:</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" name="zip" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-lg-5 control-label">Email:</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="email" name="email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="bill" class="col-lg-8 control-label">Monthly Power Bill:</label>
                                <div class="col-lg-4">
                                    <input class="form-control" type="text" name="bill">
                                </div>
                            </div>

                            <input type="hidden" name="submitted" id="submitted" value="true" />

                            <button type="submit">Learn More</button> 
                        </form> -->
                    </div>

                    <div class="thanks" style="display: none; margin-left: 1em;">
                       <h2>Thanks! We'll be in contact shortly.</h2>
                    </div>
                </div>

                <div class="col-sm-6 col-md-7">
                    <div class="middle col-sm-7">
                        <div class="body-text">


                            <?php if ( have_posts() ) : while( have_posts() ) : the_post();
                            the_content();
                            endwhile; endif; ?> 	


                        </div>
                    </div>

                    <div class="glyphs col-sm-5">
                        <h2>Why Solar?</h2>

                        <?php if (get_field('first_image')) { ?>
                            <div class="landing-glyph">
                                <img src="<?php the_field('first_image') ?>">
                                <span><?php the_field('first_image_text')?></span>
                            </div>
                        <?php } ?>

                        <?php if (get_field('second_image')) { ?>
                            <div class="landing-glyph">
                                <img src="<?php the_field('second_image') ?>">
                                <span><?php the_field('second_image_text')?></span>
                            </div>
                        <?php } ?>

                        <?php if (get_field('third_image')) { ?>
                            <div class="landing-glyph">
                                <img src="<?php the_field('third_image') ?>">
                                <span><?php the_field('third_image_text')?></span>
                            </div>
                        <?php } ?>

                        <?php if (get_field('fourth_image')) { ?>
                            <div class="landing-glyph">
                                <img src="<?php the_field('fourth_image') ?>">
                                <span><?php the_field('fourth_image_text')?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php 

// show the submission response if necessary
if (isset($emailSent) && $emailSent == true) { ?>
    <script>
        $(document).ready(function () {
            
            $('.form-box').hide(0, function () {
                $('.thanks').show(500);
                $('.middle').css('padding-bottom', '3em');
            })

        })
    </script>
<?php
}

get_footer('landing-page'); 
?> 
