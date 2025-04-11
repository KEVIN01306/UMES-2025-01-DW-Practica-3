<?php
include '../../controllers/controller.recetas-saladas.php';
$recetasSaladas = new ControllerRecetasSaladas('../../data/resetas/recetas-saladas.txt');
$recetasSaladasList = $recetasSaladas->processData();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sitio web de restaurante Sabor & Tradición">
    <meta name="keywords" content="restaurante, comida, postres, platos fuertes, reseñas, personal, recetas">
    <meta name="author" content="Sabor & Tradición">
    <meta property="og:title" content="Sabor & Tradición">
    <meta property="og:description" content="Restaurante de comida tradicional con un toque especial">
    <meta property="og:image" content="/assets/img/icono_restaurante.png">
    <meta property="og:url" content="https://menu/postres.html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/estructura.css">
    <link rel="shortcut icon" href="../../assets/img/logo.webp" type="image/x-icon">
    <title>PERSONAL</title>
</head>
<body class="bg-dark">
    <nav class="navbar bg-dark border-bottom border-body sticky-top " data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../../assets/img/logo.webp" alt="Logo" width="30"  class="d-inline-block align-text-top">
            <span class="color-yellow">Sabor & Tradicion</span></a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon color-yellow" ></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../../index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../menu/postres.html">Postres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../menu/platosFuertes.html">Platos Fuertes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../resenias/resenias.html">Reseñas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../personal/personal.html">Personal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="recetasDulces.php">Recetas Dulces</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="recetasSaladas.php">Recetas Saladas</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container-fluid mt-4 p-0">
        <section class="bg-dark text-white text-center d-flex justify-content-center">
            <div class="row justify-content-center align-items-center w-100">
                <div class=" col-10 col-sm-7 col-md-6 text-center ">
                    <img class=" clic-esepecial img-fluid" src="../../assets/img/recetasSaladas.png" alt="">
                </div>
                <div class="col-12 col-md-6 mt-4 ">
                    <h1 class="carta-letra color-yellow">Recetas</h1>
                    <p class="text-white">------------ Saladas ------------</p>
                </div>
            </div>
        </section>
    </div>
    <hr>
    <hr>
    <div class="row justify-content-center con-sepa">
        <?php foreach($recetasSaladasList as $receta){?>
            <div class="card bg-dark text-white col-11 col-md-5">
                <img src="../../assets/img/recetas/<?php echo $receta->getImagen();?>" class="card-img-top card-fuid" alt="...">
                <div class="card-body">
                    <h5 class="card-title carta-letra color-yellow"><?php echo $receta->getTitilo();?></h5>
                    <p class="card-text"><?php echo $receta->getDescripcion();?></p>
                </div>
                <ul class="list-group list-group-flush bg-dark text-white">
                    <li class="list-group-item bg-dark text-white"><p class="carta-letra color-yellow m-0">Ingredientes</p></li>
                    <?php foreach($receta->getIngredientes() as $ingrediente){?>
                    <li class="list-group-item bg-dark text-white"><?php echo $ingrediente?></li>
                    <?php };?>
                </ul>
            </div>
            <?php };?>
        
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top p-2 bg-dark">
        <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <img src="../../assets/img/logo.webp" alt="Logo" width="30"  class="d-inline-block align-text-top">
        </a>
        <span class="mb-3 mb-md-0 text-body-secondary color-white">&copy; 2024 Company, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
            <li class="ms-3"><a class="text-body-secondary color-white" href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary color-white" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary color-white" href="#"><i class="bi bi-facebook"></i></a></li>
        </ul>
    </footer>
</body>
</html>