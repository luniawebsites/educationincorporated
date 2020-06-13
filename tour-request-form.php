<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

	<!--
	PARTIAL > Google Tag Manager head script
	-->
	<?php include("assets/partials/google-tag-manager-head.html"); ?>

	<!--
	PARTIAL > Global scripts
	-->
	<?php include("assets/partials/global-scripts.html"); ?>

	<!--
	LINK & PARTIAL > Async-load non-critical CSS
	-->

	<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>
	<?php include("assets/partials/loadCSS.html"); ?>

	<meta name="robots" content="index, follow">
	<!-- <meta name="pagename" content="Request a Tour of Education Incorporated Boutique School"> -->
    <meta name="pagename" content="Request a Remote Trial Week with Education Incorporated Boutique School">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">

	<!--
	PARTIAL > Base URL
	-->
	<?php include("assets/partials/base-url.html"); ?>

	<!-- <meta property="og:title" content="Request a Tour of Education Incorporated Boutique School" /> -->
    <meta property="og:title" content="Request a Remote Trial Week with Education Incorporated Boutique School" />
	<meta property="og:keywords" content="" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://educationincorporated.co.za/tour-request-form.php" />
	<meta property="og:image" content="https://educationincorporated.co.za/assets/images/education-incorporated-logo.png" />
	<meta property="og:type" content="website" />
	<link rel="canonical" href="https://educationincorporated.co.za/tour-request-form.php" />
	<!-- <title>Request a Tour of Education Incorporated Boutique School</title> -->
    <title>Request a Remote Trial Week with Education Incorporated Boutique School</title>
	<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
	<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon.png">
	<link rel="dns-prefetch" href="https://educationincorporated.co.za/">

	<!--
	STYLES > Critical CSS
	-->
	<style type="text/css">
		<?php include("assets/critical.min.css"); ?>
	</style>

    <!-- MailerLite Universal -->
    <script>
        (function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
        var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
        f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
        var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
        .parentNode.insertBefore(r,);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');
        var ml_account = ml('accounts', '1075222', 'a1x7q3p3t9', 'load');
    </script>
    <!-- End MailerLite Universal -->

</head>

<body class="theme-dark-grey">

	<!--
	PARTIAL > Google Tag Manager body script
	-->
	<?php include("assets/partials/google-tag-manager-body.html"); ?>

	<!--
	PARTIAL > Browse Happy outdated browser notice
	-->
	<?php include("assets/partials/browse-happy.html"); ?>

	<!--
	PARTIAL > Page leader with logo and desktop menu
	-->
	<?php include("assets/partials/page-leader.html"); ?>

	<main>

		<!--
		Main content
		-->

		<section class="pad-respond-xy-mob theme-white border-b-mob shadow-t-mob">

			<!--
			Container
			-->
			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-y-mob align-fs-tab">

				<!--
				Main content
				-->
				<article class="width-100-mob width-70-tab">

					<!--
                    Mailerlite Form
                    -->
                    <div class="ml-form-embed" data-account="1075222:a1x7q3p3t9" data-form="2041404:w4u3n9">
                    </div>

				</article>

				<!--
				Aside content
				-->
				<aside class="flow-ttb-mob width-100-mob width-30-tab spread-respond">

					<!--
					PARTIAL > Card 1
					-->
					<?php include("assets/partials/card-podcast.html"); ?>

					<!--
					PARTIAL > Card 2
					-->
					<?php include("assets/partials/card-book.html"); ?>

					<!--
					Container
					-->

					<div class="flow-ltr-mob spread">
						<picture>
							<source media="(max-width: 720px)" srcset="assets/images/photos/mobile/campus__kids-working-in-media-room.jpg" type="image/jpeg" />
							<img class="width-100-mob height-100 radius-mob border-mob" src="assets/images/photos/tablet/campus__kids-working-in-media-room.jpg" alt="kids working in media room" />
						</picture>
					</div>

					<!--
					Container
					-->

					<div class="flow-ltr-mob spread">
						<picture>
							<source media="(max-width: 720px)" srcset="assets/images/photos/mobile/campus__children-sitting-reading-around-tree.jpg" type="image/jpeg" />
							<img class="width-100-mob height-100 radius-mob border-mob" src="assets/images/photos/tablet/campus__children-sitting-reading-around-tree.jpg" alt="four students sitting around a tree reading" />
						</picture>
					</div>

				</aside>

			</div>

		</section>

		<!--
		PARTIAL > Photo strip
		-->
		<?php include("assets/partials/photo-strip.html"); ?>

		<!--
		PARTIAL > Contact form
		-->
		<?php include("assets/partials/contact-form.html"); ?>

	</main>

	<!--
	PARTIAL > Page footer
	-->
	<?php include("assets/partials/page-footer.html"); ?>

</body>

</html>
