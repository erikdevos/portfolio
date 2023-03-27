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
							Over the course of my decade-long career, I have worked for various types of companies, gaining experience in a wide range of projects, including big SAAS initiatives, educational software, giant webshops, and agency work for large commercial clients. As a Front-end developer, I take pride in my deep knowledge of specific browser issues, and I do not rely on front-end frameworks or templates. I have worked with many different CMSs, from custom-built management systems to popular platforms like WordPress and Umbraco.
						</p>

						<p>
							In addition, my experience with PHP and SQL databases has given me a core understanding of back-end techniques, enabling me to edit and manage these systems without external assistance.</p>
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
				<div class="portfolio-intro" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">
					<p>My main task as a Front-end developer is translating a graphic design into clean and structured code that a Developer can start working with.</p>
					
					<p>These tasks include setting up the Git respository, setting up the project filestructure and then building the HTML and CSS/Sass. Finally, I bring the design to life through the use of Javascript/jQuery, CSS, and vector animations. After that I optimize the code for speed and search engines.</p>
					
					<p>These examples are primarily built from the ground up by me.</p>
				</div>
				
				<!-- Projects slider -->
				<div class="projects-slider" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" data-aos-offset="10">
					<ul>
						<li>
							<a href="https://www.juwelierburger.com" target="_blank" class="project-image">
								<img src="/resources/projects/juwelier-burger.webp" alt="Juwelier Burger screenshot" title="Juwelier Burger">
							</a>
							<h4 class="project-title">Juwelier Burger</h4>
							<p>This is one of the largest online retailers for pre-owned watches in the world. The high-end webshop boasts a plethora of animations and small user interactions, enhancing the user experience.</p>
						</li>
						<li>
							<a href="https://www.filipucci.nl" target="_blank" class="project-image">
								<img src="/resources/projects/filipucci.webp" alt="Filipucci Juweliers screenshot" title="Filipucci Juweliers">
							</a>
							<h4 class="project-title">Filipucci Juweliers</h4>
							<p>High-end jeweler with a custom webshop featuring plenty of unique animations and a strong focus on providing a top-notch user experience.
						</li>
						<li>
							<a href="https://www.banenrijklimburg.nl" target="_blank" class="project-image">
								<img src="/resources/projects/banenrijklimburg.webp" alt="Banenrijk Limburg screenshot" title="Banenrijk Limburg">
							</a>
							<h4 class="project-title">Banenrijk Limburg</h4>
							<p>Modern job-offer site with a focus on speed and animation to stand out from competitors.</p>
						</li>
						<li>
							<a href="https://www.vinciowonen.nl" target="_blank" class="project-image">
								<img src="/resources/projects/vincio-wonen.webp" alt="Vinciowonen screenshot" title="Vincio wonen">
							</a>
							<h4 class="project-title">Vincio Wonen</h4>
							<p>Local housing foundation. Our aim was to make complex information easy to access for a wide range of visitors.</p>
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
							<p>Global eyewear brand with a unique design approach based on their visual identity.</p>
						</li>
						<li>
							<a href="https://www.sad.be" target="_blank" class="project-image">
								<img src="/resources/projects/sad.webp" alt="SAD screenshot" title="SAD.be">
							</a>
							<h4 class="project-title">SAD - Sint-Annendael</h4>
							<p>Mental and geriatric care provider with a clear and structured website for easy access to information.</p>
						</li>

						<li>
							<a href="https://www.pouderoyentonnaer.nl/" target="_blank" class="project-image">
								<img src="/resources/projects/pouton.webp" alt="Pouderoyen Tonnaer" title="Pouderoyen Tonnaer">
							</a>
							<h4 class="project-title">Pouderoyen Tonnaer</h4>
							<p>Environmental and city planning, environment and law. Animations and a fresh style make it fresh.</p>
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

		<!-- Footer -->
		<?php include('inc/footer.php'); ?>


	</div>

	<?php include('inc/footer-scripting.php'); ?>

	<!-- Hi! :) -->
</body>

</html>