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

    <!-- Favicon -->
    <!--<link rel="icon" href="img/core-img/favicon.ico">-->
    <link rel="icon" src="caviar-master/img/core-img/icono.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<style>
    .btn-edit {
    width: 30px;
    height: 30px;
    background-color: #28a745;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 0;
    text-align: center;
    color: #fff;
    line-height: 60px;
    font-weight: 700;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}
.btn-delete {
    width: 30px;
    height: 30px;
    background-color: #dc3545;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 0;
    text-align: center;
    color: #fff;
    line-height: 60px;
    font-weight: 700;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
} 
.btn-edit:hover {
    background-color: #333333;
}
.btn-delete:hover {
    background-color: #dddddd;
}
    </style>
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
                                    <a class="nav-link" href="admin.html">Inicio</a>
                                </li>
                               
                                <li class="nav-item">
                                        <a class="nav-link" href="imagenes.php">Imagenes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Usuarios.php">Usuarios</a>
                                    </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.html">Salir</a>
                                </li>
                            </ul>
                           
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
   
    <br>
    <br>
    <br>
    <br>
    
    <!-- ***** Contact Area Start ***** -->
    <section class="caviar-testimonials-area" id="reservation">
            <div class="container">
             <div class="caviar-testimonials-area">
                 <div class="testimonials-content" >
                     <div class="section-heading text-center">
                         <h2>Registro de Usuarios</h2>
                     </div>
                     <form class="caviar-testimonials-area" method="post" action="regUsuario.php" enctype="multipart/form-data">
                         <div class="row">
                             <div class="col-12 col-lg-6">
                             <label for="sel1">Nombre</label>
                                 <input type="text" class="form-control" id="Nombre" name="Nombre" required="">
                             </div>
                             <div class="col-12 col-lg-6">
                             <label for="sel1">Correo</label>
                                 <input type="email" class="form-control"  id="Correo" name="Correo" required="">
                             </div>
                            <br>
                            <br>
                             <div class="col-12 col-lg-6">
                             <label for="sel1">Contraseña</label>
                             <input type="password" class="form-control"  id="Contrasena" name="Contrasena" required="">    
                            </div>
                             
                         </div>
                         <br>
                         <br>
                         <div class="col-18">
                                 <button type="submit" class="btn caviar-btn" ><span></span>Registrar</button>
                             </div>
                     </form>
                 </div>
             </div>
            

      <table class="footable table table-stripped" data-page-size="8" data-filter=#filter id="img">
          <thead>
          <tr>
              
              
              <th >Nombre</th>
              <th >Correo</th>
              <th >Contraseña</th>
              
          </tr>
          </thead>
          <tbody>
            <?php 

            require('conUsuario.php');
             ?>
          </tbody>
          <tfoot>
          <tr>
              <td colspan="5">
                  <ul class="pagination pull-right"></ul>
              </td>
          </tr>
          </tfoot>
      </table>
             </div>

             
         </section>
        
         
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
    <script src="js/alertifyjs/alertify.js"></script>
    <script src="js/alertifyjs/alertify.min.js"></script>
    <script>
      
 $(window).load(function(){

$(function() {
 $('#im').change(function(e) {
     addImage(e); 
    });

    function addImage(e){
     var file = e.target.files[0],
     imageType = /image.*/;
   
     if (!file.type.match(imageType))
      return;
 
     var reader = new FileReader();
     reader.onload = fileOnload;
     reader.readAsDataURL(file);
    }
 
    function fileOnload(e) {
     var result=e.target.result;
     $('#imgSalida').attr("src",result);
    }
   });
 });
     
    </script>
     
    
    
</body>