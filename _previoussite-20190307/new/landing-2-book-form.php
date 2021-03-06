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

	<title>Education Incorporated Boutique School</title>
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

			<h1 class="text-underline-red">Educating Your <span class="no-break">22nd Century Child</span></h1>
			<div class="margin-y-mob pad-b-mob"></div>
			<div class="h3">Valuable information that all parents should know when choosing a school for their child.</p>

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
				<div class="width-100-mob width-70-tab pad-respond-b-mob">

					<form accept-charset="UTF-8" action="https://wb357.infusionsoft.com/app/form/process/caf97c45274c644b14aa1b5d3ff6f64c" class="infusion-form" id="inf_form_caf97c45274c644b14aa1b5d3ff6f64c" method="POST">
						<input name="inf_form_xid" type="hidden" value="caf97c45274c644b14aa1b5d3ff6f64c" />
						<input name="inf_form_name" type="hidden" value="Opt In&#a; to Book 01a&#a;LP 2" />
						<input name="infusionsoft_version" type="hidden" value="1.70.0.81390" />
						<div class="infusion-field pad-b-mob">
							<label for="inf_field_FirstName">First Name</label>
							<input class="infusion-field-input" id="inf_field_FirstName" name="inf_field_FirstName" type="text" />
						</div>
						<div class="infusion-field pad-b-mob">
							<label for="inf_field_LastName">Last Name</label>
							<input class="infusion-field-input" id="inf_field_LastName" name="inf_field_LastName" type="text" />
						</div>
						<div class="infusion-field pad-b-mob">
							<label for="inf_field_Email">Email</label>
							<input class="infusion-field-input" id="inf_field_Email" name="inf_field_Email" type="text" />
						</div>
						<div class="infusion-field pad-b-mob">
							<label for="inf_field_Phone1">Mobile</label>
							<input class="infusion-field-input" id="inf_field_Phone1" name="inf_field_Phone1" type="text" />
						</div>
						<div>
							<div>&nbsp;</div>
						</div>
						<div class="infusion-submit">
							<button class="theme-blue" type="submit">Submit</button>
						</div>
					</form>
					<script type="text/javascript" src="https://wb357.infusionsoft.app/app/webTracking/getTrackingCode"></script>
					<script type="text/javascript" src="https://wb357.infusionsoft.com/app/timezone/timezoneInputJs?xid=caf97c45274c644b14aa1b5d3ff6f64c"></script>

				</div>

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
