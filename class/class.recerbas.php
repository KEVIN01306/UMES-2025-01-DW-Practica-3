<?php

class Reserba {

    private string $nombre;
    private string $Telefono;
    private string $FechaReserva;
    private string $HoraReserva;
    private string $Descripcion ;

    public function __construct(string $nombre,string $Telefono,string $FechaReserva,string $HoraReserva,string $Descripcion)
    {
        $this->nombre = $nombre;
        $this->Telefono = $Telefono;
        $this->FechaReserva = $FechaReserva;
        $this->HoraReserva = $HoraReserva;
        $this->Descripcion = $Descripcion;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getTelefono(): string
    {
        return $this->Telefono;
    }

    public function getFechaReserva(): string
    {
        return $this->FechaReserva;
    }

    public function getHoraReserva(): string
    {
        return $this->HoraReserva;
    }

    public function getDescripcion(): string
    {
        return $this->Descripcion;
    }
}

?>