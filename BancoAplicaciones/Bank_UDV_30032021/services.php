<!DOCTYPE html>
<html lang="en">

<!-- TO LOGOUT THE USER -->

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
    <title>Services Page || Bank UDV ||</title>
    <!-- favicons Icons -->
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

    <input type="hidden" value="<?php echo $_SESSION['dpi_usuario']; ?>" id="user_dpi">

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
                    <li><span>Services</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>Services</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <h2 class="text-center">--Credit's Info--</h2><br>
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Credit ID</th>
                        <th>Credit Description</th>
                        <th>How much?</th>
                    </tr>
                </thead>
                <tbody id="dataCliente">
                </tbody>
            </table>

            <!-- Form para solicitar credito -->
            <br><br>
            <h1>Request for a Credit</h1>
            <form style="margin: auto;">
                <div class="form-group row">
                    <label for="HowMuch" class="col-sm-2 col-form-label">How much do you need?</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputMoney" placeholder="$$$" maxlength="3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="DaysToPay" class="col-sm-2 col-form-label">Days to pay it?</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="daysToPay" placeholder="Days?" maxlength="2">
                    </div>
                </div>
        </div>

        <!-- Credit Type -->
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Description</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Visa Gold" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Visa Gold
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Visa Black">
                        <label class="form-check-label" for="gridRadios2">
                            Visa Black
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="Visa Platinum">
                        <label class="form-check-label" for="gridRadios3">
                            Visa Platinum
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="button" onclick="readCreditForm()" class="btn btn-primary">Submit Request</button>
                </div>

                <!-- END OF Form para solicitar credito -->

                <!-- Form para pagar credito -->
                <br><br>
                <h1>Pay for your Credit!</h1>
                <form style="margin: auto;">
                    <div class="form-group row">
                        <label for="CID" class="col-sm-2 col-form-label">What's the Credit ID?</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="creditid" placeholder="CID" maxlength="3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="HowMuch" class="col-sm-2 col-form-label">How much are you paying?</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="amountToPay" placeholder="$$$" maxlength="3">
                        </div>
                    </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="button" onclick="payCredit()" class="btn btn-primary">Submit Payment</button>
                </div>
            </div>
    </div>
    </form>

    <!-- END OF > Form para pagar credito -->

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

    <!-- Reading creadit form -->

    <script>
        function readCreditForm() {

            var howMuch = "";
            var daysToPay = "";
            var description = "";


            var today = new Date();

            var time = today.getHours() + today.getMinutes() + today.getSeconds();
            var resultTime = time;

            howMuch = document.getElementById("inputMoney").value;
            daysToPay = document.getElementById("daysToPay").value;

            if (document.getElementById('gridRadios1').checked) {
                description = document.getElementById('gridRadios1').value;
            }

            if (document.getElementById('gridRadios2').checked) {
                description = document.getElementById('gridRadios2').value;
            }

            if (document.getElementById('gridRadios3').checked) {
                description = document.getElementById('gridRadios3').value;
            }

            alert("Your form was submitted successfully! :)");
            console.log("How much did the client asked? " + howMuch);
            console.log("Days to pay? " + daysToPay);
            console.log("Card selected? " + description);

            fetch("https://banco-vivienda.club/creditos/registrar", {
                    "method": "POST",
                    "headers": {
                        'Accept': 'application/json',
                        "content-type": "application/json",
                        "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
                    },
                    "body": JSON.stringify({
                        "dpi": dpi_usuario,
                        "descripcion": description,
                        "monto": howMuch,
                        "diapago": daysToPay,
                        "cred_tipo": "tar_visa2" + resultTime
                    })
                })
                .then(response => {
                    console.log("Data was inserted correctly.");
                    console.log(response);
                })
                .catch(err => {
                    console.error(err);
                });

        }
    </script>

    <!-- END OF Reading creadit form -->

    <!-- Paying credit form -->
    <script>
        function payCredit() {

            var credit_id = document.getElementById("creditid").value;
            var amountToPayTemp = document.getElementById("amountToPay").value;
            var amountToPay = parseInt(amountToPayTemp);

            console.log("Credit ID es: " + credit_id);
            console.log("Amount to pay es: " + amountToPay);

            fetch("https://banco-vivienda.club/creditos/ingresarpago", {
                    "method": "POST",
                    "headers": {
                        'Accept': 'application/json',
                        "content-type": "application/json",
                        "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
                    },
                    "body": JSON.stringify({
                        "id_credito": credit_id,
                        "monto": amountToPay
                    })
                })
                .then(response => response.json())
                .then(response => {
                    console.log(response);
                })
                .catch(err => {
                    console.error(err);
                });

        }
    </script>

    <!-- END OF > Paying credit form -->

    <!-- template js -->
    <script src="assets\js\theme.js"></script>

    <script>
        
        let template = ({
            ...json

        }) => {
            temp = "";
            json.tbcliente_creditos.map(data[1] => {
                
                if (data.credito_id != null) {
                    temp += `<tr>
                    <td>${data.credito_id}</td>
            
                    <td>${data.clientecred_dsc}</td>

                    <td>${data.clientecred_monto}</td>
                </tr>`
                }


            })
            if (temp == "") {
                return `<tr><td colspan = "2"> You have no credits. Ask for one NOW! :) </td></tr>`
            } else {
                return temp;
            }
        }

        let dpi_usuario = document.getElementById("user_dpi").value;
        console.log("El DPI FINAL FINAL ES: " + dpi_usuario);

        fetch("https://banco-vivienda.club/clientes/consulta/" + dpi_usuario, {
                "headers": {
                    'Accept': 'application/json',
                    "authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZFN1Y3Vyc2FsIjo1LCJ1c2VybmFtZSI6IlNVQ1VSU0FMMSIsInBhc3N3b3JkIjoicXdlcnR5IiwiaWF0IjoxNjE5NTQ3NzQ0LCJleHAiOjE2MjI2NTgxNDR9.1awdMkX9_Ajun1OLcYXD19_UbtKVgx4Uzbmy55Jlrt4"
                }
            })
            .then(response => {
                console.log("Entro al primer RESPONSE");
                return response.json()
            })
            .then(response => {
                console.log("Entro al segundo RESPONSE");
                console.log("Este es el ID: " + response.cliente_id);
                solicitudCredito(response.cliente_id);
                console.log(response);
            })
            .catch(err => {
                console.log("Entro al catch");
                console.error(err);
            });

        let infocliente = document.querySelector("#dataCliente");

        let solicitudCredito = (id) => fetch("https://banco-vivienda.club/clientes/" + id, {
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

            })
            .catch(err => {
                console.error(err);
            });

    </script>


</body>

</html>