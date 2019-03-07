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
	<meta name="pagename" content="Education Incorporated Boutique School Houses">
	<meta name="subtitle" content="">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">

	<!--
	PARTIAL > Base URL
	-->
	<?php echo file_get_contents("assets/partials/base-url.html"); ?>

	<meta property="og:title" content="Education Incorporated Boutique School Houses" />
	<meta property="og:keywords" content="" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://educationincorporated.co.za/houses.php" />
	<meta property="og:image" content="https://educationincorporated.co.za/assets/images/education-incorporated-logo.png" />
	<meta property="og:type" content="website" />
	<link rel="canonical" href="https://educationincorporated.co.za/houses.php" />
	<title>Education Incorporated Boutique School Houses</title>
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

			<h1 class="text-underline-red">Houses</h1>
			<div class="margin-y-mob pad-b-mob quote-white"></div>
			<div class="h3">House points are awarded for numerous daily achievements and positive behaviours &mdash; and are deducted to discourage undesirable behaviour.</div>
			<p>&mdash; Gavin Kennedy <span class="no-break">(General Operations Manager)</p>

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
						<source srcset="assets/images/photos/author__gavin-kennedy.webp" type="image/webp" />
						<img src="assets/images/photos/author__gavin-kennedy.jpg" alt="gavin kennedy photo" />
					</picture>

					<span class="article__author-name">By Gavin Kennedy</span>

					<p>Education Incorporated has four Houses named for flying mythological creatures: Griffin, Dragon, Pegasus and Phoenix. Each House has three characteristics that are closely linked to the school values of IQ, EQ and AQ<sup>1</sup>.</p>
					<p>On enrolment, each new student completes a questionnaire that determines which House they will be allocated to. They are then issued a pin to wear on their uniform to indicate their House.</p>
					<p>The Houses have House Teachers (also allocated by questionnaire), one of whom is the House Leader. The students and teachers of the House vote for a House Captain and may re-elect a Captain at any point in the year based on their performance.</p>
					<p>The Houses and point system were created when we saw how important it is for our students to belong to a team with a common goal.</p>

					<!--
					All staff
					-->

					<picture>
						<source media="(max-width: 720px)" srcset="assets/images/photos/mobile/house__dragon.jpg" type="image/jpeg">
						<img src="assets/images/photos/tablet/house__dragon.jpg" alt="photo of dragon house" style="margin:30px 0 10px 0;width:100%;height:auto">
					</picture>

					<em class="radius-mob theme-grey accent-blue">Students inspire and support each other, hold each other accountable for their behaviour and compete fiercely to be the winning House.</em>

					<p>House points are awarded for numerous daily achievements and positive behaviours, and are deducted to discourage undesirable behaviour. The points are weighted double in favour of positive behaviour. The points provide instant feedback via the big-screen TV at the school's reception. Any team at any time can issue a team challenge to gain more points, and we often see teams learning to identify their strengths through this process so that they can maximise their points. There are numerous House challenges issued by the school that also allow the Houses to advance their points.</p>
					<p>The prize for the most points at the end of the year is the coveted House Cup (along with bragging rights). An individual trophy is awarded to the student who has contributed the most individual points to their House during the year.</p>

					<hr />

					<ol class="list-reference">
						<li>IQ refers to Intelligence Quotient, EQ to Emotional Quotient and AQ to Application Quotient (i.e. the combination of Think, Feel and Do)</li>
					</ol>

					<!--<h3>Real-Time Graph of <span class="no-break">House Points</span></h3>-->

					<h3>Winner History</h3>

					<table class="border-mob">
						<thead class="theme-dark-grey">
							<tr>
								<th>House Trophy Winners</th>
							</tr>
						</thead>
						<tbody>
							<tr class="font-green">
								<td>2018: Dragon</td>
							</tr>
							<tr class="font-red">
								<td>2017: Phoenix</td>
							</tr>
							<tr class="font-red">
								<td>2016: Phoenix</td>
							</tr>
						</tbody>
					</table>

					<table class="border-mob">
						<thead class="theme-dark-grey">
							<tr>
								<th>Highest Individual Point Scores</th>
							</tr>
						</thead>
						<tbody>
							<tr class="font-green">
								<td>2018: Luke van Rooyen</td>
							<tr class="font-green">
								<td>2017: Luke van Rooyen</td>
							</tr>
							<tr class="font-red">
								<td>2016: Rayne Nel</td>
							</tr>
						</tbody>
					</table>

				</article>

			<!--
			Aside content
			-->

				<aside class="flow-ttb-mob width-100-mob width-30-tab spread-respond">

					<!--
					Item: Phoenix
					-->

					<figure class="flow-ttb-mob width-100-mob pad-double-t-mob pad-b-mob radius-mob theme-grey border-mob accent-red shadow-mob" style="overflow:visible">

						<div class="width-100-mob" style="position:relative">
							<div class="trophy-winner"></div>
						</div>

						<div class="house__dragon-image"></div>
						<div class="house__dragon-name"></div>

						<div class="flex-grow pad-xy-mob">
							<p>Power, Wisdom and Protection</p>
						</div>

					</figure>

					<!--
					Item: Dragon
					-->

					<figure class="flow-ttb-mob width-100-mob pad-double-t-mob pad-b-mob radius-mob theme-grey border-mob accent-red shadow-mob">

						<div class="house__phoenix-image"></div>
						<div class="house__phoenix-name"></div>

						<div class="flex-grow pad-xy-mob">
							<p>Purity, Reason and Independence</p>
						</div>

					</figure>

					<!--
					Item: Griffin
					-->

					<figure class="flow-ttb-mob width-100-mob pad-double-t-mob pad-b-mob radius-mob theme-grey border-mob accent-red shadow-mob">

						<div class="house__griffin-image"></div>
						<div class="house__griffin-name"></div>

						<div class="flex-grow pad-xy-mob">
							<p>Courage, Intelligence and Determination</p>
						</div>

					</figure>

					<!--
					Item: Pegasus
					-->

					<figure class="flow-ttb-mob width-100-mob pad-double-t-mob pad-b-mob radius-mob theme-grey border-mob accent-red shadow-mob">

						<div class="house__pegasus-image"></div>
						<div class="house__pegasus-name"></div>

						<div class="flex-grow pad-xy-mob">
							<p>Inspiration, Enlightenment and Loyalty</p>
						</div>

					</figure>

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
