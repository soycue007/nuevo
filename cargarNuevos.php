
<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$dia = date('Y-m-d');
$contador = 0;
$arregloNuevos[] = 7;
$arregloPrecioNuevos[]=7;
include "INCLUDES/conexion.php";
$consulta = "SELECT * FROM productos";
$productos = mysqli_query($conexion,$consulta);
$aux = mysqli_fetch_array($productos);
sort($aux['fechaDeSubida'],1);
while($aux['fechaDeSubida']){
    $arregloNuevos[$contador] = $aux['foto'];
    $arregloPrecioNuevos[$contador] = $aux['precio'];
    $contador++;
}
?>