<?php
class Producto{
    public $strDescripcion;
    public $intPrecio;
    public $intStock;
    public $status= "activo";

    public function __Construct( $strDescripcion, $intPrecio, $intStock){
        $this -> strDescripcion = $strDescripcion;
        $this -> intStock = $intStock;
        $this -> intPrecio = $intPrecio;
    }

    public function getInfoProducto(){
        $info = [
            "descripcion"=> $this -> strDescripcion,
            "precio"=> $this -> intPrecio,
            "stock"=> $this -> intStock,
        ];
        return $info;
    }
} 
