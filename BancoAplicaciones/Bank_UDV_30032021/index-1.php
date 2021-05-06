<!DOCTYPE html>
<html lang="en">

<!-- TO LOGOUT THE USER

<?php

session_start();

$email=$_SESSION['username'];

if(isset($_POST['logout'])){

    session_destroy();
    echo '<script language="javascript">alert("Logout in process...");</script>';
    header('Location:index-1.php');
}

?>

-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>== UDV Bank ==</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicons\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicons\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicons\favicon-16x16.png">
    <link rel="manifest" href="assets\images\favicons\site.webmanifest">
    <script type = "text/javascript" src="apirest.js"></script>  
    <meta name="description" content="Pylon Loan HTML Template">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\fontawesome-all.min.css">
    <link rel="stylesheet" href="assets\css\swiper.min.css">
    <link rel="stylesheet" href="assets\css\animate.min.css">
    <link rel="stylesheet" href="assets\css\pylon-icons.css">
    <link rel="stylesheet" href="assets\css\odometer.min.css">
    <link rel="stylesheet" href="assets\css\magnific-popup.css">
    <link rel="stylesheet" href="assets\css\bootstrap-select.min.css">
    <link rel="stylesheet" href="assets\css\nouislider.min.css">
    <link rel="stylesheet" href="assets\css\nouislider.pips.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets\css\main.css">
</head>

<input type = "button" onclick = "firstExample()" value = "1st Function">
<input type = "button" onclick = "searchByDPI()" value = "Get by DPI">    

<h1>Welcome, <?php echo $email; ?></h1>

