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
	<meta name="pagename" content="Education Incorporated Boutique School Values">
	<meta name="subtitle" content="">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">

	<!--
	PARTIAL > Base URL
	-->
	<?php echo file_get_contents("assets/partials/base-url.html"); ?>

	<meta property="og:title" content="Education Incorporated Boutique School Values" />
	<meta property="og:keywords" content="" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://educationincorporated.co.za/values.php" />
	<meta property="og:image" content="https://educationincorporated.co.za/assets/images/education-incorporated-logo.png" />
	<meta property="og:type" content="website" />
	<link rel="canonical" href="https://educationincorporated.co.za/values.php" />
	<title>Education Incorporated Boutique School Values</title>
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

			<h1 class="text-underline-red">Our Values</h1>
			<div class="margin-y-mob pad-b-mob quote-white"></div>
			<div class="h3">At Education Incorporated we believe that effectively communicating with each other is the cornerstone of establishing, maintaining and growing relationships and people.</div>
			<p>&mdash; Jacqueline Aitchison (Executive Head)</p>

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
				<article class="width-100-mob width-70-tab">

					<picture class="article__author-image radius-mob border-b-mob">
						<source srcset="assets/images/photos/author__jacqueline-aitchison.webp" type="image/webp" />
						<img src="assets/images/photos/author__jacqueline-aitchison.jpg" alt="jacqueline aitchison photo" />
					</picture>

					<span class="article__author-name">By Jacqueline Aitchison</span>

					<p>At Education Incorporated we talk about things—we plant seeds of thought that grow through valuable dialogue! Honest conversations about academics, peer and teacher relationships, personal development and growth, social issues and pressure, conflict management and leadership, are but a few of the daily topics that we engage in.</p>
					<p>In addition to effective communication, there are two pillars underlying the core values that are the very foundation of the Education Incorporated School: High academic standards and the respect afforded teachers.</p>

					<h3>Our Values</h3>

					<p>
						<ul class="list-shield">
							<li>All actions and decisions are based on the best interests of the children.</li>
							<li>Every experience is a teaching and learning opportunity for children, parents and teachers alike.</li>
							<li>Nurturing the well-being and development of the children through the integration and growth of IQ, EQ and AQ<sup class="font-red">1</sup>.</li>
							<li>Engagement in "big-picture" thinking to ensure the development of perspective, creative problem-solving and development of essential critical thinking skills.</li>
							<li>Encouragement and facilitation of acceptance, respect and tolerance of others.</li>
						</ul>
					</p>

					<hr />

					<ol class="list-reference">
						<li>IQ refers to Intelligence Quotient, EQ to Emotional Quotient and AQ to Application Quotient (i.e. the combination of Think, Feel and Do)</li>
					</ol>

				</article>

			<!--
			Aside content
			-->
				<aside class="flow-ttb-mob width-100-mob width-30-tab spread-respond">

					<!--
					PARTIAL > Card 1
					-->
					<?php echo file_get_contents("assets/partials/card-podcast.html"); ?>

					<!--
					PARTIAL > Card 2
					-->
					<?php echo file_get_contents("assets/partials/card-book.html"); ?>

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
