<?php
require_once("claseMueble.php");
class Mesa extends Mueble{
    private $strForma;
    public $strTamanio;
    public $status = "descativado";
    public function __construct($strForma, $strTamanio, $strDescription, $intPrecio, $intStock, $strColor, $strMaterial){
        parent:: __construct($strDescription, $intPrecio, $intStock, $strColor, $strMaterial);
        $this-> strForma=$strForma;
        $this-> strTamanio=$strTamanio;
    }

    public function setForma($forma){
        $this->strForma = $forma;
    }

    public function getInfoMesa(){
      $mes=[
        "descripcion"=> $this -> strDescripcion,
            "precio"=> $this -> intPrecio,
            "stock"=> $this -> intStock,
            "color"=> $this -> strColor,
            "material" => $this-> strMaterial,
            "forma" => $this -> strForma,
            "tamanio" => $this -> strTamanio,
      ];
      return $mes;
    }
}