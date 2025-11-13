<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> VaxPortal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/loder.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- ? Preloader Start -->
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
                                <a href="index.html"><img src="assets/img/logo/Blue Minimalist Medical Logo dd.png" alt=""></a>
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
                                            <!-- <li><a  href="about.html">About</a></li> -->
                                            <!-- <li><a href="contact.html">Contact</a></li/> -->
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
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1>
                                        <?php if (!empty($_SESSION['Pname'])) { ?>
                                            <span>Hello <?php echo $_SESSION['Pname']; ?></span>
                                        <?php } else { ?>
                                            <span>Hello <?php echo isset($_SESSION['Pname']); ?></span>
                                        <?php } ?>
                                    </h1>
                                    <span>Committed to success</span>
                                    <h1 class="cd-headline letters scale">We care about your
                                        <strong class="cd-words-wrapper">
                                            <b class="is-visible">Children</b>
                                            <b>health</b>
                                            <!-- <b>ste</b> -->
                                        </strong>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay="0.1s">Protecting childhood with life-saving vaccines, one shot at a time</p>
                                    <a href="app.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1>
                                        <?php if (!empty($_SESSION['Pname'])){ ?>
                                            <span">Hello <?php echo $_SESSION['Pname'];?></span>
                                            <?php } else { ?>
                                                <span">Hello <?php echo isset($_SESSION['Pname']); ?></span>
                                                <?php } ?>
                                    </h1>
                                    <span>Committed to success</span>
                                    <h1 class="cd-headline letters scale">We care about your
                                        <strong class="cd-words-wrapper">
                                            <b class="is-visible">Children</b>
                                            <b>health</b>
                                            <!-- <b>steak</b> -->
                                        </strong>
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay="0.1s">Guarding children's health through essential immunizations, a dose of protection for life.</p>
                                    <a href="app.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Start-->
        <div class="about-area section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2 mb-35">
                                <span>About Our Company</span>
                                <h2>Welcome To Our Site</h2>
                            </div>
                            <p>Vaccines are a critical tool in safeguarding public health and preventing the spread of infectious diseases. They work by stimulating the immune system to create a defense against specific pathogens, such as viruses or bacteria, without causing the disease itself. By getting vaccinated, you not only protect yourself but also contribute to the collective immunity of your community, reducing the risk of outbreaks.</p>
                            <div class="about-btn1 mb-30">
                                <!-- <a href="about.html" class="btn about-btn">Find Doctors .<i class="ti-arrow-right"></i></a>
                        </div>
                        <div class="about-btn1 mb-30"> -->
                                <a href="app.php" class="btn about-btn2 mt-8">Appointment <i class="ti-arrow-right"></i></a>
                            </div>
                            <!-- <div class="about-btn1 mb-30">
                            <a href="about.html" class="btn about-btn2">Emargency 1 <i class="ti-arrow-right"></i></a>
                        </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <div class="about-font-img d-none d-lg-block">
                                <img src="assets/img/gallery/inect.jpg" alt="">
                            </div>
                            <div class="about-back-img ">
                                <img src="assets/img/gallery/dhd.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About  End-->
        <!--? department_area_start  -->
        <div class="department_area section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-100">
                            <span>Our Departments</span>
                            <h2>Our Medical Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="depart_ment_tab mb-30">
                            <!-- Tabs Buttons -->
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                        <!-- <i class="flaticon-tong"></i> -->
                                        <h4>DTaP</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                        <!-- <i class="flaticon-cardiovascular"></i> -->
                                        <h4>MMR</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                        <!-- <i class="flaticon-ear"></i> -->
                                        <h4>Polio</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Astrology-tab" data-toggle="tab" href="#Astrology" role="tab" aria-controls="contact" aria-selected="false">
                                        <!-- <i class="flaticon-bone"></i> -->
                                        <h4>Hepatitis B</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Neuroanatomy-tab" data-toggle="tab" href="#Neuroanatomy" role="tab" aria-controls="contact" aria-selected="false">
                                        <!-- <i class="flaticon-lung"></i> -->
                                        <h4>Rotavirus</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Blood-tab" data-toggle="tab" href="#Blood" role="tab" aria-controls="contact" aria-selected="false">
                                        <!-- <i class="flaticon-cell"></i> -->
                                        <h4>Influenza</h4>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dept_main_info white-bg">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Diphtheria, Tetanus, and Pertussis vaccine Childhood vaccine against three diseases.</h3>
                                        <p>DTaP is a combination vaccine that protects children from diphtheria, tetanus, and pertussis.Triple Disease Protection Vaccine</p>
                                        <a href="app.php" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/WhatsApp Image 2023-11-09 at 8.53.07 PM (1).jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>MMR vaccine protects against measles, mumps, and rubella, promoting public health.</h3>
                                        <p>MMR vaccine prevents measles, mumps, and rubella, ensuring community immunity and safety.Measles, mumps, rubella prevention.</p>
                                        <a href="app.php" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/injec-3 (2).jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Shielding futures with the Polio vaccine, eradicating risks worldwide.</h3>
                                        <p>Polio vaccine: A global guardian against preventable suffering. Embrace immunity, break the chain, secure a healthy tomorrow.Polio vaccine: Uniting communities in a world free from paralysis. Every dose, a step towards a safer,</p>
                                        <a href="app.php" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/vaccine-po.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="Astrology" role="tabpanel" aria-labelledby="Astrology-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Fortify your health against Hepatitis B, ensuring lasting protection. Guardian of Health</h3>
                                        <p>Empower your health defense with the Hepatitis B vaccine, a guardian against liver diseases, securing a resilient future Inoculate against Hepatitis B, fortifying wellness for a lifetime.</p>
                                        <a href="app.php" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/Botox Injectables (2).jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="Neuroanatomy" role="tabpanel" aria-labelledby="Neuroanatomy-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Defend their smiles with the Rotavirus vaccine, shielding joy from preventable woes.</h3>
                                        <p>Rotavirus vaccine: A shield against childhood gastroenteritis, preserving laughter's purity. Protecting giggles, Rotavirus vaccine ensures a healthy, happy journey. </p>
                                        <a href="app.php" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/jjjjj.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="Blood" role="tabpanel" aria-labelledby="Blood-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Embrace wellness with the Influenza vaccine, safeguarding seasons of health.</h3>
                                        <p>Shielding communities, the Influenza vaccine fortifies against seasonal uncertainties Influenza vaccine: A yearly armor against flu's unwelcome arrival, ensuring well-being prevails.</p>
                                        <a href="app.php" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/ggg.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- depertment area end  -->
        <!--? Gallery Area Start -->
        <div class="gallery-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center mb-100">
                            <span>Our Gellary</span>
                            <h2>Our Vaccine</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Left -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/Cosmetology\ Photos\,\ Download\ The\ BEST\ Free\ Cosmetology\ Stock\ Photos\ &\ HD\ Images\ \(1\).jpg);"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/Premium\ Photo\ _\ Beautiful\ female\ pediatrician\ doctor\ examining\ child\ with\ teddy\ bear\ in\ office\ \(1\).jpg);"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/How\ Old\ is\ Too\ Old\ to\ Go\ to\ the\ Pediatrician_\ \(1\).jpg);"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/ddd.jpg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? All startups Start -->
        <div class="all-starups-area testimonial-area fix">
            <!-- left Contents -->
            <div class="starups">
                <!--? Testimonial Start -->
                <div class="h1-testimonial-active">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <!-- Testimonial Content -->
                        <div class="testimonial-caption ">
                            <div class="testimonial-top-cap">
                                <img src="assets/img/gallery/testimonial.png" alt="">
                                <p>Welcome to our cutting-edge vaccine booking system, where securing your immunization is just a click away. Our user-friendly platform simplifies the process, allowing you to schedule vaccinations with ease and convenience. Join us in prioritizing health — because your well-being is our top priority. Book your vaccines effortlessly and stay protected!</p>
                            </div>
                            <!-- founder -->
                            <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                <div class="founder-img">
                                    <img src="assets/img/gallery/Homepage_testi.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial End -->
            </div>
            <!--Right Contents  -->
            <div class="starups-img"></div>
        </div>
        <!--All startups End -->
        <!--? Team Start -->
        <div class="team-area section-padding30">
            <!-- Team End -->
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

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
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