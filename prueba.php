<?php
$valor="1";
if (!$_POST){
    $valor = "nulo";
}
else{
    $valor = $_POST['boton'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1> $valor </h1>";
    ?>
</body>
</html>