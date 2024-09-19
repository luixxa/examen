<?php
require_once("claseProducto.php");
require_once("claseMueble.php");
require_once("claseMesa.php");

$producto =new producto ("hogar",30000,5);
$arrayProducto=$producto->getInfoProducto();
echo "<h1>producto<h1>";
echo "<pre>";
print_r($arrayProducto);
echo "</pre>";

$mueble=new Mueble ("hogar", 25000,6,"cafe", "madera");
$arrayMueble= $mueble -> getInfoMueble();
echo "<h1>mueble<h1>";
echo "<pre>";
print_r ($arrayMueble);
echo "</pre>";

$mesa = new Mesa("hogar", 25000, 7,"amarillo", "moderna", "grande");
$mesa ->setForma("redonda");
$arrayMesa=$mesa-> getInfoMesa();
echo "</pre>";
print_r($arrayMesa);
echo "</pre>";

