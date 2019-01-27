<?php 
//  if (!isset($_SESSION['id'])){
//     header("location:login.html");
  
//   }
  


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Nini&Co - Repostería Creativa</title>
    <link rel="icon" href="img/core-img/icono.ico">
    <!-- Favicon -->
    <!--<link rel="icon" href="img/core-img/favicon.ico">-->
    <link rel="icon" src="caviar-master/img/core-img/icono.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="img/core-img/preload-1.png" alt="">
            <img class="preload-2" src="img/core-img/preload-2.png" alt="">
            <!--<img class="preload-3" src="img/core-img/preload-3.png" alt="">-->
        </div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="admin.html">
                            <img src="img/core-img/Logo.png"  width="50%" height="80%" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Inicio</a>
                                </li>
                               
                                <li class="nav-item">
                                        <a class="nav-link" href="imagenes.php">Imagenes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Usuarios.php">Usuarios</a>
                                    </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="salir.php">Salir</a>
                                </li>
                            </ul>
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <!-- Welcome Social Info -->
        <div class="welcome-social-info">
            <a href="https://www.facebook.com/niniandco.trinychan/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/niniandco.reposteria/?hl=es"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            
        </div>
        <!-- Welcome Slides -->
        <div class="caviar-hero-slides owl-carousel" style="height:500px;overflow:hidden">
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/hero-nini.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                
                                <h2>Atrevete a endulzar tu paladar</h2>
                                <!--<p>jas.</p>-->
                                <!-- <a href="#" class="btn caviar-btn"><span></span> Reservation</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <!-- <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/hero-nini2.jpg);"></div> -->
            </div>
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/hero-nini2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Tenemos el ingrediente más importante...</h2>
                                <!--<p>Morbi sed porta diam. Sed pulvinar cursus lorem, consectetur iaculis dolor scelerisque non. Praesent bibendum mauris risus, non aliquam tellus consectetur nec.</p>-->
                                <!-- <a href="#" class="btn caviar-btn"><span></span> Reservation</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <!-- <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/hero-nini.jpg);"></div> -->
            </div>
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/hero-Colibri.png);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Tenemos el mejor sabor</h2>
                                <!--<p>Morbi sed porta diam. Sed pulvinar cursus lorem, consectetur iaculis dolor scelerisque non. Praesent bibendum mauris risus, non aliquam tellus consectetur nec.</p>-->
                                <!-- <a href="#" class="btn caviar-btn"><span></span> Reservation</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <!-- <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/hero-nini.jpg);"></div> -->
            </div>
            <div class="single-hero-slides bg-img" style="background-image: url(img/bg-img/hero-cup.png);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Tenemos CupCakes</h2>
                                <!--<p>Morbi sed porta diam. Sed pulvinar cursus lorem, consectetur iaculis dolor scelerisque non. Praesent bibendum mauris risus, non aliquam tellus consectetur nec.</p>-->
                                <!-- <a href="#" class="btn caviar-btn"><span></span> Reservation</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <!-- <div class="hero-slides-nav bg-img" style="background-image: url(img/bg-img/hero-nini.jpg);"></div> -->
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <!-- About Us Single Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/bg-img/about-nini.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>Quienes somos</h2>
                    </div>
                    <div class="about-us-content">
                        <span>Nini & Co.</span>
                        <p>Somos una Reposteria Creativa que nace con la más noble intención de endulzar los momentos más felices de nuestros clientes y amigos.</p>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Dish Menu Area Start ****** -->
    
    <!-- ****** Reservation Area End ****** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <a href="#" class="navbar-brand">NINI&CO</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Powered by <a href="https://colorlib.com" target="_blank">Colorlib</a> </p><!--| This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>-->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>