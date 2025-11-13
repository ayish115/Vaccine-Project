<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title> VaxPortal</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!--? Preloader Start -->
	<div id="preloader-active">
		<div class="preloader d-flex align-items-center justify-content-center">
			<div class="preloader-inner position-relative">
				<div class="preloader-circle"></div>
				<div class="preloader-img pere-text">
					<img src="assets/img/logo/Blue Minimalist Medical Logo dd.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- Preloader Start -->
	<header>
		<!--? Header Start -->
		<div class="header-area">
			<div class="main-header header-sticky">
				<div class="container-fluid">
					<div class="row align-items-center">
						<!-- Logo -->
						<div class="col-xl-2 col-lg-2 col-md-1">
							<div class="logo">
								<a href="index.php"><img src="assets/img/logo/Blue Minimalist Medical Logo dd.png" alt=""></a>
							</div>
						</div>
						<div class="col-xl-10 col-lg-10 col-md-10">
							<div class="menu-main d-flex align-items-center justify-content-end">
								<a href="app.php" class="btn btn-primary">Appointment</a>
								<!-- Main-menu -->
								<div class="main-menu f-right d-none d-lg-block">
									<nav>
										<ul id="navigation">
											<li><a href="index.php">Home</a></li>

											<!-- <li><a href="doctor.html">Doctors</a></li> -->
											<!-- <li><a href="department.html">Department</a></li> -->
											<li><a>Information</a>
												<ul class="submenu">
													<li><a href="Hospital1.php">Hospital</a></li>
													<!-- <li><a href="blog_details.html"></a></li> -->
													<li><a href="vaccine.php">Vaccine</a></li>
												</ul>
											</li>
											<!-- <li><a href="about.html">About</a></li> -->
											<!-- <li><a href="contact.html">Contact</a></li> -->
										</ul>
									</nav>
								</div>
								<div class="header-right-btn f-right d-none d-lg-block ml-30">
                                     <?php
                                    if(isset($_SESSION['Pemail']) != "" || isset($_SESSION['Ademail']) != null) {?>
                                        <a href="logout.php" class="btn header-btn">logout</a> 
                                    <?php } else { ?> 
                                        <a href="home.php" class="btn header-btn">login</a>
                                    <?php } ?>
                                
                                </div>
							</div>
						</div>
						<!-- Mobile Menu -->
						<div class="col-12">
							<div class="mobile_menu d-block d-lg-none"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>
	<main>
		<!--? Hero Start -->
		<div class="slider-area2">
			<div class="slider-height2 d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="hero-cap hero-cap2 text-center">
								<h2>Vaccine</h2>
								<h1>
									<?php if (!empty($_SESSION['name'])) { ?>
										<span>Hello <?php echo $_SESSION['Pname']; ?></span>
									<?php } else { ?>
										<span>Hello <?php echo isset($_SESSION['Pname']); ?></span>
									<?php } ?>
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero End -->
		<!-- Start Sample Area -->
		<section class="sample-text-area">
			<div class="container box_1170">
				<h3 class="text-heading">Resilience in the Face of Crisis: Lessons from the COVID-19 Pandemic</h3>
				<p class="sample-text">
					The importance of vaccines is underscored during pandemics, as they serve as a critical tool in controlling the spread of infectious agents. The development and distribution of vaccines against diseases like COVID-19 highlight their role in mitigating the impact of global health crises. Overall, vaccines represent a cornerstone of preventive medicine, contributing significantly to the overall health and well-being of individuals and communities worldwide....
				</p>
			</div>
		</section>
		<!-- End Sample Area -->
		<!-- Start Button -->
		<section class="button-area">
			<div class="container box_1170 border-top-generic">
				<h3 class="text-heading">Vaccines Links</h3>
				<div class="button-group-area">
					<!-- <a  href="#" class="genric-btn default"></a> -->
					<a href="https://www.cdc.gov/vaccines/hcp/vis/vis-statements/dtap.html#:~:text=DTaP%20vaccine%20can%20prevent%20diphtheria,failure%2C%20paralysis%2C%20or%20death." class="genric-btn primary">DTaP</a>
					<a href="https://www.who.int/teams/health-product-policy-and-standards/standards-and-specifications/vaccines-quality/measles-mumps-and-rubella-(mmr)#:~:text=Combined%20live%20vaccine%20for%20measles,advantages%20over%20the%20individual%20vaccines." class="genric-btn success">MMR</a>
					<a href="https://www.endpolio.com.pk/certificate/vaccination-certificate" class="genric-btn info">Polio</a>
					<a href="https://www.hepb.org/prevention-and-diagnosis/vaccination/" class="genric-btn warning">Hepatitis B</a>
					<a href="https://kidshealth.org/en/parents/rotavirus-vaccine.html#:~:text=Rotavirus%20Immunization%20Schedule,weakened%20form%20of%20the%20virus." class="genric-btn danger">Rotavirus</a>
					<!-- <a href="#" class="genric-btn link">Links</a> -->
					<!-- <a href="#" class="genric-btn disable">Disable</a> -->
				</div>
				<div class="button-group-area mt-10">
					<!-- <a href="#" class="genric-btn default-border">Default</a> -->
					<a href="https://www.who.int/teams/global-influenza-programme/vaccines" class="genric-btn primary-border">Influenza</a>
					<a href="https://www.cdc.gov/vaccines/vpd/pneumo/public/index.html" class="genric-btn success-border">PCV13</a>
					<a href="https://www.cdc.gov/vaccines/hcp/vis/vis-statements/hib.html" class="genric-btn info-border">Hib</a>
					<a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" class="genric-btn warning-border">Covid19</a>
					<a href="https://www.cdc.gov/vaccines/vpd/varicella/public/index.html" class="genric-btn danger-border">Varicella</a>
					<!-- <a href="#" class="genric-btn link-border">Links</a> -->
					<!-- <a href="#" class="genric-btn disable">Disable</a> -->
				</div>
				<div class="button-group-area mt-10">
					<!-- <a  href="#" class="genric-btn default"></a> -->
					<a href="https://polioeradication.org/polio-today/polio-prevention/the-vaccines/ipv/#:~:text=Inactivated%20polio%20vaccine%20(IPV)%20was,by%20a%20trained%20health%20worker." class="genric-btn primary">IPV</a>
					<a href="https://www.webmd.com/children/vaccines/rotavirus-rv-vaccine" class="genric-btn success">RV</a>
					<a href="https://epi.gov.pk/vaccine-preventable-diseases/meningitis/" class="genric-btn info">Meningococcal</a>
					<a href="https://www.nhs.uk/conditions/vaccinations/meningitis-b-vaccine/" class="genric-btn warning">MenB</a>
					<a href="https://kidshealth.org/en/parents/rotavirus-vaccine.html#:~:text=Rotavirus%20Immunization%20Schedule,weakened%20form%20of%20the%20virus." class="genric-btn danger">RotaTeq</a>
					<!-- <a href="#" class="genric-btn link">Links</a> -->
					<!-- <a href="#" class="genric-btn disable">Disable</a> -->
				</div>
				<div class="button-group-area mt-10">
					<!-- <a href="#" class="genric-btn default-border">Default</a> -->
					<a href="https://www.meningitisnow.org/meningitis-explained/meningitis-vaccines/faqs-on-menacwy-vaccine/" class="genric-btn primary-border">MenACWY</a>
					<a href="https://www.healthychildren.org/English/safety-prevention/immunizations/Pages/Japanese-Encephalitis-Vaccine-What-You-Need-to-Know.aspx" class="genric-btn success-border">JE</a>
					<a href="https://www.ncbi.nlm.nih.gov/books/NBK538185/" class="genric-btn info-border">BCG</a>
					<a href="https://phw.nhs.wales/topics/immunisation-and-vaccines/vaccination-information1/tetanus-diphtheria-and-polio/#:~:text=Tetanus%2C%20diphtheria%20and%20polio%20(Td%2FIPV%20or%203%2D,%3A%20tetanus%2C%20diphtheria%20and%20polio." class="genric-btn warning-border">Tetanus Diphtheria</a>
					<a href="https://phw.nhs.wales/topics/immunisation-and-vaccines/vaccination-information1/tetanus-diphtheria-and-polio/#:~:text=Tetanus%2C%20diphtheria%20and%20polio%20(Td%2FIPV%20or%203%2D,%3A%20tetanus%2C%20diphtheria%20and%20polio." class="genric-btn danger-border">Td</a>
					<!-- <a href="#" class="genric-btn link-border">Links</a> -->
					<!-- <a href="#" class="genric-btn disable">Disable</a> -->
				</div>
				<div class="button-group-area mt-10">
					<!-- <a  href="#" class="genric-btn default"></a> -->
					<a href="https://www.sanofiflu.com/flublok-quadrivalent-influenza-vaccine/" class="genric-btn primary">Flublok</a>
					<a href="https://www.google.com/search?q=yf-vax+vaccine&rlz=1C1UEAD_en-GBPK1083PK1083&oq=YF-Vax+&gs_lcrp=EgZjaHJvbWUqDAgBEAAYFBiHAhiABDIGCAAQRRg5MgwIARAAGBQYhwIYgAQyBwgCEAAYgAQyBwgDEAAYgAQyBwgEEAAYgAQyBwgFEAAYgAQyBwgGEAAYgAQyBwgHEAAYgAQyBwgIEAAYgAQyBwgJEAAYgATSAQgxNTg2ajBqNKgCALACAA&sourceid=chrome&ie=UTF-8" class="genric-btn success">YF-Vax</a>
					<a href="https://www.fluad.ca/patient/en/index.html" class="genric-btn info">Fluad</a>
					<a href="https://gskpro.com/en-us/products/havrix/" class="genric-btn warning">Havrix</a>
					<a href="https://www.canada.ca/en/public-health/services/publications/healthy-living/statement-rotavirus-vaccines-intussusception.html" class="genric-btn danger">RotaShield</a>
					<!-- <a href="#" class="genric-btn link">Links</a> -->
					<!-- <a href="#" class="genric-btn disable">Disable</a> -->
				</div>
				<div class="button-group-area mt-10">
					<!-- <a href="#" class="genric-btn default-border">Default</a> -->
					<a href="https://www.twinrix.ca/en-ca/index.html" class="genric-btn primary-border">Twinrix</a>
					<a href="https://gskpro.com/en-us/products/havrix/" class="genric-btn success-border">Havrix</a>
					<a href="#" class="genric-btn info-border">Shanchol</a>
					<a href="https://pubmed.ncbi.nlm.nih.gov/36516078/" class="genric-btn warning-border">ZapRota</a>
					<a href="https://www.emro.who.int/pak/programmes/expanded-programme-on-immunization.html" class="genric-btn danger-border">Acela</a>
					<!-- <a href="#" class="genric-btn link-border">Links</a> -->
					<!-- <a href="#" class="genric-btn disable">Disable</a> -->
				</div>
			</div>
		</section>
		<!-- End Button -->
		<!-- Start Align Area -->
		<div class="whole-wrap">
			<div class="container box_1170">
				<div class="section-top-border">
					<h3 class="mb-30 text-info">Pneumococcal Conjugate
						Vaccine:</h3>
					<div class="row">
						<div class="col-md-3">
							<img src="assets/img/elements/vaccine-po.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-9 mt-sm-20">
							<p>The Pneumococcal Conjugate Vaccine (PCV) is a crucial immunization tool in the fight against diseases caused by Streptococcus pneumoniae. Administered primarily to infants and young children, the vaccine provides protection against pneumonia, meningitis, and bloodstream infections. PCV is a conjugate vaccine, blending a fragment of the bacterial capsule with a carrier protein to stimulate a robust immune response. The dosing schedule typically involves multiple doses to ensure comprehensive immunity. By targeting specific serotypes of Streptococcus pneumoniae, the vaccine not only shields the individual but also aids in reducing the transmission of the bacteria within communities. The vaccine's safety is ensured through rigorous testing, contributing to its global impact in significantly lowering the incidence of pneumococcal diseases. As part of routine childhood vaccinations, PCV plays a vital role in preventing severe infections and fostering herd immunity, ultimately enhancing public health outcomes on a global scale.</p>
						</div>
					</div>
				</div>
				<div class="section-top-border text-right">
					<h3 class="mb-30 text-primary">Haemophilus Influenzae Type b (Hib) VIS</h3>
					<div class="row">
						<div class="col-md-9">
							<p class="text-right">The Haemophilus influenzae Type b (Hib) vaccine is a critical immunization tool that protects against infections caused by the bacterium Haemophilus influenzae Type b. Administered primarily to infants and young children, the vaccine is instrumental in preventing severe diseases such as meningitis, pneumonia, and other invasive infections caused by Hib. The vaccine is typically given as part of routine childhood vaccinations and is highly effective in reducing the incidence of Hib-related illnesses. Hib vaccine works by prompting the immune system to recognize and combat the bacterium, thus providing long-lasting immunity. The dosing schedule usually involves multiple doses to ensure optimal protection. Thanks to widespread vaccination efforts, the incidence of Hib-related diseases has significantly decreased, contributing to improved public health outcomes globally. The vaccine's safety has been extensively studied and confirmed, making it a reliable and essential component of childhood immunization programs. Consultation with healthcare professionals is essential for personalized information on the Hib vaccine's recommendations and administration in specific regions.</p>
						</div>
						<div class="col-md-3">
							<img src="assets/img/elements/vaccine-h.jpg" alt="" class="img-fluid">
						</div>
					</div>
				</div>
				<div class="section-top-border">
					<h3 class="mb-30 text-primary">DTaP</h3>
					<div class="row">
						<div class="col-md-4">
							<div class="single-defination">
								<h4 class="mb-20 text-primary">Diphtheria</h4>
								<p>
									Diphtheria is a potentially serious bacterial infection caused by Corynebacterium diphtheriae, characterized by the formation of a thick, grayish membrane in the throat, which can lead to breathing difficulties. Vaccination, particularly with the DTaP vaccine.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-defination">
								<h4 class="mb-20 text-primary">Tetanus</h4>
								<p>Tetanus is a bacterial infection caused by the bacterium Clostridium tetani, leading to muscle stiffness and spasms. Prevention is primarily achieved through vaccination with the DTaP and Tdap vaccines, providing immunity against tetanus along with diphtheria and pertussis.</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-defination">
								<h4 class="mb-20 text-primary">Pertussis</h4>
								<p>Pertussis, commonly known as whooping cough, is a highly contagious respiratory infection caused by the bacterium Bordetella pertussis. Vaccination, particularly with the DTaP and Tdap vaccines, is essential for preventing pertussis and reducing the severity of symptoms</p>
							</div>
						</div>
					</div>
				</div>
				<div class="section-top-border">
					<h3 class="mb-30 text-primary">Block Quotes</h3>
					<div class="row">
						<div class="col-lg-12">
							<blockquote class="generic-blockquote">
								Vaccinating children is a vital step in safeguarding their health and well-being. Childhood vaccines, such as DTaP, MMR, and Hib, provide robust protection against serious diseases, ensuring a healthier future. By adhering to recommended immunization schedules, we not only shield individual children from preventable illnesses but also contribute to community-wide immunity, fostering a safer environment for everyone.
							</blockquote>
						</div>
					</div>
				</div>

				<div class="section-top-border">
					<h3 class="text-primary">Image Gallery</h3>
					<div class="row gallery-item">
						<div class="col-md-4">
							<a href="assets/img/elements/vcc.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/vcc.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/vcccc-3.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/vcccc-3.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/vccc-4.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/vccc-4.jpg);"></div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="assets/img/elements/g4.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/g4.jpg);"></div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="assets/img/elements/g5.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/g5.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/child-222.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/child-222.jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/child-33 (1).jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/child-33\ \(1\).jpg);"></div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/child-34.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/child-34.jpg);"></div>
							</a>
						</div>
					</div>
				</div>

				<!-- End Align Area -->
	</main>
	<footer>
		<!--? Footer Start-->
		<div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
			<div class="container">
				<div class="footer-top footer-padding">
					<div class="row d-flex justify-content-between">
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
							<div class="single-footer-caption mb-50">
								<!-- logo -->
								<div class="footer-logo">
									<a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
							<div class="single-footer-caption mb-50">
								<div class="footer-tittle">
									<h4>About Us</h4>
									<div class="footer-pera">
										<p class="info1">Explore the power of prevention on our vaccine website, where knowledge meets protection, and learn how vaccines are your first line of defense against preventable diseases.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
							<div class="single-footer-caption mb-50">
								<div class="footer-number mb-50">
									<h4><span>+92340 </span>2511161</h4>
									<p>vaccinationbookingsystem@gmail.com</p>
								</div>
								<!-- Form -->
								<div class="footer-form">
									<div id="mc_embed_signup">
										<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
											<input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
											<div class="form-icon">
												<button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
													Send
												</button>
											</div>
											<div class="mt-10 info"></div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Footer Social -->
				<div class="footer-social f-right">
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fas fa-globe"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
		<!-- Footer End-->
	</footer>
	<!-- Scroll Up -->
	<div id="back-top">
		<a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
	</div>

	<!-- JS here -->

	<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="./assets/js/popper.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<!-- Jquery Mobile Menu -->
	<script src="./assets/js/jquery.slicknav.min.js"></script>

	<!-- Jquery Slick , Owl-Carousel Plugins -->
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/slick.min.js"></script>
	<!-- One Page, Animated-HeadLin -->
	<script src="./assets/js/wow.min.js"></script>
	<script src="./assets/js/animated.headline.js"></script>
	<script src="./assets/js/jquery.magnific-popup.js"></script>

	<!-- Nice-select, sticky -->
	<script src="./assets/js/jquery.nice-select.min.js"></script>
	<script src="./assets/js/jquery.sticky.js"></script>

	<!-- contact js -->
	<script src="./assets/js/contact.js"></script>
	<script src="./assets/js/jquery.form.js"></script>
	<script src="./assets/js/jquery.validate.min.js"></script>
	<script src="./assets/js/mail-script.js"></script>
	<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

	<!-- Jquery Plugins, main Jquery -->
	<script src="./assets/js/plugins.js"></script>
	<script src="./assets/js/main.js"></script>

</body>

</html>