<?php
include 'controller.recetas.php';
include '../../class/class.recetas-dulces.php';
class ControllerRecetasDulces extends ControllerRecetas {

    private string $fileRute;

    public function __construct(string $fileRute)
    {
        parent::__construct($fileRute);
    }

    public function trasformObject(string $image, string $titulo, string $descripcion, array $ingredientes)
    {
        return new RecetasDulces($image,$titulo,$descripcion,$ingredientes);
    }
}

?>