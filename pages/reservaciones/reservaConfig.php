<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $numero = $_POST["numero"];
    $fecha_reserva = $_POST["fecha_reserva"];
    $hora_reserva = $_POST["hora_reserva"];
    $descripcion = $_POST["descripcion"];

    $data = "$nombre;$numero;$fecha_reserva;$hora_reserva;$descripcion\n";
    $archivo = "../../data/reservaciones/reservaciones.txt";
    $modo = "a";

    $gestor = fopen($archivo, $modo);

    if ($gestor) {
        if (fwrite($gestor, $data) !== false) {
            fclose($gestor);
        }
    }
}
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
    <div class="container-fluid mt-4 p-0">
        <section class="bg-dark text-white text-center d-flex justify-content-center">
            <div class="row justify-content-center align-items-center w-100">
                <div class=" col-10 col-sm-7 col-md-6 text-center ">
                    <img class=" clic-esepecial img-fluid" src="../../assets/img/reservaciones/check.png" alt="">
                </div>
                <div class="col-12  mt-4 ">
                    <h1 class="carta-letra color-yellow">Reservacion exitosa</h1>
                    <p class="text-white">------------ Te esperamos ------------</p>
                </div>
            </div>
        </section>
    </div>
    <hr>
    <hr>
    <div class="row justify-content-center con-sepa">
        <button type="button" class="btn btn-outline-success" onclick="window.location.href='./reservaciones.php'">Success</button>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top p-2 bg-dark">
        <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <img src="../../assets/img/logo.webp" alt="Logo" width="30"  class="d-inline-block align-text-top">
        </a>
        <span class="mb-3 mb-md-0 text-body-success color-white">&copy; 2024 Company, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
            <li class="ms-3"><a class="text-body-secondary color-white" href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary color-white" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary color-white" href="#"><i class="bi bi-facebook"></i></a></li>
        </ul>
    </footer>
</body>
</html>