<!doctype html>
<html lang="en">

<head>
	<?php include('inc/head.php'); ?>
</head>

<body>

	<div class="page-wrapper">

		<!-- Homepage header -->
		<section class="page-row-wrapper header-wrapper" style="background-image: url(resources/header/header-image.webp);">
			<div class="content-wrapper flex column align-center">

				<!-- Hero image -->
				<div class="content-wrapper header-content-wrapper column flex">
					<h1 data-aos="fade-in" data-aos-duration="7000" data-aos-delay="200">Erik de Vos</h1>

					<h2 data-aos="fade-in" data-aos-duration="7000" data-aos-delay="1000" >Front-end developer</h2>

					<div class="button-bar" data-aos="fade-in" data-aos-duration="7000" data-aos-delay="2000">
						<div class="cta-button scroll-link" id="scroll-about" onclick="javascript:$.scrollTo('#experience', 1000)">Experience <span class="arrow down">&rsaquo;</span></div> 
						<div class="cta-button scroll-link" id="scroll-projects" onclick="javascript:$.scrollTo('#projects', 1000)">Projects <span  class="arrow down">&rsaquo;</span></div>
					</div>

					<div class="header-icon">
						<?php include("resources/header-icon.svg"); ?>
					</div>
				</div>
			</div>
		</section>


		<!-- Page content -->
		<section class="page-row-wrapper main-content-section">
			<div class="anchor" id="experience"></div>

			<div class="content-wrapper column">

				<main class="flex row one margin-bottom-m">
					
					<div class="flex column one content-text margin-right-l margin-bottom-l" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">


						<h2>Experience</h2>
						<p>
							Working in various types of companies for over a decade i've seen it all; Big SAAS projects. Eductional software. Giant webshops. Agency work for big commercial clients.<br>
						</p>
						<p>
							As a Front-end developer I always pride myself in my deep knowledge of specific browsers issues. I don't rely on front-end frameworks or templates. I have also worked with many different CMSs through the years. From custom built management systems, to Wordpress or Umbraco.<br>
						</p>
						<p>
							Due to my experience working with PHP / MYSQL I have a working knowledge of Back-end techniques and am often able to both edit or manage these without outside help.
						</p>
					</div>	

					<div class="flex one align-start" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">
						<img src="resources/device.webp" alt="">
					</div>


				</main>

				<main class="flex row mobile-reverse one">
					<div class="flex one align-start margin-right-l" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">
						<img src="resources/code.webp" alt="">
					</div>

					<div class="flex column one">

						<h2 class="dates-title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">Why me?</h3>

						<ul class="usps" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="50">
							<li>Deep Front-end knowledge</li>
							<li>Focus on User Experience (UX)</li>
							<li>Experienced in CSS animation and vector graphics (SVG)</li>
							<li>SEO and speed optimization</li>
							<li>Great at working with both Desigers and Technical people</li>
							<li>Great at working with product owners and stakeholders</li>
							<li>Great at client communication; recieving feedback, delivering a product, training users</li>
							<li>Experience with working in an Agile environment and trained to work with Scrum.</li>
							<li>I'm fun to work with :)</li>
						</ul>

					</div>

				</main>

			</div>
		</section>


		<section class="page-row-wrapper portfolio-section">
			<div class="anchor" id="projects"></div>

			<div class="content-wrapper column">
				<h2 data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">Projects</h2>
				<h3 data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">Products i've worked on, whenever possible built from the ground up.</h3>
				<div class="projects-slider" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">
					<ul>
						<li>
							<a href="https://www.juwelierburger.com" target="_blank" class="project-image">
								<img src="/resources/projects/juwelier-burger.webp" alt="Juwelier Burger screenshot" title="Juwelier Burger">
							</a>
							<h4 class="project-title">Juwelier Burger</h4>
							<p>One of the biggest online used watch sellers in the world. High-end webshop with lots of custom animation and small user-interactions</p>
						</li>
						<li>
							<a href="https://www.filipucci.nl" target="_blank" class="project-image">
								<img src="/resources/projects/filipucci.webp" alt="Filipucci Juweliers screenshot" title="Filipucci Juweliers">
							</a>
							<h4 class="project-title">Filipucci Juweliers</h4>
							<p>High end juweler. Custom webshop with plenty of custom animations and a focus on the user-experiece
						</li>
						<li>
							<a href="https://www.banenrijklimburg.nl" target="_blank" class="project-image">
								<img src="/resources/projects/banenrijklimburg.webp" alt="Banenrijk Limburg screenshot" title="Banenrijk Limburg">
							</a>
							<h4 class="project-title">Banenrijk Limburg</h4>
							<p>Job-offer site. Fresh modern look to differenciate from the competition. High focus on speed and animation</p>
						</li>
						<li>
							<a href="https://www.vinciowonen.nl" target="_blank" class="project-image">
								<img src="/resources/projects/vincio-wonen.webp" alt="Vinciowonen screenshot" title="Vincio wonen">
							</a>
							<h4 class="project-title">Vincio Wonen</h4>
							<p>Local housing foundation. The goal was to make complex information as accessable as possible for a wide array of visitors.</p>
						</li>
						<li>
							<a href="https://www.tegek.be" target="_blank" class="project-image">
								<img src="/resources/projects/tegek.webp" alt="TeGek!? screenshot" title="TeGek!?">
							</a>
							<h4 class="project-title">Tegek!?</h4>
							<p>Mental health campaign by the Belgium government. Unique design with a focus on discovery.</p>
						</li>
						<li>
							<a href="https://www.odettelunettes.com" target="_blank" class="project-image">
								<img src="/resources/projects/odette-lunettes.webp" alt="Odette Lunettes screenshot" title="Odette Lunettes">
							</a>
							<h4 class="project-title">Odette Lunettes</h4>
							<p>Fashion brand focussed on Optical and Sunglasses. Unique design based on the clients visual identity</p>
						</li>
						<li>
							<a href="https://www.sad.be" target="_blank" class="project-image">
								<img src="/resources/projects/sad.webp" alt="SAD screenshot" title="SAD.be">
							</a>
							<h4 class="project-title">SAD - Sint-Annendael</h4>
							<p>Mental and gereatric care. Focus on delivering a lot of content in a clear and structured way.</p>
						</li>

						<li>
							<a href="https://www.pouderoyentonnaer.nl/" target="_blank" class="project-image">
								<img src="/resources/projects/pouton.webp" alt="Pouderoyen Tonnaer" title="Pouderoyen Tonnaer">
							</a>
							<h4 class="project-title">Pouderoyen Tonnaer</h4>
							<p>Environmental and city planning, environment and law. How can we make this look fresh? We tried!</p>
						</li>


						<li>
							<a href="https://www.lortyeshop.eu/" target="_blank" class="project-image">
								<img src="/resources/projects/lortye.webp" alt="L'Ortye shop" title="L'Ortye shop">
							</a>
							<h4 class="project-title">L'Ortye shop</h4>
							<p>Why call or e-mail when you can order your containers or materials directly from the website?</p>
						</li>
						

						<li>
							<a href="https://youlearn.ou.nl/web/guest/welkom" target="_blank" class="project-image">
								<img src="/resources/projects/youlearn.webp" alt="yOUlearn" title="yOUlearn">
							</a>
							<h4 class="project-title">yOUlearn (2016)</h4>
							<p>Remote learning for the Open University. I've worked on this project's ongoing development improving usability for the experience.</p>
						</li>

						<li>
							<a href="https://www.greenhousegroup.com/en" target="_blank" class="project-image">
								<img src="/resources/projects/bannerconnect.webp" alt="Bannerconnect" title="Bannerconnect">
							</a>
							<h4 class="project-title">CAPPS (2014)</h4>
							<p>Various projects for Bannerconnect (Now called Greenhouse). Data visualisation, graphic design, UX design.</p>
						</li>
					</ul>

					<div class="button-bar">
						<div class="cta-button paging-next">Next <span class="arrow right">›</span></div>
					</div>
				</div>


			</div>
		</section>

		<!-- Main Footer -->
		<section class="page-row-wrapper main-footer-section">
			<footer class="content-wrapper column">
				<div class="footer-content">
				<?php echo date("Y"); ?> | Erik de Vos
				</div>
				
			</footer>

		</section>


	</div>

	<?php include('inc/footer-scripting.php'); ?>


</body>

</html>