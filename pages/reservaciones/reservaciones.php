<?php
include '../../controllers/controller.reservaciones.php';
$reservas = new ControllerRecervas('../../data/reservaciones/reservaciones.txt');
$resercaslist = $reservas->processData();
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
    <title>PLATOS FUERTES</title>
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
                <a class="nav-link" href="resenias.html">Reseñas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../personal/personal.html">Personal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../recetas/recetasDulces.php">Recetas Dulces</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../recetas/recetasSaladas.php">Recetas Saladas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./reservaciones.php">Reservaciones</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container-fluid mt-4 p-0">
        <section class="bg-dark text-white text-center d-flex justify-content-center">
            <div class="row justify-content-center align-items-center w-100">
                <div class=" col-10 col-sm-7 col-md-6 text-center ">
                    <img class=" clic-esepecial img-fluid" src="../../assets/img/reservaciones.png" alt="">
                </div>
                <div class="col-12  mt-4 ">
                    <h1 class="carta-letra color-yellow">Reservaciones</h1>
                    <p class="text-white">------------ Visitanos ------------</p>
                </div>
            </div>
        </section>
    </div>
    <hr>
    <hr>
    <button type="button" class="btn btn-outline-primary m-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Hacer Reserva</button>
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-dark rounded ">
            <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5 carta-letra color-yellow" id="exampleModalLabel">Hacer Reservarcion</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-dark text-white">
                <form method="post" id="formReserva" action="./reservaConfig.php">
                    <div class="mb-3">
                        <label for="nombre" class="col-form-label carta-letra color-yellow">Nombre:</label>
                        <input type="text" class="form-control " id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="numero" class="col-form-label carta-letra color-yellow">Numero:</label>
                        <input type="number" class="form-control " id="numero" name="numero" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_reserva" class="col-form-label carta-letra color-yellow">Fecha de reserva:</label>
                        <input type="date" class="form-control " id="fecha_reserva" name="fecha_reserva" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora_reserva" class="col-form-label carta-letra color-yellow">Hora de reserva:</label>
                        <input type="time" class="form-control " id="hora_reserva" name="hora_reserva" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="col-form-label carta-letra color-yellow">Descripcion:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                    </div>
                    <div class="modal-footer bg-dark text-white">
                        <button type="submit" class="btn btn-outline-primary">Reservar</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center con-sepa">
        <?php foreach ($resercaslist as $reserva){?>
        <div class="card col-12 col-md-6 col-lg-4 bg-dark m-1" style="width: 18rem;">
            <img src="../../assets/img/reservaciones/image.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title carta-letra color-yellow">Descripcion</h5>
                <p class="card-text text-white"><?php echo $reserva->getDescripcion()?></p>
            </div>
            <ul class="list-group-dark list-group-flush">
                <li class="list-group-item text-white"><span class="carta-letra  color-yellow">Nombre: </span><?php echo $reserva->getNombre()?></li>
                <li class="list-group-item text-white"><span class="carta-letra  color-yellow">Numero: </span><?php echo $reserva->getTelefono()?></li>
                <li class="list-group-item text-white"><span class="carta-letra  color-yellow">Fecha: </span><?php echo $reserva->getFechaReserva()?></li>
                <li class="list-group-item text-white"><span class="carta-letra  color-yellow">Hora: </span><?php echo $reserva->getHoraReserva()?></li>
            </ul>
        </div>
        <?php }?>
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