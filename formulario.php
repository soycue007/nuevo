<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include ('includes/bootstrap.php');?>
    <?php include ('includes/navbar.php'); ?>

    <title>Formulario</title>
</head>

<body style="background-color: rgb(50,50,50)">
    <?php navBar(); ?>
    <br><br>

    <div class="container">
        <div class="row">
			<div class="col-1"></div>
            <div class="col-5">
			<h3 style="color: rgb(198, 168, 125)"> <b>CONTACTANOS</b> </h3> <br>
			
			<p style="color: rgb(198, 168, 125)">Avenida Soarez Nº300 <br> Otra direccion NºX</p>
			<br>
			<p style="color: rgb(198, 168, 125)">Telefono: +54 2346 239823 <br> maildeejemplo@gmail.com </p>
			<br><br>
			<h6 style="color: rgb(198, 168, 125)">Contactanos con la informacion dada arriba <br> o completa el formulario de consulta</h6>
			</div>
            <div class="col-5">
			<h3 style="color: rgb(198, 168, 125)"> <b>DEJA TU PEDIDO</b></h3> <br>
                <form action="recepcion.php" method="post">
                    <div class="form-group">
                        <label style="color: rgb(198, 168, 125)" for="formGroupExampleInput">Nombre</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="nombre"
                            placeholder="Ingrese su nombre">

                    </div>
                    <div class="form-group"><br>
                        <label style="color: rgb(198, 168, 125)" for="formGroupExampleInput2">Correo</label>
                        <input type="email" class="form-control" id="formGroupExampleInput2" required name="correo"
                            placeholder="Ingrese su correo">
                    </div>

                    <div class="form-group"><br>
                        <label style="color: rgb(198, 168, 125)" for="textarea">Consulta</label>
                        <textarea class="form-control" id="editor1" name="mensaje" rows="5" cols="60"></textarea>
                    </div><br>
                    <button type="submit" class="btn btn-warning w-100">Enviar</button>
                </form>

            </div>
            <div class="col-1"></div>
        </div>
    </div>




</body>

</html>