<?php

class Recetas {

    private string $image;
    private string $titulo;
    private string $descripcion;
    private array $ingredientes;

    public function __construct(string $image,string $titulo, string $descripcion,array $ingredientes)
    {
        $this->image = $image;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->ingredientes = $ingredientes;
    }


    public function getImagen() : string {
        return $this->image;
    }

    public function getTitilo() : string {
        return $this->titulo;
    }

    public function geDescripcion() : string {
        return $this->descripcion;
    }

    public function getIngredientes() : array {
        return $this->ingredientes;
    }

};


?>