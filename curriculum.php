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

	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow">
	<meta name="pagename" content="Education Incorporated Boutique School Curriculum">
	<meta name="subtitle" content="">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">

	<!--
	PARTIAL > Base URL
	-->
	<?php include("assets/partials/base-url.html"); ?>

	<meta property="og:title" content="Education Incorporated Boutique School Curriculum" />
	<meta property="og:keywords" content="" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://educationincorporated.co.za/curriculum.php" />
	<meta property="og:image" content="https://educationincorporated.co.za/assets/images/education-incorporated-logo.png" />
	<meta property="og:type" content="website" />
	<link rel="canonical" href="https://educationincorporated.co.za/curriculum.php" />
	<title>Education Incorporated Boutique School Curriculum</title>
	<link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
	<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon.png">
	<link rel="dns-prefetch" href="https://educationincorporated.co.za/">

	<!--
	STYLES > Critical CSS
	-->
	<style type="text/css">
		<?php include("assets/critical.min.css"); ?>
	</style>

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
		Page header
		-->

		<header class="flow-ttb-mob constrain pad-x-mob pad-double-y-mob">

			<h1 class="text-underline-red">Curriculum</h1>
			<div class="margin-y-mob pad-b-mob quote-white"></div>
			<div class="h3">Education Incorporated has consistently achieved a 100&percnt; Matric pass rate since its first Matric group.</div>
			<p>&mdash; Gershom Aitchison (Headmaster)</p>

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
						<source srcset="assets/images/photos/author__gershom-aitchison.webp" type="image/webp" />
						<img src="assets/images/photos/author__gershom-aitchison.jpg" alt="gershom aitchison photo" />
					</picture>

					<span class="article__author-name">By Gershom Aitchison</span>

					<p>Education Incorporated is a registered IEB school and writes the IEB examinations. The IEB is not a curriculum, it is an examination board. Visit their website <a href="http://www.ieb.co.za/" target="_blank" rel="noopener">for more detailed information</a>.</p>
					<p>For a private school to write the grade 12 National Senior Certificate (NSC), the school needs to be <a href="http://www.umalusi.org.za/services.php?cat=Accreditation" target="_blank" rel="noopener">accredited by Umalusi</a> so that it can apply to be an examination venue. Being a registered school with the GDE does not automatically make a school an examination venue. The Umalusi accreditation process is very costly and laborious, but it does ensure a minimum standard for schools and service delivery.</p>
					<p><a href="http://www.isasa.org/" target="_blank" rel="noopener">As an ISASA member</a>, we adhere to the ISASA independent/private schools calendar, which is three terms. Students are examined twice a year&mdash;in June/July and October/November.</p>

                    <p>Accredited by Umalusi, Council for Quality Assurance in General and Further Education and Training (Accreditation Number 17SCH0100420).</p>

					<h3>Grades We Teach</h3>

					<p>We provide small classes for grades 4 to 12. We do not currently offer grades R to 3 (Foundation Phase).</p>

					<table class="border-mob">
						<thead class="theme-dark-grey">
							<tr>
								<th>Grades</th>
								<th>Phases</th>
								<th>Bands</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>4 to 6</td>
								<td>Intermediate</td>
								<td>Education</td>
							</tr>
							<tr>
								<td>7 to 9</td>
								<td>Senior</td>
								<td>Training (GET)</td>
							</tr>
							<tr>
								<td>10 to 12</td>
								<td>FET</td>
								<td>FET</td>
							</tr>
						</tbody>
					</table>

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