<body>
    <div class="preloader">
        <img class="preloader__image" src="assets\images\loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <form method="post"><input type="submit" name="logout"value="Logout"/>
                        <a href="#">Company News</a>
                        <a href="#">FAQs</a>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="#"><i class="pylon-icon-email1"></i>needhelp@company.com</a>
                        <a href="#"><i class="pylon-icon-clock2"></i>Mon - Sat 8:00 AM - 6:00 PM</a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="index-1.php" aria-label="logo image"><img src="assets\images\UDV_Bank.JPG" width="155" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="index-1.php">Home</a>
                            <ul>
                                <li>
                                    <a href="index-1.php">Home One</a>
                                </li>
                                <li><a href="index-1.php">Home Two</a></li>
                                <li class="dropdown">
                                    <a href="#">Header Styles</a>
                                    <ul>
                                        <li><a href="index-1.php">Header One</a></li>
                                        <li><a href="index-1.php">Header Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="about.php">About</a>
                            <ul>
                                <li><a href="team.php">Team</a></li>
                                <li><a href="team-details.php">Team Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="services.php">Services</a>
                            <ul>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="service-details.php">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="news.php">News</a>
                            <ul>
                                <li><a href="news.php">News</a></li>
                                <li><a href="news-details.php">News Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Pages</a>
                            <ul>
                                <li><a href="how-it-works.php">How It Works</a></li>
                                <li><a href="loan-calculator.php">Loan Calculator</a></li>
                                <li class="dropdown">
                                    <a href="credit-card.php">Credit Card</a>
                                    <ul>
                                        <li><a href="credit-card.php">Credit Card</a></li>
                                        <li><a href="credit-card-details.php">Credit Card Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="search-btn search-toggler">
                            <a href="#"><i class="pylon-icon-magnifying-glass"></i></a>
                        </li>
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        <div class="main-header__info-phone">
                            <i class="pylon-icon-tech-support"></i>
                            <div class="main-header__info-phone-content">
                                <span>Call Anytime</span>
                                <h3><a href="tel:92-666-888-0000">92 666 888 0000</a></h3>
                            </div><!-- /.main-header__info-phone-content -->
                        </div><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <p>Simple & Secure Payment Process</p>
                                    <h2>Connecting
                                        All Your Loan
                                        Needs</h2>
                                    <a href="#" class=" thm-btn">Apply For Loan</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-2.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <p>Simple & Secure Payment Process</p>
                                    <h2>Connecting
                                        All Your Loan
                                        Needs</h2>
                                    <a href="#" class=" thm-btn">Apply For Loan</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <p>Simple & Secure Payment Process</p>
                                    <h2>Connecting
                                        All Your Loan
                                        Needs</h2>
                                    <a href="#" class=" thm-btn">Apply For Loan</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="pylon-icon-left-arrow"></i></div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="pylon-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->

            </div><!-- /.swiper-container thm-swiper__slider -->
            <div class="feature-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="feature-two__box">
                                <i class="pylon-icon-consumer-behavior"></i>
                                <p>Quick Payment
                                    Process</p>
                            </div><!-- /.feature-two__box -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="feature-two__box">
                                <i class="pylon-icon-point-of-sale"></i>
                                <p>No Prepayment
                                    Fees</p>
                            </div><!-- /.feature-two__box -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.feature-two -->
        </section><!-- /.main-slider -->

        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <p>Company Introductions</p>
                                <h2>Our Loans will Fill Your Dreams</h2>
                            </div><!-- /.block-title -->
                            <p class="about-one__text">Lorem ipsum is simply dolor sit amet, consectetur adipisicing text elit.</p><!-- /.about-one__text -->
                            <p>There are many variations of passages of lorem ipsum available the majority have suffered alteration in some form by injected humour. Duis aute irure dolor lipsum is simply free text available in the local markets in reprehenderit.</p>
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div>
            </div>
        </section>

        <section class="service-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>What We’re Offering</p>
                    <h2>All Loans Services</h2>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="service-one__card">
                            <div class="service-one__image">
                                <img src="assets\images\services\services-1-1.png" alt="">
                            </div><!-- /.service-one__image -->
                            <div class="service-one__content">
                                <h3><a href="service-details.php">Personal Loan</a></h3>
                                <p>There are many variations of passages of lorem ipsum available the majority have some.</p>
                                <a href="service-details.php" class="pylon-icon-right-arrow service-one__link"></a><!-- /.service-one__link -->
                            </div><!-- /.service-one__content -->
                        </div><!-- /.service-one__card -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="service-one__card">
                            <div class="service-one__image">
                                <img src="assets\images\services\services-1-2.png" alt="">
                            </div><!-- /.service-one__image -->
                            <div class="service-one__content">
                                <h3><a href="service-details.php">Education Loan</a></h3>
                                <p>There are many variations of passages of lorem ipsum available the majority have some.</p>
                                <a href="service-details.php" class="pylon-icon-right-arrow service-one__link"></a><!-- /.service-one__link -->
                            </div><!-- /.service-one__content -->
                        </div><!-- /.service-one__card -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="service-one__card">
                            <div class="service-one__image">
                                <img src="assets\images\services\services-1-3.png" alt="">
                            </div><!-- /.service-one__image -->
                            <div class="service-one__content">
                                <h3><a href="service-details.php">Business Loan</a></h3>
                                <p>There are many variations of passages of lorem ipsum available the majority have some.</p>
                                <a href="service-details.php" class="pylon-icon-right-arrow service-one__link"></a><!-- /.service-one__link -->
                            </div><!-- /.service-one__content -->
                        </div><!-- /.service-one__card -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <section class="feature-one">
            <img src="assets\images\shapes\feature-shape-1-1.png" alt="" class="feature-one__shape-1">
            <img src="assets\images\shapes\feature-shape-1-2.png" alt="" class="feature-one__shape-2">
            <img src="assets\images\shapes\feature-shape-1-3.png" alt="" class="feature-one__shape-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block-title text-left">
                            <p>Get to Know About</p>
                            <h2>Flexible and Quick Business Loans</h2>
                        </div><!-- /.block-title -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <p class="block-text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words which don't look even slightly believable.</p><!-- /.block-text -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feature-one__box">
                            <i class="pylon-icon-assets"></i>
                            <p>Very Low Rates on
                                All Loans</p>
                        </div><!-- /.feature-one__box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="feature-one__box">
                            <i class="pylon-icon-verification"></i>
                            <p>99.9% Success Rate
                                Guarantee</p>
                        </div><!-- /.feature-one__box -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="feature-one__box">
                            <i class="pylon-icon-finance"></i>
                            <p>Flexible with Your
                                Repayments</p>
                        </div><!-- /.feature-one__box -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.feature-one -->

        <section class="trusted-company">
            <div class="trusted-company__bg" style="background-image: url(assets/images/shapes/trust-bg-1-1.png);"></div><!-- /.trusted-company__bg -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="trusted-company__content">
                            <div class="block-title text-left">
                                <p>Trusted Company</p>
                                <h2>Most of the People Trust on Us</h2>
                            </div><!-- /.block-title -->
                            <div class="trusted-company__image">
                                <img src="assets\images\resources\trust-1-1.png" alt="">
                                <p>There are many variations of passages of lorem ipsum available the majority have suffered alteration in some form by injected humour. Duis aute irure dolor lipsum is simply.</p>
                            </div><!-- /.trusted-company__image -->
                        </div><!-- /.trusted-company__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="trusted-company__box-wrap">
                            <div class="trusted-company__box">
                                <span>01</span>
                                <p>Solutions for small business
                                    and big companies</p>
                            </div><!-- /.trusted-company__box -->
                            <div class="trusted-company__box">
                                <span>02</span>
                                <p>Take our loans and pay for
                                    your studies</p>
                            </div><!-- /.trusted-company__box -->
                            <div class="trusted-company__box">
                                <span>03</span>
                                <p>Get special loans for more
                                    needs in 2 hours</p>
                            </div><!-- /.trusted-company__box -->
                        </div><!-- /.trusted-company__box-wrap -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.trusted-company -->

        <section class="funfact-one">
            <div class="funfact-one__bg" style="background-image: url(assets/images/backgrounds/funfact-bg-1-1.jpg);"></div><!-- /.funfact-one__bg -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact-one__box">
                            <h3><span class="odometer" data-count="99">00</span>%</h3>
                            <p>We Approve Loans</p>
                        </div><!-- /.funfact-one__box -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact-one__box">
                            <h3>$<span class="odometer" data-count="90">00</span>k</h3>
                            <p>Daily Payments</p>
                        </div><!-- /.funfact-one__box -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact-one__box">
                            <h3><span class="odometer" data-count="8900">00</span></h3>
                            <p>Happy Customers</p>
                        </div><!-- /.funfact-one__box -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                    <div class="col-md-6 col-lg-3">
                        <div class="funfact-one__box">
                            <h3><span class="odometer" data-count="346">00</span></h3>
                            <p>Staff Members</p>
                        </div><!-- /.funfact-one__box -->
                    </div><!-- /.col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->

        <section class="testimonials-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Customers Testimonials</p>
                    <h2>Customers Testimonials</h2>
                </div><!-- /.block-title -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{
        "spaceBetween": 0,
        "slidesPerView": 1,
        "slidesPerGroup": 1,
        "autoplay": {
            "delay": 5000
        },
        "pagination": {
            "el": ".testimonials-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "375": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "667": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "767": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "991": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "1199": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            }
        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-1.png" alt="">
                                    <h3>Clyde Williamson</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-2.png" alt="">
                                    <h3>Vernon Ray</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-3.png" alt="">
                                    <h3>Gary Dawson</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-1.png" alt="">
                                    <h3>Clyde Williamson</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-2.png" alt="">
                                    <h3>Vernon Ray</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-3.png" alt="">
                                    <h3>Gary Dawson</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-1.png" alt="">
                                    <h3>Clyde Williamson</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-2.png" alt="">
                                    <h3>Vernon Ray</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="testimonials-one__box">
                                <p><span>I was very impresed by the company service lore ipsum is simply free text used by copy typing refreshing. Neque porro est dolorem ipsum quia.</span></p>
                                <div class="testimonials-one__box-info">
                                    <img src="assets\images\resources\testimonials-1-3.png" alt="">
                                    <h3>Gary Dawson</h3>
                                    <span>Analytics</span>
                                </div><!-- /.testimonials-one__box-info -->
                            </div><!-- /.testimonials-one__box -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->

                    <div class="testimonials-one__swiper-pagination swiper-pagination"></div><!-- /.testimonials-one__swiper-pagination swiper-pagination -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

        <section class="why-choose">
            <img src="assets\images\shapes\why-choose-shape-1-1.png" class="why-choose__shape-1" alt="">
            <img src="assets\images\shapes\why-choose-shape-1-2.png" class="why-choose__shape-2" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="why-choose__image">
                            <p><i class="pylon-icon-investment"></i>26 years of working experience</p>
                            <img src="assets\images\resources\why-choose-1-1.png" alt="">
                        </div><!-- /.why-choose__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="why-choose__content">
                            <div class="block-title text-left">
                                <p>Our Benfits</p>
                                <h2>Why Choose Us?</h2>
                            </div><!-- /.block-title -->
                            <p>There are many variations of passages. Lorem Ipsum available, but the majority have suffered.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="why-choose__box">
                                        <h3><i class="fa fa-caret-right"></i>Professional Team</h3>
                                        <p>Lorem ipsum dolor sit is amet, consectetur notted.</p>
                                    </div><!-- /.why-choose__box -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="why-choose__box">
                                        <h3><i class="fa fa-caret-right"></i>Quick Payments</h3>
                                        <p>Lorem ipsum dolor sit is amet, consectetur notted.</p>
                                    </div><!-- /.why-choose__box -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="why-choose__progress">
                                <div class="why-choose__progress-top">
                                    <h3>Loan Process</h3>
                                    <span>90%</span>
                                </div><!-- /.why-choose__progress-top -->
                                <div class="why-choose__progress-bar">
                                    <span style="width: 90%" class="wow slideInLeft" data-wow-duration="1500ms"></span>
                                </div><!-- /.why-choose__progress-bar -->
                            </div><!-- /.why-choose__progress -->
                            <div class="why-choose__progress">
                                <div class="why-choose__progress-top">
                                    <h3>Consultancy</h3>
                                    <span>76%</span>
                                </div><!-- /.why-choose__progress-top -->
                                <div class="why-choose__progress-bar">
                                    <span style="width: 76%" class="wow slideInLeft" data-wow-duration="1500ms"></span>
                                </div><!-- /.why-choose__progress-bar -->
                            </div><!-- /.why-choose__progress -->

                        </div><!-- /.why-choose__content -->

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.why-choose -->

        <section class="blog-home pt-120 pb-90">
            <div class="container">
                <div class="block-title text-center">
                    <p>Directly From the Blog</p>
                    <h2>News & Articles</h2>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="blog-card">
                            <div class="blog-card__image">
                                <span>20 Sep</span>
                                <img src="assets\images\blog\blog-1-1.png" alt="">
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <a href="#"><i class="fa fa-tags"></i>Loan</a>
                                    <a href="#"><i class="fa fa-comments"></i>2 Comments</a>
                                </div><!-- /.blog-card__meta -->
                                <h3><a href="news-details.php">Changing & grow your business faster</a></h3>
                                <div class="blog-card__author">
                                    <img src="assets\images\blog\blog-author-1-1.png" alt="">Christine Eve
                                </div><!-- /.blog-card__author -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="blog-card">
                            <div class="blog-card__image">
                                <span>20 Sep</span>
                                <img src="assets\images\blog\blog-1-2.png" alt="">
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <a href="#"><i class="fa fa-tags"></i>Loan</a>
                                    <a href="#"><i class="fa fa-comments"></i>2 Comments</a>
                                </div><!-- /.blog-card__meta -->
                                <h3><a href="news-details.php">Changing & grow your business faster</a></h3>
                                <div class="blog-card__author">
                                    <img src="assets\images\blog\blog-author-1-2.png" alt="">Christine Eve
                                </div><!-- /.blog-card__author -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="blog-card">
                            <div class="blog-card__image">
                                <span>20 Sep</span>
                                <img src="assets\images\blog\blog-1-3.png" alt="">
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <a href="#"><i class="fa fa-tags"></i>Loan</a>
                                    <a href="#"><i class="fa fa-comments"></i>2 Comments</a>
                                </div><!-- /.blog-card__meta -->
                                <h3><a href="news-details.php">Changing & grow your business faster</a></h3>
                                <div class="blog-card__author">
                                    <img src="assets\images\blog\blog-author-1-3.png" alt="">Christine Eve
                                </div><!-- /.blog-card__author -->
                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-home -->

        <div class="client-carousel pt-120 pb-120 client-carousel__has-border-top">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="assets\images\resources\brand-1-1.png" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="call-to-action" style="background-image: url(assets/images/backgrounds/call-to-action-bg-1-1.jpg);">
            <div class="container">
                <div class="left-content">
                    <p><span>Simple</span><span>Transparent</span><span>Secure</span></p>
                    <h3>Get a Business Loans Quickly</h3>
                </div><!-- /.left-content -->
                <div class="right-content">
                    <a href="#" class="thm-btn">Apply For Loan</a><!-- /.thm-btn -->
                </div><!-- /.right-content -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-widget__about">
                            <a href="index-1.php">
                                <img src="assets\images\logo-light.png" width="155" alt="">
                            </a>
                            <p>Lorem ipsum is not dolor sit amet, consect etur adi pisicing elit sed eiusmod tempor ut labore.</p>
                            <div class="footer-widget__about-phone">
                                <i class="pylon-icon-tech-support"></i>
                                <div class="footer-widget__about-phone-content">
                                    <span>Call Anytime</span>
                                    <h3><a href="tel:92-666-888-0000">92 666 888 0000</a></h3>
                                </div><!-- /.footer-widget__about-phone-content -->
                            </div><!-- /.footer-widget__about-phone -->
                        </div><!-- /.footer-widget footer-widget__about -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget footer-widget__link">
                            <h3 class="footer-widget__title">Explore</h3>
                            <ul class="list-unstyled footer-widget__link-list">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-widget__post">
                            <h3 class="footer-widget__title">Latest News</h3>
                            <ul class="list-unstyled footer-widget__post-list">
                                <li>
                                    <img src="assets\images\resources\footer-post-1-1.png" alt="">
                                    <div class="footer-widget__post-list-content">
                                        <span>16 Oct, 2020</span>
                                        <h3><a href="news-details.php">We’re Providing the Quality Services</a></h3>
                                    </div><!-- /.footer-widget__post-content -->
                                </li>
                                <li>
                                    <img src="assets\images\resources\footer-post-1-2.png" alt="">
                                    <div class="footer-widget__post-list-content">
                                        <span>16 Oct, 2020</span>
                                        <h3><a href="news-details.php">We’re Providing the Quality Services</a></h3>
                                    </div><!-- /.footer-widget__post-content -->
                                </li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget footer-widget__contact">
                            <h3>Contact</h3>
                            <ul class="list-unstyled footer-widget__contact-list">
                                <li>
                                    <a href="#"><i class="pylon-icon-email1"></i>needhelp@company.com</a>
                                </li>
                                <li>
                                    <a href="#"><i class="pylon-icon-clock2"></i>Mon - Sat 8:00 AM - 6:00 PM</a>
                                </li>
                                <li>
                                    <a href="#"><i class="pylon-icon-pin1"></i>80 Broklyn Golden Street,
                                        New York. USA</a>
                                </li>
                            </ul>
                        </div><!-- /.footer-widget footer-widget__contact -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.site-footer -->
        <div class="bottom-footer">
            <div class="container">
                <p>© Copyright 2020 by Company.com</p>
                <div class="bottom-footer__social">
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.bottom-footer__social -->
            </div><!-- /.container -->
        </div><!-- /.bottom-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index-1.php" aria-label="logo image"><img src="assets\images\logo-light.png" width="155" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="pylon-icon-email1"></i>
                    <a href="mailto:needhelp@azino.com">needhelp@pylon.com</a>
                </li>
                <li>
                    <i class="pylon-icon-telephone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets\images\resources\flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label><!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets\js\jquery-3.5.1.min.js"></script>
    <script src="assets\js\bootstrap.bundle.min.js"></script>
    <script src="assets\js\swiper.min.js"></script>
    <script src="assets\js\jquery.ajaxchimp.min.js"></script>
    <script src="assets\js\jquery.magnific-popup.min.js"></script>
    <script src="assets\js\jquery.validate.min.js"></script>
    <script src="assets\js\bootstrap-select.min.js"></script>
    <script src="assets\js\wow.js"></script>
    <script src="assets\js\odometer.min.js"></script>
    <script src="assets\js\jquery.appear.min.js"></script>
    <script src="assets\js\wNumb.min.js"></script>
    <script src="assets\js\nouislider.min.js"></script>

    <!-- template js -->
    <script src="assets\js\theme.js"></script>
</body>
</html>