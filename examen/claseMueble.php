<?php
require_once ("claseProducto.php");
class Mueble extends Producto {
    public $strColor;
    public $strMaterial;

    public function __construct(string $strColor, string $strMaterial, $strDescripcion, $intPrecio, $intstock){
        parent:: __construct( $strDescripcion, $intPrecio, $intstock);
        $this-> strColor = $strColor;
        $this-> strMaterial = $strMaterial;
    }

    public function getInfoMueble(){
        $mostrar=[
            "descripcion"=> $this -> strDescripcion,
            "precio"=> $this -> intPrecio,
            "stock"=> $this -> intStock,
            "color"=> $this -> strColor,
            "material => $this-> strMaterial"
        ];
        return $mostrar;
    }
}
