
<?php 

require_once 'includes/conexion.php';


$alerta='';
session_start();
if ($_POST)
{
	if (empty($_POST['nombre']) && empty($_POST['correo']))
	{
		$alerta= '<h6 class="alert alert-danger">Los dos campos son obligatorios </h6>';


	}else
	{
		$_SESSION['nombre'] =trim(filter_var( $_POST['nombre'],FILTER_SANITIZE_STRING));
		$_SESSION['correo'] = trim(filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL));
		$_SESSION['mensaje'] =trim (filter_var( $_POST['mensaje'],FILTER_SANITIZE_STRING));
		$nombre= $_SESSION['nombre'];
		$correo= $_SESSION['correo'];
		$mensaje= $_SESSION['mensaje'];
		// $mensaje= json_encode($mensaje);
		?>
		
		<?php 

		$insertconsulta = "INSERT INTO consultas (nombre,correo,mensaje) VALUES ('$nombre','$correo','$mensaje')";
		$query= mysqli_query($conexion,$insertconsulta) or die("Error en la query");
		include 'enviar/enviar.php';
		
	}

}
else
{
	$alerta= '<h1>No ingreso datos</h1>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Alerta</title>
</head>
<body>
	<?php include ('includes/scripts.php'); ?>
	<script src="js/app.js"></script>

 <!-- <input type="hidden" id="variable_sesion" value="<?php echo $nombre?> "> -->

	<?php echo "<script languaje='javascript' type='text/javascript'>
                alerta();
            </script>" ?>

</body>
</html>


