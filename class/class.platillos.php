<?php

class Platillo {

    private string $image;
    private string $nombrePlatillo;
    private string $descripcionPlatillo;
    private string $precio;

    function __construct($image,$nombrePlatillo,$descripcionPlatillo,$precio)
    {
        $this->image = $image;
        $this->nombrePlatillo = $nombrePlatillo;
        $this->descripcionPlatillo = $descripcionPlatillo;
        $this->precio = $precio;
    }
    

};

?>