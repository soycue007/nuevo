<?php 
     session_start();
if ($_SESSION['s_activa']== true)
{
require_once ('includes/conexion.php');
if(isset($_POST['actualizarBtn']))
{
	$id= $_POST['update_id'];
	$categoria= $_POST['categoria'];
	$nombre= strtoupper($_POST['nombre']);
	$descripcion= $_POST['descripcion'];
	$precio= $_POST['precio2'];
	$cantidad= $_POST['cantidad'];
    $foto=$_FILES['fotoNueva'];
    
//consulta por el producto que corresponde a esa id
	$qy_productos = "SELECT * FROM productos WHERE id='$id'";
	$productos = mysqli_query($conexion, $qy_productos);
	$row= mysqli_fetch_assoc($productos);
	

	
			if(empty($_FILES['fotoNueva']['tmp_name']))
			{
				
				 echo "entro";
				 $foto= addslashes($row['foto']);
				// si no ingresa una foto se toma la actual de la base de datos
			}
			else{
				echo " no entro";
				//el metodo file_get_contents pasa la imagen a bits
				$foto= addslashes(file_get_contents($_FILES['fotoNueva']['tmp_name']));
			}



	

//actualiza producto
	$query= "UPDATE productos SET categoria='$categoria', descripcion='$descripcion', nombre='$nombre', precio='$precio', cantidad='$cantidad', foto='$foto' WHERE id=$id";
	$result= mysqli_query($conexion,$query);



	if($result>0)
	{
		echo '<script>alert("echo")</script>';
		header('location:administracion.php');
	}else{
		echo '<script>alert("no echo")</script>';
	}

}

}
else
{
  header("location: login.php");
}


 ?>
