<?php
    function cargarNovedades(){
        include ('conexion.php');
        $qy_productos = "SELECT * FROM productos ORDER BY fechaDeSubida DESC LIMIT 12";
        $productos = mysqli_query($conexion, $qy_productos);  
        ?>
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">

            <div class="carousel">
                <div class="carousel__contenedor">
                    <button aria-label="Anterior" class="carousel__anterior">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="carousel__lista">
                    <?php
                           while ($aux = mysqli_fetch_array($productos)){                                                                                   
                    ?>

                        <div class="carousel__elemento">
                        <?php
                            if($aux['enOferta']>0){
                                ?>
                                     <h6 style="color: rgb(198, 168, 125)">Descuento:
                                <?php echo $aux['enOferta']; ?>%</h6>
                                <?php
                            }
                            else{
                                ?>
                                    <h6 style="color: rgb(50,50,50)">%</h6>
                                <?php
                            }
                        ?>
                            <a href="productoDetalle.php?nombre=<?php echo $aux['nombre'];?>"><img class="carousel__imagen"
                                    src="data:image/jpg;base64,<?php echo base64_encode($aux['foto']); ?>"></a>
                                    <?php
                                if($aux['enOferta']>0){
                                    ?>
                                    <h6 style="color: rgb(198, 168, 125)"><s>Precio:
                                            $<?php echo $aux['precio']; ?></h6></s>
                                    <h6 style="color: rgb(198, 168, 125)">Precio:
                                        $<?php  echo $aux['precio']-(($aux['precio']*$aux['enOferta'])/100); ?>
                                    </h6>
                                    <?php
                                }
                                else{
                                    ?>
                                    <h6 style="color:rgb(198, 168, 125)">Precio: <?php echo $aux['precio'];?></hh6>
                                    <?php
                                }
                            
                            ?>
                        </div>
                      <?php
                         } ?>  
                        
                    </div>

                    <button aria-label="Siguiente" class="carousel__siguiente">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <br>
                <div role="tablist" class="carousel__indicadores"></div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<?php
    }
?>