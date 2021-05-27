<?php 

 require_once ('includes/conexion.php');
 
   $id= $_GET['id'];
   $SESSION['id']= $id;
   echo  $SESSION['id']

 ?>