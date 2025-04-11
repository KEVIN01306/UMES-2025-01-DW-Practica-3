<?php 
include_once '../../class/class.recetas.php';

class RecetasSaladas extends Recetas{

    private string $image;
    private string $titulo;
    private string $descripcion;
    private array $ingredientes;

    public function __construct(string $image,string $titulo, string $descripcion,array $ingredientes)
    {
        parent::__construct($image,$titulo,$descripcion,$ingredientes);
    }
}

?>