<?php
include '../../class/class.recervas.php';
class ControllerRecervas {
    private string $fileRute;

    public function __construct($fileRute)
    {
        $this->fileRute = $fileRute;
    }
    public function loadData(){
        if(!file_exists($this->fileRute)){
            return 'El archivo no existe';
        };
        return fopen($this->fileRute, 'r');
    }

    public function trasformObject(string $nombre,string $numero,string $fechaReserva, string $horaReserva,string $descripcion){
        return new Reserva($nombre,$numero,$fechaReserva,$horaReserva,$descripcion);
    }

    public function processData(){
        $dataLoad = $this->loadData();
        if (!is_resource($dataLoad)){
            return "error al procesar el archivo";
        }
        $listReservas = [];
        while (($textLine = fgets($dataLoad)) != false ){
            $fila = explode(";",$textLine);
            $listReservas[] =( $this->trasformObject(
                $fila[0],
                $fila[1],
                $fila[2],
                $fila[3],
                $fila[4]
            ));
        }
        fclose($dataLoad);
        return $listReservas;
    }
}
?>