<?php 
include "includes/conexion.php";

$categoria= $_POST['categoria'];
$nombre= strtoupper($_POST['nombre']);
$descripcion= $_POST['descripcion'];
$precio= $_POST['precio'];
$cantidad= $_POST['cantidad'];
$foto= addslashes(file_get_contents($_FILES['foto']['tmp_name']));

$query= "INSERT INTO productos (categoria, nombre, descripcion, precio, cantidad, foto)
VALUES('$categoria','$nombre', '$descripcion', '$precio', '$cantidad', '$foto')";

$resultado = mysqli_query($conexion, $query);
if($resultado)
header('location:administracion.php');
 ?>