<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

	<!--
	PARTIAL > Google Tag Manager head script
	-->
	<?php echo file_get_contents("assets/partials/google-tag-manager-head.html"); ?>

	<!--
	PARTIAL > Global scripts
	-->
	<?php echo file_get_contents("assets/partials/global-scripts.html"); ?>

	<!--
	LINK & PARTIAL > Async-load non-critical CSS
	-->

	<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>
	<?php echo file_get_contents("assets/partials/loadCSS.html"); ?>

	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow">
	<meta name="pagename" content="Education Incorporated Boutique School Activities">
	<meta name="subtitle" content="">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">

	<!--
	PARTIAL > Base URL
	-->
	<?php echo file_get_contents("assets/partials/base-url.html"); ?>

	<meta property="og:title" content="Education Incorporated Boutique School Activities" />
	<meta property="og:keywords" content="" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://educationincorporated.co.za/activities.php" />
	<meta property="og:image" content="https://educationincorporated.co.za/assets/images/education-incorporated-logo.png" />
	<meta property="og:type" content="website" />
	<link rel="canonical" href="https://educationincorporated.co.za/activities.php" />
	<title>Education Incorporated Boutique School Activities</title>
	<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
	<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon.png">
	<link rel="dns-prefetch" href="https://educationincorporated.co.za/">

	<!--
	STYLES > Critical CSS
	-->
	<style type="text/css">
		<?php echo file_get_contents("assets/critical.min.css"); ?>
	</style>

</head>

<body class="theme-dark-grey">

	<!--
	PARTIAL > Google Tag Manager body script
	-->
	<?php echo file_get_contents("assets/partials/google-tag-manager-body.html"); ?>

	<!--
	PARTIAL > Browse Happy outdated browser notice
	-->
	<?php echo file_get_contents("assets/partials/browse-happy.html"); ?>

	<!--
	PARTIAL > Mobile off-canvas menu
	-->
	<?php echo file_get_contents("assets/partials/page-nav.html"); ?>
	
	<!--
	PARTIAL > Page leader with logo and desktop menu
	-->
	<?php echo file_get_contents("assets/partials/page-leader.html"); ?>

	<main>

		<!--
		Page header
		-->

		<header class="flow-ttb-mob constrain pad-x-mob pad-double-y-mob">

			<h1 class="text-underline-red">After-School Activities</h1>
			<div class="margin-y-mob pad-b-mob quote-white"></div>
			<div class="h3">Education Incorporated is a private boutique school with a unique perspective on education.</div>
			<p>&mdash; Gavin Kennedy <span class="no-break">(General Operations Manager)</span></p>

		</header>

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
				<article class="width-100-mob width-70-tab pad-b-mob">

					<picture class="article__author-image radius-mob border-b-mob">
						<source srcset="assets/images/photos/author__jacqueline-aitchison.webp" type="image/webp" />
						<img src="assets/images/photos/author__jacqueline-aitchison.jpg" alt="jacqueline aitchison photo" />
					</picture>

					<span class="article__author-name">By Jacqueline Aitchison</span>

					<p>When a child begins their educational journey with us we understand that it is precisely that&mdash;a journey. A long-term process of individualised, whole-child development where potential can be discovered and honed. Where responsible, respectful value systems can be instilled, preparing each child for the world they will encounter after their time with us. </p>

					<p>Please visit the resources page for the <a href="resources.php">current schedule of activities</a>.</p>

					<!--
					Container
					-->

					<div class="flow-ltr-mob spread">
						<picture>
							<source media="(max-width: 720px)" srcset="assets/images/photos/mobile/activities__smiling-children-biology-class.jpg" type="image/jpeg" />
							<img class="width-100-mob height-100 radius-mob border-mob" src="assets/images/photos/tablet/activities__smiling-children-biology-class.jpg" alt="smiling children in biology class" />
						</picture>
						<picture>
							<source media="(max-width: 720px)" srcset="assets/images/photos/mobile/activities__students-building-robots.jpg" type="image/jpeg" />
							<img class="width-100-mob height-100 radius-mob border-mob" src="assets/images/photos/tablet/activities__students-building-robots.jpg" alt="students building robotos" />
						</picture>
					</div>

				</article>

			<!--
			Aside content
			-->
				<aside class="flow-ttb-mob width-100-mob width-30-tab spread-respond">

					<!--
					PARTIAL > Card 1
					-->
					<?php echo file_get_contents("assets/partials/card-podcast.html"); ?>

				</aside>

			</div>

		</section>

		<!--
		PARTIAL > Photo strip
		-->
		<?php echo file_get_contents("assets/partials/photo-strip.html"); ?>

		<!--
		PARTIAL > Contact form
		-->
		<?php echo file_get_contents("assets/partials/contact-form.html"); ?>

	</main>

	<!--
	PARTIAL > Page footer
	-->
	<?php echo file_get_contents("assets/partials/page-footer.html"); ?>

	<!--
	PARTIAL > Schema
	-->
	<?php echo file_get_contents("assets/partials/schema.html"); ?>

	<!--
	HTML > Preload elements
	-->
	<!--<span class="preload-me"></span>-->

</body>

</html>
