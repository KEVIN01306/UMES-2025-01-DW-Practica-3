<?php
include_once '../../class/class.recetas.php';

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

    public function processData(){
        $dataLoad = $this->loadData();
        if (!is_resource($dataLoad)){
            return "error al procesar el archivo";
        }
        $listRecetas = [];
        while (($textLine = fgets($dataLoad)) != false ){
            $fila = explode(";",$textLine);
            $listRecetas[] =( $this->trasformObject(
                $fila[0],
                $fila[1],
                $fila[2],
                array_slice($fila,3)
            ));
        }
        fclose($dataLoad);
        return $listRecetas;
    }
}

?>