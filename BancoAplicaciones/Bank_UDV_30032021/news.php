<!DOCTYPE html>
<html lang="en">

<!-- TO LOGOUT THE USER

<?php

session_start();

$email = $_SESSION['username'];

if (isset($_POST['logout'])) {

    session_destroy();
    echo '<script language="javascript">alert("Logout in process...");</script>';
    header('Location:index.php');
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page || Pylon || Loan HTML Template</title>
    <-- favicons Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicons\apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicons\favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicons\favicon-16x16.png">
<link rel="manifest" href="assets\images\favicons\site.webmanifest">
<meta name="description" content="Pylon Loan HTML Template">

<!-- fonts -->
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
<h1>Welcome, <?php echo $email; ?></h1>
<link rel="stylesheet" href="assets\css\main.css">
</head>

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
                        <form method="post"><button type="submit" class="btn btn-primary" name="logout" value="Logout">Logout</button>
                            <!-- <a href="#">Login</a>
                        <a href="#">Company News</a>
                        <a href="#">FAQs</a> -->
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
                                <li><a href="testimonials.php">Testimonials</a></li>
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

        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-1.php">Home</a></li>
                    <li>/</li>
                    <li><span>News</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>News</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <!--INICIO DE FORMULARIO PARA CONSULTA-->

            <form method="post" id="formulario">
                <input type="text" name="dpi" id="dpi">
                <input type="submit" value="search">
            </form>

            <h2>Información de cliente.</h2>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>DPI</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                    </thead>
                    <tbody id="dataCliente">
                    </tbody>
                </table>
            </div>

            <script>

            console.log("El DPI consultado es: " + dpi.value);
                let template = ({
                    ...json
                }) => `
    
            
            <tr>
                <td>${json.cliente_ide}</td>
                <td>${ json.cliente_nombre1}</td>
				<td>${json.cliente_ape1}</td>
				
            </tr>
    `

                let formulario = document.querySelector("#formulario");
                formulario.addEventListener("submit", function(e) {
                    e.preventDefault()
                    let dpi = document.querySelector("#dpi");
                    console.log(dpi.value);
                    let infocliente = document.querySelector("#dataCliente");
                    fetch("https://banco-vivienda.club/clientes/consulta/" + dpi.value, {
                            "headers": {
                                'Accept': 'application/json',
                                "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
                            }
                        })
                        .then(response => {

                            let respuestaServer = response.json().then(respuesta => {
                                return respuesta;
                            }).catch(error => {
                                alert("El número de DPI no existe en la base de datos.");
                                infocliente.innerHTML = "";
                            })
                            return respuestaServer;

                        })
                        .then(response => {
                            console.log(response);

                            infocliente.innerHTML = template(response);
                            console.log(response.ok)

                        })
                        .catch(err => {
                            console.error(err);
                        });

                })
            </script>

        <!--FINAL DE FORMULARIO-->

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

    <!-- ELIMINAR DATOS -->
    <script>
        function deleteUser() {

            var dpi = document.getElementById("dpi").value;

            console.log("el dpi enviado a eliminar es: " + dpi);
            fetch("https://banco-vivienda.club/clientes/administracion", {
                    "method": "DELETE",
                    "headers": {
                        'Accept': 'application/json',
                        "content-type": "application/json",
                        "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
                    },
                    "body": JSON.stringify({
                        "dpi": dpi
                    })
                })

                .then(response => {
                    alert("User Delete.");
                    console.log(response);
                })
                .catch(err => {
                    console.error(err);
                });


        }
    </script>

    <!-- Boton para consulta de datos por DPI -->

    <script>
        let template = ({
            ...json
        }) => `<tr>
            <td>${json.cliente_ide}</td>
            <td>${ json.cliente_nombre1}</td>
            <td>${json.cliente_ape1}</td>
            </tr>`

        let formulario = document.querySelector("#formulario");
        formulario.addEventListener("submit", function(e) {
            e.preventDefault()
            let dpi = document.querySelector("#dpi");
            console.log(dpi.value);
            let infocliente = document.querySelector("#dataCliente");
            fetch("https://banco-vivienda.club/clientes/consulta/" + dpi.value, {
                    "headers": {
                        'Accept': 'application/json',
                        "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
                    }
                })
                .then(response => {

                    let respuestaServer = response.json().then(respuesta => {
                        return respuesta;
                    }).catch(error => {
                        alert("El número de DPI no existe en la base de datos.");
                        infocliente.innerHTML = "";
                    })
                    return respuestaServer;

                })
                .then(response => {
                    console.log(response);

                    infocliente.innerHTML = template(response);
                    console.log(response.ok)

                })
                .catch(err => {
                    console.error(err);
                });

        })
    </script>

</body>

</html>

`}
}