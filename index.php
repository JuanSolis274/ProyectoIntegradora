<?php
use MyApp\data\Database;
require("vendor/autoload.php");
$db = new Database;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CAPRI - Inicio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
    <link rel="stylesheet" href="css/">
</head>
<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.html" class="navbar-brand px-lg-4 m-0">
                <img src="img/LogoCapri.png" alt="logoinicio" width="240px">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Menu
                        </a>
                      
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="nieve_frutas.php">Nieve de Fruta</a></li>
                          <li><a class="dropdown-item" href="nieve_leche.php">Nieve de Leche</a></li>
                          <li><a class="dropdown-item" href="nieve_raspays.php">Nieve de Raspays</a></li>
                          <li><a class="dropdown-item" href="nieve_mineralizada.php">Nieve Mineralizada</a></li>
                          <li><a class="dropdown-item" href="nieve_concentrados.php">Nieve de Concentrados</a></li>
                        </ul>
                      </div>
                    <a href="about.php" class="nav-item nav-link">Historia</a>
                    <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                    <a href="paypal/index.php" class="nav-item nav-link">Paypal</a>
                    <a href="conteo.php" class="nav-item nav-link">Conteo Ventas</a>
                    <a href="leer_comentarios.php" class="nav-item nav-link">Comentarios</a>
                    <a href="usuario.php" class="nav-item nav-link"><i class="bi bi-person-circle" style="font-size: 30px;"></i></a>
                    <a href="Shop.php"><i class="bi bi-cart-fill align-middle" style="font-size: 30px;"></i></a> <!-- Establecido un tamaño de 24px -->
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel 1 -->
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image" height="700px"  width="700px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Sirviendo</h2>
                        <h1 class="display-1 text-white m-0">Raspados</h1>
                        <h2 class="text-white m-0"> Desde 1990 </h2>
                    </div>
                </div>
                <!-- Carousel 2 -->
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image" height="700px"  width="700PX">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Sirviendo</h2>
                        <h1 class="display-1 text-white m-0">Raspados</h1>
                        <h2 class="text-white m-0"> Desde 1990 </h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Acerca de Nosotros</h4>
                <h1 class="display-4">Sirviendo desde 1950</h1>
            </div>
            <div id="info">
                <div class="row">
                    <div class="col-lg-4 py-5 py-lg-0">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4 py-0 py-lg-5">
                        <h1 class="mb-3">Filosofía</h1>
                        <h5 class="mb-3">Creer en estos principios y aplicarlos es importante, ya que son la base para el éxito de su proyecto</h5>
                        <p>
                            Nevería Capri se ha mantenido en el gusto de los consumidores por más de 40 años, esto se debe a la excelente calidad de sus productos y a su servicio.
                            Dentro de la industria de servicios alimenticios, el trato al cliente juega un papel prepoderante, es por eso que dentro del presente manual se ha incluido un
                            capítulo exclusivo para este rubro, dentro de la filosofia de la empresa, la actitud y disposición de todo el equipo que participa en la operación para brindar un servicio
                            excelente a los clientes, debe ser de lo mejor, brindar un excelente servicio debe ser una convicción y un objetivo que diariamente distinga la operación de nuestra unidad.
                        </p>
                        
                    </div>
                    <div class="col-lg-4 py-0 py-lg-5">
                        <h1 class="mb-3">Nuestra Visión</h1>
                        <p>Ser la empresa líder, la más grande y competitiva en el ramo de la nieve raspada, distinguiéndose así por 
                            tener el mejor personal capacitado en servicio al cliente, el mejor producto, los sistemas de higiene más
                            seguros, respetar su medio ambiente y contar con los mejores recursos técnicos del ramo. Para proyectar su
                            imagen nacional e internacionalmente
                        </p>
                        <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>La mejor atención al cliente.</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Mejor sistema de higiene.</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Cuidado al medio ambiente.</h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
   <!-- Menu Start 4 -->
   <div class="container-fluid pt-5">
    <div class="container">
        <div class="section-title">
            <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menú</h4>
            <h1 class="display-4">Los sabores más comprados</h1>
            <?php
            $nievesQry="SELECT * FROM `nieves`";
            $nieves=$db->selectQuery($nievesQry);
            ?>
            <!-- NIEVE MINERALIZADAS -->
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php 
                foreach($nieves as $res){
                ?>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                        
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>
                            <a><?php echo $res['nombre'];?></a>
                        </h4>
                        <p class="m-0">Nieve de raspa de sabor limón</p>
                    </div>
                </div><?php echo "";}?>
                <!-- 
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                        
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>
                            <a>Mango</a>
                        </h4>
                        <p class="m-0">Nieve de raspa de sabor mango</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                        
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>
                            <a>Kiwi</a>
                        </h4>
                        <p class="m-0">Nieve de raspa de sabor kiwi</p>
                    </div>
                </div>
                <div class="boton">
                    <button ><a href="nieve_frutas.html">Ver todos los sabores</a></button>
                </div>
                
                
            </div>
            <div class="col-lg-6">
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                        
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>
                            <a>Piña</a>
                        </h4>
                        <p class="m-0">Nieve de raspa de sabor piña</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                        
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>
                            <a>Tamarindo</a>
                        </h4>
                        <p class="m-0">Nieve de raspa de sabor tamarindo</p>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col-4 col-sm-3">
                        <img class="w-100 rounded-circle mb-3 mb-sm-0" src="img/menu-1.jpg" alt="">
                        
                    </div>
                    <div class="col-8 col-sm-9">
                        <h4>
                            <a>Chamoy</a>
                        </h4>
                        <p class="m-0">Nieve de raspa de sabor chamoy</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<div class="boton">
    
</div>
    <!-- Footer Start -->
    <div class=" footer text-white mt-5 pt-5c px-0 position-relative overlay-top">
        
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-6 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Visítanos</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Calz Paseo de la Rosita 610-Int. A, Residencial Campestre 
                    la Rosita, 27250 Torreón, Coah.</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+52 871 137 4863</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>neveriacapri@hotmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Síguenos</h4>
                <p>Síguenos en nuestras redes sociales</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://chat.whatsapp.com/LO7iXSZ9me0A4pxTbVJ1R1" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/NeveriaCapri/?locale=es_LA" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Horario</h4>
                <div>
                    <h6 class="text-white text-uppercase">Lunes - Viernes</h6>
                    <p>11.00 AM - 10.00 PM</p>
                    <h6 class="text-white text-uppercase">Sábado - Domingo</h6>
                    <p>11.00 PM - 10.00 PM</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>