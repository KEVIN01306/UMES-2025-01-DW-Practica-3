<?php
include '../class/class.recetas.php';

class ControllerRecetas {

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

    public function trasformObject(string $image,string $titulo,string $descripcion,array $ingredientes){
        return new Recetas($image,$titulo,$descripcion,$ingredientes);
    }

    public function splitArray(string $textLine){
        return $textLine.splitArray(',');
    }

    public function processData(){
        $dataLoad = $this->loadData();
        if (!is_resource($dataLoad)){
            return "error al procesar el archivo";
        }
        $listRecetas = [];
        while (($fila = fgets($dataLoad)) != false ){
            echo htmlspecialchars(trim($fila)) . "<br>";
            $listRecetas.array_push( $this->trasformObject(

            ));
        }

    }
}

$eje = new ControllerRecetas('../data/resetas/recetas-dulces.txt');

echo $eje->processData()


?>