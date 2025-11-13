<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> VaxPortal </title>
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
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
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
                                                    <!-- <li><a href="blog_details.html">jjj</a></li> -->
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
                                <h2>Hospitals</h2>
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
        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/Child.jpg" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>12</h3>
                                        <p>Mar</p>
                                    </a>
                                </div>
                                <div class="blog_details">

                                    <h2 class="blog-head text-primary">Superheroes get their special powers from vaccines, just like you!</h2>

                                    <p>Tiny shots, big protection! Superhero vaccines keep you strong and healthy for all your amazing adventures ahead.</p>
                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/Child-2.jpg" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>20</h3>
                                        <p>Apr</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <h2 class="blog-head text-primary">Tiny vaccines, mighty protection – keeping little superheroes strong and healthy!</h2>
                                    </a>
                                    <p>Brave little ones, with a quick vaccine, you're building a shield of health that lasts a lifetime – superheroes in the making!</p>

                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/child-33.jpg" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <h2 class="blog-head text-primary">Empower your health journey and explore our vaccine website</h2>
                                    </a>
                                    <p>Step into a world of health resilience on our vaccine website, where knowledge meets protection, guiding you towards a safer and healthier tomorrow through the power of immunization.</p>
                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/child-44.jpg" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>May</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <h2 class="blog-head text-primary">Unlock health security with our vaccine website, bridging information and protection for a resilient future.</h2>
                                    </a>
                                    <p>Navigate your path to well-being with our vaccine website—a comprehensive guide to informed choices and proactive health protection.</p>
                                </div>
                            </article>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="assets/img/blog/child-34454.jpg" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>30</h3>
                                        <p>Dec</p>
                                    </a>
                                </div>
                                <div class="blog_details">

                                    <h2 class="blog-head text-primary">Immunize for a healthier future with our trusted resources.</h2>
                                    </a>
                                    <p>Your health guardian online – our vaccine website is your go-to source for expert insights, ensuring you make informed decisions for a healthier today and tomorrow.</p>
                                </div>
                            </article>
                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <!--================Blog Area =================-->
    </main> -->
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

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

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