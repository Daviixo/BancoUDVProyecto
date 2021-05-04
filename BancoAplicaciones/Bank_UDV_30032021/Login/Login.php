﻿

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilo.css">
    <title>prueba</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets\images\favicons\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\images\favicons\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicons\favicon-16x16.png">
    <link rel="manifest" href="assets\images\favicons\site.webmanifest">
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
                        <a href="../Login.php" >Login</a>
                        <a href="#">Company News</a>
                        <a href="#">FAQs</a>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="#"><i class="pylon-icon-email1"></i>needhelp@company.com</a>
                        
                       
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                    <!--<a href="index.php" aria-label="logo image"><img src="assets\images\UDV_Bank.JPG" width="155" alt=""></a> -->
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="../index.php">Home</a>
                            <ul>
                                <li>
                                    <a href="../index.php">Home One</a>
                                </li>
                                <li><a href="index-1.html">Home Two</a></li>
                                <li class="dropdown">
                                    <a href="#">Header Styles</a>
                                    <ul>
                                        <li><a href="index-1.html">Header One</a></li>
                                        <li><a href="index-1.html">Header Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="about.html">About</a>
                            <ul>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="services.html">Services</a>
                            <ul>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="news.html">News</a>
                            <ul>
                                <li><a href="news.html">News</a></li>
                                <li><a href="news-details.html">News Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Pages</a>
                            <ul>
                                <li><a href="how-it-works.html">How It Works</a></li>
                                <li><a href="loan-calculator.html">Loan Calculator</a></li>
                                <li class="dropdown">
                                    <a href="credit-card.html">Credit Card</a>
                                    <ul>
                                        <li><a href="credit-card.html">Credit Card</a></li>
                                        <li><a href="credit-card-details.html">Credit Card Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
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

                           

    

                            <?php 
                       require "insert.php";
                            ?>
               
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                   
                   
                    <div class="login">
                        <!---->
                        <main>
                            <div class="Contenedor">
                            <div class="caja">
                                <div class="caja_login">
                                    <h3 class="titulo">¿Ya posees una cuenta?</h3>
                                    <p>Inicia sesión para ingresar al sitio</p>
                                    <button id="Iniciar_sesión">Iniciar sesión</button>
                                </div>
                                <div class="caja_registro">
                                    <h3 class="titulo">¿No posees cuenta?</h3>
                                    <p>Crea una cuenta</p>
                                <button id="Registro">Registrate</button>
                                </div>
                            </div>
                            <!--Formulario registro-->
                            <!--Login-->
                            <div class="Contenedor_login">
                                <form action="ingresar.php" id="prueba" class="Formulario" method="post" autocomplete="off">
                                    <h2>Iniciar sesión</h2>
                                    <input  type="email" placeholder="Correo Electronico" name="email_usuario"  >
                                    <input  type="password" placeholder="Contraseña" name="password" >
                                    <input type="submit" value="Ingresar" class="boton" >
                                  
                                </form>
                                <!--Registro-->
                                <form action="login.php" id="prueba1" class="Formulario_Registro" method="post" autocomplete="off">
                                    <h2>Registrarse</h2>
                                    <input  type="text" placeholder="Nombre completo"  name="nombre_usuario" require>
                                    <input  type="email" placeholder="Correo Electronico" name="email_usuario" require>
                                    <input  type="text" placeholder="Usuario" name="alias_usuario" require>
                                    <input  type="text" placeholder="Telefono" name="telefono" require>
                                    <input  type="password"placeholder="Contraseña" name="password" require>
                                    <input type="submit" value="Crear usuario" class="boton"  >
                                   
                                </form>
                            </div>
                        </div>
                        </main>
                        <script src="./script.js"></script>
                 </div>
                    
                   
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
                <a href="index-1.html" aria-label="logo image"><img src="assets\images\logo-light.png" width="155" alt=""></a>
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
    <script >
    
    function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
    indexed_array[n['name']] = n['value'];
    });

return indexed_array;
}

    let form = document.querySelector("#prueba1");

form.addEventListener('submit', event => { event.preventDefault(); 
console.log('Form submission cancelled.');
var $form = $("#prueba1");
var data = getFormData($form);
console.log (data);
fetch("insert.php", {
	method: 'post',
    headers: {
    'Content-Type': 'charset=utf-8',
    },
	body: JSON.stringify(data)
}).then(respuesta => {
	console.log (respuesta.statusText)
    $("#prueba1")[0].reset()
    if (!respuesta.ok) {
        alert ("NO se puede y punto");
    }else{
        alert ("Si se pudo");
    }
});



});
    </script>
</body>
</html>