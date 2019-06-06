<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimum-scale=0.5, user-scalable=yes" />

	<!--
	PARTIAL > Base URL
	-->
	<?php echo file_get_contents("assets/partials/base-url.html"); ?>

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

	<meta name="keywords" content="Education Incorporated Boutique School" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow">
	<meta name="pagename" content="Education Incorporated Boutique School">
	<meta name="subtitle" content="">
	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">
	<meta property="og:title" content="Education Incorporated Boutique School" />
	<meta property="og:keywords" content="" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="en_ZA" />
	<meta property="og:url" content="https://educationincorporated.co.za/" />
	<meta property="og:image" content="https://educationincorporated.co.za/assets/images/education-incorporated-logo.png" />
	<meta property="og:type" content="website" />
	<link rel="canonical" href="https://educationincorporated.co.za/" />
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

	<!--
	SCRIPT > Structured data
	-->
	<script type="application/ld+json">
		{
		"@context": "http://schema.org",
		"@type": "Corporation",
		"id": "https://educationincorporated.co.za",
		"url": "https://educationincorporated.co.za",
		"name": "Education Incorporated",
		"description": "We offer you the highest standard of private schooling with qualified teachers who ensure positive affirmation throughout the learning process.",
		"logo": "http://www.educationincorporated.co.za/assets/images/education-incorporated-logo.png",
		"image": "http://www.educationincorporated.co.za/assets/images/education-incorporated-campus.jpg",
		"contactPoint": {
			"@type": "ContactPoint",
			"telephone": "+27-11-467-8015",
			"contactType": "Customer service"
			},
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "40 Kingfisher Drive",
			"addressLocality": "Fourways",
			"addressRegion": "Gauteng",
			"addressCountry": "South Africa"
			},
		"sameAs": [
			"https://www.facebook.com/Eduinc.co.za/",
			"https://www.youtube.com/channel/UChJ4pGzP_dOPeYFQu5iUwOA/",
			"http://www.isasaschoolfinder.co.za/keyword_search.htm?keywordSearch=1434-EDUcation-INCorporated-%28Primary%29",
			"http://www.isasaschoolfinder.co.za/keyword_search.htm?keywordSearch=1435-EDUcation-INCorporated-%28Secondary%29"
			]
		}
	</script>

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

		<header class="hero image-hero pad-respond-xy-mob theme-dark-grey border-b-mob">

			<!--
			Container
			-->

			<div class="flow-ttb-mob height-100 constrain pad-respond-t-mob align-c-mob">

				<img src="assets/images/education-incorporated-logo.png" alt="education incorporated logo" />

				<div class="pad-t-mob">

						<h1>Registered IEB <span class="no-break">Private School</span></h1>

						<div class="h2">Grades 4 to 12 with 10 children <span class="no-break">per class</span></div>

						<div class="flow-ttb-mob margin-t-mob pad-respond-xy-mob">

							<span class="bg-c-c-mob brand-teded"></span>

						</div>

				</div>

			</div>

		</header>

		<!--
		Unique perspective
		-->

		<section class="pad-respond-xy-mob theme-grey border-b-mob">

			<!--
			Container
			-->

			<div class="flow-ttb-mob height-100 constrain pad-respond-y-mob align-c-mob">

				<div class="">

					<h2 class="text-underline-red">We Have a Unique Perspective on Education</h2>

					<p>With our very small classes, each child is assured <strong>personal attention</strong> from our qualified and caring teachers. As a mainstream GDE-registered and Umalusi-accredited school, our Matrics write the same exams as the other private IEB schools you are familiar with. We’re extremely proud of our <strong>100% pass rate</strong> and look forward to <a href="#contact" aria-label="contact us">answering any questions</a> you may have about EduInc.</p>

				</div>

			</div>

			<!--
			Container 1
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-respond-y-mob align-s-mob">

				<!--
				Item
				-->

				<figure class="flow-ttb-mob pad-respond-xy-mob align-fs-tab justify-fs-tab radius-mob theme-white border-mob shadow-mob">

					<span class="bg-c-c-mob bg-l-c-tab icon-vision"></span>

					<div class="grow pad-t-mob text-c-mob text-l-tab">
						<h3>Our Vision</h3>
						<p>Every child will leave us as an independent, confident, thinking young adult with the best (and most meaningful) Matric they can achieve, ready to follow their dreams and shape the future.</p>
					</div>

				</figure>

				<!--
				Item
				-->

				<figure class="flow-ttb-mob pad-respond-xy-mob align-fs-tab justify-fs-tab radius-mob theme-white border-mob shadow-mob">

					<span class="bg-c-c-mob bg-l-c-tab icon-mission"></span>

					<div class="grow pad-t-mob text-c-mob text-l-tab">
						<h3>Our Mission</h3>
						<p>To grow children through unwavering adherence to our core values into the thought-leaders of the future.</p>
					</div>

				</figure>

			</div>

			<!--
			Container 2
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-respond-b-mob align-s-mob">

				<!--
				Item
				-->

				<figure class="flow-ttb-mob pad-respond-xy-mob align-fs-tab justify-fs-tab radius-mob theme-white border-mob shadow-mob">

					<span class="bg-c-c-mob bg-l-c-tab icon-method"></span>

					<div class="grow pad-t-mob text-c-mob text-l-tab">
						<h3>Our Method</h3>
						<p>We open and operate boutique schools with an unwavering commitment to high academic standards.</p>
						</div>

				</figure>

				<!--
				Item
				-->

				<figure class="flow-ttb-mob pad-respond-xy-mob align-fs-tab justify-fs-tab radius-mob theme-white border-mob shadow-mob">

					<span class="bg-c-c-mob bg-l-c-tab icon-values"></span>

					<div class="width-100-mob grow pad-t-mob text-c-mob text-l-tab">

						<h3>Our Values</h3>

						<!-- Audio clip -->
						<div class="margin-y-mob">
							<audio style="width:100%" controls src="https://podcaststudios.co.za/audio/eduinc/edu-inc-radio-ad-01.mp3" type="audio/mpeg" controlsList="nodownload"></audio>
						</div>

					</div>
				</figure>

			</div>

		</section>

		<!--
		PARTIAL > Photo strip
		-->
		<?php echo file_get_contents("assets/partials/photo-strip.html"); ?>

		<!--
		School accreditations
		-->

		<section class="pad-respond-xy-mob theme-white border-b-mob">

			<!--
			Section header
			-->

			<header class="constrain pad-respond-y-mob">

				<h2 class="text-underline-red">School Accreditations</h2>

				<p>Education Incorporated is registered with the Gauteng Department of Education (JN700400746), Independent Examinations Board (IEB), Independent Schools Association of Southern Africa (ISASA) and Council for Quality Assurance in General and Further Education and <span class="no-break">Training (Umalusi)</span>.
				</p>

			</header>

			<!--
			Container
			-->

			<div class="flow-ttb-mob flow-ltr-tab height-100 constrain spread-respond pad-respond-xy-mob align-c-mob">

					<a href="http://www.gauteng.gov.za/government/departments/education/" aria-label="visit gauteng province education department website" target="blank" rel="noopener">
						<img src="assets/images/brands/gauteng-province-education-department.png" alt="gauteng province education department logo" width="160px" />
					</a>

					<a href="http://www.ieb.co.za/" aria-label="visit independent examinations board website" target="blank" rel="noopener">
						<img src="assets/images/brands/independent-examinations-board.png" alt="independent examinations board logo" width="75px" />
					</a>

					<a href="http://www.isasa.org/" aria-label="visit independent schools association of southern africa website" target="blank" rel="noopener">
						<img src="assets/images/brands/independent-schools-association-of-southern-africa.png" alt="independent schools association of southern africa logo" width="90px" />
					</a>

					<a href="http://www.umalusi.org.za/" aria-label="visit umalusi website" target="blank" rel="noopener">
						<img src="assets/images/brands/umalusi.png" alt="umalusi logo" width="200px" />
					</a>

			</div>

		</section>

		<!--
		Downloads
		-->

		<section class="theme-white">

			<!--
			Container
			-->

			<div class="flow-ttb-mob flow-ltr-tab align-s-tab">

				<!--
				Item
				-->

				<figure class="flow-ttb-mob pad-double-y-mob theme-white border-b-mob">

					<a href="landing-book-form.php" aria-labelledby="download-book">
						<img class="image-downloads image-downloads--shift" src="assets/images/book.png" alt="photo of book cover">
					</a>

					<div class="flex-grow pad-respond-x-mob">
						<h3>Educating Your 22nd Century Child</h3>
						<p>Valuable information that all parents should know when choosing a school for their child.</p>
					</div>

					<div class="pad-double-t-mob">
						<a href="landing-book-form.php" aria-labelledby="download-book">
							<button class="theme-blue" id="download-book">Download</button>
						</a>
					</div>

				</figure>

				<!--
				Item
				-->

				<figure class="flow-ttb-mob pad-double-y-mob theme-white border-l-tab border-b-mob">

					<a href="landing-prospectus-form.php" aria-labelledby="download-prospectus">
						<img class="image-downloads image-downloads--shift" src="assets/images/prospectus.png" alt="photo of prospectus cover">
					</a>

					<div class="flex-grow pad-respond-x-mob">
						<h3>School Prospectus</h3>
						<p>Learn how our school operates, our values and ethos, and why we may be the perfect fit for your child.</p>
					</div>

					<div class="pad-double-t-mob">
						<a href="landing-prospectus-form.php" aria-label="download prospectus" aria-labelledby="download-prospectus">
							<button class="theme-blue" id="download-prospectus">Download</button>
						</a>
					</div>

				</figure>

				<!--
				Item
				-->

				<figure class="flow-ttb-mob pad-double-y-mob theme-white border-l-tab border-b-mob">

					<a href="https://solidgoldstudios.co.za/eduthink.php" target="_blank" rel="noopener" aria-labelledby="listen-podcast">
						<img class="image-downloads border-mob" src="assets/images/eduthink.jpg" alt="eduthink podcast cover art">
					</a>

					<div class="flex-grow pad-respond-x-mob">
						<h3 class="">EduThink Podcast</h3>
						<p class="">Listen to conversations and interviews on education-related topics that are important to today's families.</p>
					</div>

					<div class="pad-double-t-mob">
						<a href="https://solidgoldstudios.co.za/eduthink.php" target="_blank" rel="noopener" aria-label="listen to podcast" aria-labelledby="listen-podcast">
							<button class="theme-green" id="listen-podcast">Listen</button>
						</a>
					</div>

				</figure>

			</div>

		</section>

		<!--
		FAQ
		-->

		<section class="pad-respond-t-mob theme-dark-grey" id="faq">

			<!--
			Section header
			-->

			<header class="pad-respond-xy-mob">

				<h2 class="text-underline-red">Frequently Asked Questions</h2>

			</header>

			<!--
			
			-->

			<div class="pad-respond-y-mob">

			<!--
			Container 1
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-b-mob align-s-mob">

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-1-article.php#soretummiesandotheranxieties" aria-label="sore tummies">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__teacher-student-talking.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__teacher-student-talking.jpg" alt="teacher talking to student" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Sore tummies and other anxieties</div>
						</div>

					</figure>

				</a>

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-1-article.php#caniaffordyourfees" aria-label="can I afford your fees?">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__two-children-on-floor-playing-game.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__two-children-on-floor-playing-game.jpg" alt="two children on floor playing a game" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Can I afford your fees?</div>
						</div>

					</figure>

				</a>

			</div>

			<!--
			Container 2
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-b-mob align-s-mob">

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-1-article.php#ismychildunhappyatschool" aria-label="is my child unhappy at school?">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__two-students-hugging.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__two-students-hugging.jpg" alt="two students hugging" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Is my child unhappy at school?</div>
						</div>

					</figure>

				</a>

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-3-article.php#areyouamainstreamschool" aria-label="Are you a mainstream school?">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__children-science-class.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__children-science-class.jpg" alt="children in science class" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Are you a mainstream school?</div>
						</div>

					</figure>

				</a>

			</div>

			<!--
			Container 3
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-b-mob align-s-mob">

				<!--
				Item
				-->

				<a class="width-100-mob" href="#pagefooter" aria-label="where is education incorporated situated?">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__map.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__map.jpg" alt="where is education incorporated situated?" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Where is Education Incorporated situated?</div>
						</div>

					</figure>

				</a>

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-1-article.php#doyouhavespaceformychild" aria-label="do you have space for my child?">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__four-students-outdoors.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__four-students-outdoors.jpg" alt="campus with lawn" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Do you have space for my child?</div>
						</div>

					</figure>

				</a>

			</div>

			<!--
			Container 4
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-b-mob align-s-mob">

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-2-article.php#whatdoyoureallymeanbysmallclasses" aria-label="what do you really mean by small classes?">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__smiling-children-biology-class.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__smiling-children-biology-class.jpg" alt="smiling children in biology class" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">What do you really mean by "small classes"?</div>
						</div>

					</figure>

				</a>

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-2-article.php#doessmallclassesmeanremedial" aria-label="does small classes mean remedial?">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__girl-watching-snail.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__girl-watching-snail.jpg" alt="children in science class" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Does "small classes" mean remedial?</div>
						</div>

					</figure>

				</a>

			</div>

			<!--
			Container 5
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-b-mob align-s-mob">

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-3-article.php#whydidyounameyourschooleducationincorporated" aria-label="why did you name your school education incorporated?">

					<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__campus-with-pool.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__campus-with-pool.jpg" alt="campus with swimming pool" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Why did you name your school Education Incorporated?</div>
						</div>

					</figure>

				</a>

				<!--
				Figure 2
				-->

				<a class="width-100-mob" href="landing-1-article.php#whatdoyoumeanbyboutiqueschool" aria-label="what do you mean by boutique school?">

						<figure class="card-link flow-ttb-mob flow-ltr-des pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__children-listening-to-teacher.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__children-listening-to-teacher.jpg" alt="children listening to teacher" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">What do you mean by "boutique school"?</div>
						</div>

					</figure>

				</a>

			</div>

			<!--
			Container 6
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread-respond pad-b-mob align-s-mob">

				<!--
				Item
				-->

				<a class="width-100-mob" href="landing-2-article.php#doesmychildhavethepotentialyourelookingfor" aria-label="why did you name your school education incorporated?">

					<figure class="card-link flow-ttb-mob flow-ltr-des width-50-tab pad-x-mob pad-t-mob pad-b-des align-c-mob justify-fs-des radius-mob">

						<picture>
							<source srcset="assets/images/photos/faq__grade-6-class-photo-on-chairs.webp" type="image/webp" />
							<img class="image-size-medium round-mob border-mob" src="assets/images/photos/faq__grade-6-class-photo-on-chairs.jpg" alt="grade 6 class photo sitting on chairs" />
						</picture>

						<div class="flow-ttb-mob pad-xy-mob width-100-mob">
							<div class="h3 text-c-mob text-l-des">Does my child have the potential you're looking for?</div>
						</div>

					</figure>

				</a>

			</div>

		</section>

		<!--
		Our students
		-->

		<section class="pad-respond-t-mob theme-white">

			<!--
			Section header
			-->

			<header class="constrain pad-x-mob pad-respond-y-mob">

				<h2 class="text-underline-red">Our Students</h2>

				<p>When a child begins their educational journey with us we understand that it is precisely that&mdash;a journey. A long-term process of individualised, whole-child development where potential can be discovered and honed. Where responsible, respectful value systems can be instilled, preparing each child for the world they will encounter after their time with us.</p>

			</header>

			<!--
			Container
			-->

			<div class="flow-ttb-mob pad-respond-t-mob">

				<!--
				Item: Academics
				-->

				<a class="width-100-mob" href="academics.php" aria-label="academics">

					<figure class="flow-ttb-mob flow-ltr-tab theme-white radius-mob border-t-mob border-b-mob">

						<div class="image-background our-students__two-girls-holding-awards width-40-tab accent-yellow"></div>

						<div class="pad-respond-x-mob pad-y-mob width-60-tab">

							<h3 class="text-l-tab">Our Students Are <span class="font-red">Academics</span></h3>

							<p class="text-l-tab">We understand that a good education is not an event, but rather a process. Our educational philosophy understands that learning is about more than just text books and rote learning. We understand that in order to demonstrate academic development, the development of EQ (emotional quotient) and AQ (application quotient) are just as important. We dedicate time to working with our students on how to implement effective study strategies, how to work efficiently in groups, and how best to demonstrate the preparation students put into assessments and exams.</p>

						</div>

					</figure>

				</a>

				<!--
				Item: Creatives
				-->

				<a class="width-100-mob" href="creatives.php" aria-label="creatives">

					<figure class="flow-ttb-mob flow-rtl-tab theme-white radius-mob border-b-mob">

						<div class="image-background our-students__two-students-playing-guitar width-40-tab accent-green"></div>

						<div class="pad-respond-x-mob pad-y-mob width-60-tab">

							<h3 class="text-r-tab">Our Students Are <span class="font-yellow">Creatives</span></h3>

							<p class="text-r-tab">The importance of creative talents in the fields of drama, music and art can be as important to whole-child development as any academic pursuit. While EduInc does not offer formal arts subjects at FET level, we do accomodate young musicians, actors, models and artists who need to juggle gruelling audition, rehearsal, performance and competition schedules with a full academic programme. Our dedicated staff is always willing to assist these students attain their goals on stage, in studio and in the classroom.</p>

						</div>

					</figure>

				</a>

				<!--
				Item: Entrepreneurs
				-->

				<a class="width-100-mob" href="entrepreneurs.php" aria-label="entrepreneurs">

					<figure class="flow-ttb-mob flow-ltr-tab theme-white radius-mob border-b-mob">

						<div class="image-background our-students__boy-sitting-with-notebook width-40-tab accent-purple"></div>

						<div class="pad-respond-x-mob pad-y-mob width-60-tab">

							<h3 class="text-l-tab">Our Students Are <span class="font-purple">Entrepreneurs</span></h3>

							<p class="text-l-tab">Students live in a world that is evolving and developing at an exponentially faster pace. Our focus is on critical thinking and the mastery of skills required to understand our changing world.</p>

						</div>

					</figure>

				</a>

				<!--
				Item: Sports achievers
				-->

				<a class="width-100-mob" href="sports-achievers.php" aria-label="sports achievers">

					<figure class="flow-ttb-mob flow-rtl-tab theme-white radius-mob border-b-mob">

						<div class="image-background our_students__girl-karate width-40-tab accent-red"></div>

						<div class="pad-respond-x-mob pad-y-mob width-60-tab">

							<h3 class="text-r-tab">Our Students Are <span class="font-green">Sports Achievers</span></h3>

							<p class="text-r-tab">EduInc is home to sports achievers who complete at both Provincial and National levels. These are students who are required to balance gruelling training and competition schedules with a full academic load. Our dedicated staff works to assist these students in attaining their both sporting and academic goals.</p>

						</div>

					</figure>

				</a>

				<!--
				Item: Individuals
				-->

				<a class="width-100-mob" href="individuals.php" aria-label="individuals">

					<figure class="flow-ttb-mob flow-ltr-tab theme-white radius-mob border-b-mob">

						<div class="image-background our-students__boy-reading-in-tree width-40-tab accent-blue"></div>

						<div class="pad-respond-x-mob pad-y-mob width-60-tab">

							<h3 class="text-l-tab">Our Students Are <span class="font-red">Individuals</span></h3>

							<p class="text-l-tab">We focus on creating an environment that recognises and nurtures the potential of each individual child through a mentored style of teaching, in very small classes, allowing them to identify their strengths in a supportive, collaborative environment.</p>

						</div>

					</figure>

				</a>

			</div>

		</section>

		<!--
		Houses
		-->

		<section class="pad-xy-mob theme-grey">

			<!--
			Section header
			-->

			<header class="constrain pad-y-mob">

				<h2 class="text-underline-red">School Houses</h2>

				<p>Each new student completes a questionnaire that determines which of four Houses, named for flying mythological creatures, they will be allocated to. They are then issued a pin to wear on their uniform to indicate their House.</p>

				<div class="footer">
					<a href="houses.php" aria-label="school houses"><button class="theme-blue" aria-label="button">Learn More</button></a>
				</div>

			</header>

			<!--
			Container
			-->

			<div class="flow-ttb-mob flow-ltr-tab constrain spread pad-y-mob align-s-tab">

				<!--
				Item: Griffin
				-->

				<figure class="flow-ttb-mob width-100-mob pad-double-t-mob pad-b-mob radius-mob theme-white border-mob accent-red shadow-mob">

					<div class="house__griffin-image"></div>

					<div class="house__griffin-name"></div>

					<div class="flex-grow pad-xy-mob">
						<p>Courage, Intelligence and Determination</p>
					</div>

				</figure>

				<!--
				Item: Dragon
				-->

				<figure class="flow-ttb-mob width-100-mob pad-double-t-mob pad-b-mob radius-mob theme-white border-mob accent-red shadow-mob">

					<div class="house__dragon-image"></div>

					<div class="house__dragon-name"></div>

					<div class="flex-grow pad-xy-mob">
						<p>Power, Wisdom and Protection</p>
					</div>

				</figure>

				<!--
				Item: Pegasus
				-->

				<figure class="flow-ttb-mob width-100-mob pad-double-t-mob pad-b-mob radius-mob theme-white border-mob accent-red shadow-mob">

					<div class="house__pegasus-image"></div>

					<div class="house__pegasus-name"></div>

					<div class="flex-grow pad-xy-mob">
						<p>Inspiration, Enlightenment and Loyalty</p>
					</div>

				</figure>

				<!--
				Item: Phoenix
				-->

				<figure class="flow-ttb-mob width-100-mob pad-double-t-mob pad-b-mob radius-mob theme-white border-mob accent-red shadow-mob">

					<div class="house__phoenix-image"></div>

					<div class="house__phoenix-name"></div>

					<div class="flex-grow pad-xy-mob">
						<p>Purity, Reason and Independence</p>
					</div>

				</figure>


			</div>

		</section>

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
