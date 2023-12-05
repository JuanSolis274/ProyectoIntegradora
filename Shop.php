<?php
   session_start();

   if(!isset($_SESSION['usuario'])){
     echo '
       <script>
          alert("Por Favor Debes Iniciar Sesion");
          window.location = "usuario.php";
       </script>';
     session_destroy();
     die();

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito De Compra</title>
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
            <a href="index.php" class="navbar-brand px-lg-4 m-0">
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
                          <li><a class="dropdown-item" href="nieve_frutas.php">Nieves de Frutas</a></li>
                          <li><a class="dropdown-item" href="nieve_leche.php">Nieve de Leche</a></li>
                          <li><a class="dropdown-item" href="nieve_raspays.php">Nieve de Raspays</a></li>
                        </ul>
                      </div>
                    <a href="about.php" class="nav-item nav-link">Historia</a>
                    <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                    <a href="usuario.php" class="nav-item nav-link"><i class="bi bi-person-circle" style="font-size: 30px;"></i></a>
                    <a href="Shop.php"><i class="bi bi-cart-fill align-middle" style="font-size: 30px;"></i></a> <!-- Establecido un tamaño de 24px -->
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
 <h1>Bienvenido Al Carrito De Compra </h1>
 <p>Posdata aun no existe</p>

 <a href="css_login/cerrar_sesion_be.php"> CERRAR SESION</a>
    
</body>
</html>