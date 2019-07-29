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
	SCRIPTS > Page scripts
	-->
	<script src="assets/scripts/fees.min.js" defer></script>
	<script src="assets/scripts/format-fees.min.js" defer></script>

	<!--
	LINK & PARTIAL > Async-load non-critical CSS
	-->

	<link rel="preload" href="assets/non-critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="assets/non-critical.min.css"></noscript>
	<?php include("assets/partials/loadCSS.html"); ?>

	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow">
	<meta name="pagename" content="Education Incorporated Boutique School Fees">
	<meta name="subtitle" content="">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">

	<!--
	PARTIAL > Base URL
	-->
	<?php include("assets/partials/base-url.html"); ?>

	<meta property="og:title" content="Education Incorporated Boutique School Fees" />
	<meta property="og:keywords" content="" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://educationincorporated.co.za/fees.php" />
	<meta property="og:image" content="https://educationincorporated.co.za/assets/images/education-incorporated-logo.png" />
	<meta property="og:type" content="website" />
	<link rel="canonical" href="https://educationincorporated.co.za/fees.php" />
	<title>Education Incorporated Boutique School Fees</title>
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

			<h1 class="text-underline-red">Fees</h1>
			<div class="margin-y-mob pad-b-mob quote-white"></div>
			<div class="h3">The fee you see is the fee you pay &mdash; and that's for a private school education in classes with no more than <span class="no-break">10 children</span> per teacher.</div>
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

					<p>There are no further, compulsory, "hidden" charges during the year. <a href="#feescalculator">The fee you see</a> is the fee you pay&mdash;and that's for a private school education in classes with no more than 10 children per teacher.</p>

					<p>While the additional charges referred to below are payable at the commencement of the year, the others are payable either monthly (over 12 months), termly (we're a three-term school) or annually. A discount applies to the latter two options.</p>

					<p>For families joining us for the first time, there is an initial joining fee payable upon registration. This fee includes all the additional charges listed below. For families with multiple enrolments (e.g. siblings) an additional 5% discount applies to the annual fees for the youngest child enrolled.</p>

					<h3>What Our Fees Include</h3>

					<p>
						<ul class="list-check">
							<li>Annual grade-specific tuition fee</li>
							<li>IEB charges<sup class="font-red">1</sup></li>
							<li>Subject-specific charges</li>
							<li>All additional charges<sup class="font-red">2</sup></li>
						</ul>
					</p>

					<hr />

					<ol class="list-reference">
						<li>Specific testing for grades 6 and 9 and the Matric exam fee paid over two years in <span class="no-break">grades 11 and 12</span></li>
						<li>Including curriculum, textbooks, development levy, locker rental, software licences and photographs</li>
					</ol>

				</article>

			<!--
			Aside content
			-->
				<aside class="flow-ttb-mob width-100-mob width-30-tab spread-respond">

					<!--
					PARTIAL > Card 1
					-->
					<?php include("assets/partials/card-podcast.html"); ?>

				</aside>

			</div>

		</section>

		<!--
		Fee calculator
		-->

		<section class="pad-xy-mob theme-dark-grey border-b-mob shadow-t-mob" id="feescalculator">

			<!--
			Section header
			-->

			<header class="constrain pad-y-mob">
				<h2 class="text-underline-red">School Fees Calculator</h2>
				<p>Select an option from each of the <span class="no-break">three menus and Calculate.</span> Please note that this calculator is a guide and errors and omissions are excepted.</p>
			</header>

			<!--
			Container
			-->

			<div class="constrain margin-respond-y-mob radius-mob theme-grey border-mob">

				<div class="pad-respond-xy-mob">

					<div class="">

						<!--
						Fee calculator form
						-->

						<form name="fees">

							<div class="flow-ttb-mob flow-ltr-tab spread">

								<div class="width-100-mob">
									<label for="enteringGrade">Grade</label>
									<select name="enteringGrade" id="enteringGrade" onChange="selectionChange()">
										<option value="" selected>Select...</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>

								<div class="width-100-mob">
									<label for="enteringGrade">Status</label>
									<select name="select" id="enrolment" onChange="selectionChange()">
										<option value="" selected>Select...</option>
										<option value="newstudent">New Student</option>
										<option value="currentlyenrolled">Currently Enrolled</option>
									</select>
								</div>

								<div class="width-100-mob">
									<label for="enteringGrade">Payment</label>
									<select name="select" id="paymentFrequency" onChange="selectionChange()">
										<option value="" selected>Select...</option>
										<option value="permonth">Monthly</option>
										<option value="perterm">Per Term (-2%)</option>
										<option value="peryear">Annually (-5%)</option>
									</select>
								</div>
							</div>

							<div class="flow-ttb-mob flow-ltr-tab spread pad-double-t-mob pad-b-mob">
								<a class="button disabled width-100-mob theme-dark-green" id="calcButton" onClick="calculateFees()">Calculate</a>
								<a class="button width-100-mob theme-yellow" onClick="reset()">Clear All</a>
							</div>

							<!--
							Fee calculator results
							-->

							<div class="feesresult pad-t-mob" style="display:none">

								<div class="feesresult__container">

									<div class="feesresult__item">
										<span class="feesresult__label">Payable on Registration<sup class="font-red">1</sup></span>
										<input class="feesresult__input--50" id="registration" type="text" value="R0.00" readonly />
									</div>

									<div class="feesresult__item">
										<span class="feesresult__label">Payable at Start of Year<sup class="font-red">2</sup></span>
										<input class="feesresult__input--50" id="curriculum" type="text" value="R0.00" readonly />
									</div>

									<hr class="feesresult__hr" />

									<div class="feesresult__item">
										<span class="feesresult__label">Tuition</span>
										<input class="feesresult__input--50" id="tuition" type="text" value="R0.00" readonly />
									</div>

									<div class="feesresult__item">
										<span class="feesresult__label">IEB<sup class="font-red">3</sup></span>
										<input class="feesresult__input--50" id="ieb" type="text" value="R0.00" readonly />
									</div>

									<div class="feesresult__item">
										<span class="feesresult__label">Discount</span>
										<input class="feesresult__input--50" class="discountText font-green" id="discount" type="text" value="R0.00" readonly />
									</div>

									<div class="feesresult__item">
										<input class="feesresult__input--100" id="total" type="text" value="R0.00" readonly />
									</div>

								</div>

								<hr class="feesresult__hr" />

								<ol class="list-reference">
									<li>Includes joining fee for new students and all additional charges, such as curriculum, textbooks, outings, software and licences, development levy, photographs, locker rental <span class="no-break">and sundries</span></li>
									<li>Includes all additional charges, such as curriculum, textbooks, outings, software and licences, development levy, photographs, locker rental <span class="no-break">and sundries</span></li>
									<li>Specific testing for grades 6 and 9 and the Matric exam fee paid over two years in <span class="no-break">grades 11 and 12</span></li>
								</ol>

							</div>

						</form>
					</div>
				</div>

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
