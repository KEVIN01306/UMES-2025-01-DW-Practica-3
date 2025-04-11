<?php
include 'controller.recetas.php';
include_once '../../class/class.recetas-saladas.php';
class ControllerRecetasSaladas extends ControllerRecetas {

    private string $fileRute;

    public function __construct(string $fileRute)
    {
        parent::__construct($fileRute);
    }

    public function trasformObject(string $image, string $titulo, string $descripcion, array $ingredientes)
    {
        return new RecetasSaladas($image,$titulo,$descripcion,$ingredientes);
    }
}

?>