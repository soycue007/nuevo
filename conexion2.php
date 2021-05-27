<?php

try{

    $pdo = new PDO('mysql:host=localhost;dbname=joyeria','root','');

    echo "conexion EXITOSA";


}
catch(PDOExeption $e){

    print "error",$e ->getMessage()."<br>";
    die();
}




?>