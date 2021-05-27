<?php
function cargarOtros(){
    include ('conexion.php');
    $contador = 0;
    $arregloPrecio[]=12;
    $arregloFoto[]=12;
    $arregloDescripcion[]=12;
    $arregloNombre[]=12;
    $qy_productos = "SELECT * FROM productos ORDER BY fechaDeSubida ASC";
    $productos = mysqli_query($conexion, $qy_productos);
    while ($aux = mysqli_fetch_array($productos)){
        $arregloPrecio[$contador] = $aux['precio'];
        $arregloFoto[$contador] = $aux['foto'];
        $arregloDescripcion[$contador] = $aux['descripcion'];
        $arregloNombre[$contador] = $aux['nombre'];  
        $contador++;
    }
    ?>

<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">

            <div class="carousel">
                <div class="carousel__contenedor">
                    <button aria-label="Anterior" class="carousel__anterior2">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="carousel__lista2">
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[0]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[0]); ?>"></a>
                            <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[0]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[1]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[1]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[1]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[2]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[2]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[2]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[3]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[3]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[3]?></h6>
                        </div>


                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[4]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[4]); ?>"></a>
                            <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[4]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[5]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[5]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[5]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[6]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[6]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[6]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[7]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[7]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[7]?></h6>
                        </div>


                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[8]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[8]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[8]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[0]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[0]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[0]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[0]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[0]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[0]?></h6>
                        </div>
                        <div class="carousel__elemento">
                            <a href="productoDetalle.php?nombre=<?php echo $arregloNombre[0]?>" target="_blank"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($arregloFoto[0]); ?>"></a>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $arregloPrecio[0]?></h6>
                        </div>
                        
                    </div>

                    <button aria-label="Siguiente" class="carousel__siguiente2">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <br>
                <div role="tablist" class="carousel__indicadores2"></div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<?php
}
?>