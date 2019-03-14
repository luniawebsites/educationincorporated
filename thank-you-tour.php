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

	<meta name="robots" content="noindex, nofollow">
	<meta name="pagename" content="Education Incorporated Boutique School">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">

	<!--
	PARTIAL > Base URL
	-->
	<?php echo file_get_contents("assets/partials/base-url.html"); ?>

	<title>Thank You!</title>
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
		Main content
		-->
		<section class="pad-respond-xy-mob theme-white border-b-mob shadow-t-mob">
		
			<h1 class="pad-respond-t-mob text-underline-red">Thank you for requesting a tour</h1>

			<div class="flow-ttb-mob flow-ltr-tab constrain pad-respond-y-mob align-fs-tab">

				<!--
				Main content
				-->
				<p>One of our team will contact you shortly to confirm a date and time when you can come in and see our school for yourself. If you haven't already done so, we recommend you download our prospectus and book (you can even listen to a few of our podcast episodes) so that you already know more about us and can ask questions that are specific to your needs and concerns. We look forward to meeting you and assisting your family.</p>

			</div>

		</section>

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
