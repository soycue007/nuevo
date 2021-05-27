<?php
$precio=0;
$nombre='';
if ($_POST){
  
$precio = $_POST['precio'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad= $_POST['cantidad'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $nombre ?></h2>
    <h2><?php echo $precio ?></h2>
    <h2><?php echo $descripcion ?></h2>
    <h2><?php echo $cantidad ?></h2>
</body>
</html>