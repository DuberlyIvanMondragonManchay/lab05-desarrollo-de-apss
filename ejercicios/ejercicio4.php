<div class="mx-5">
    <div class="row mt-3">
    <div class="card">
        <div class="col-md-12 col-lg-6">
                <div class="card-header">
                    <div class="card-title"><h3>Ejercicio #4</h3></div>
                </div>
                <div class="card-body">
                    <p>Una tienda ha puesto en oferta la venta de conos de CD de 100 unidades ofreciendo dos 
                        descuentos de 5%. El primer descuento se aplica al pcono de la compra. El segundo 
                        descuento se aplica a la resta del cono de la compra menos el pcono del primer descuento. 
                        Dados el precio del cono y la cantidad de conos adquiridos,diseñe un programa que determine 
                        el pcono de la compra, el pcono del descuento total y el pcono a pagar (5 puntos).</p>
                </div>
            </div>
            <div class="col">
                <h5 class="text-center">Programa</h5>
                <div class="row">
                    <div class="col">
                        <form method="POST">
                            <!-- PRECIO DEL CONO -->
                            <div class="mb-3">
                                <label for="pcono" class="form-label">Precio del cono:</label>
                                <div class="input-group">
                                    <span class="input-group-text">S/.</span>
                                    <input name="pcono" id="pcono" type="text" class="form-control" placeholder="20" required>
                                </div>
                            </div>
                            <!-- CANTIDAD DE CONOS -->
                            <div class="mb-3">
                                <label for="cconos" class="form-label">Cantidad de conos:</label>
                                <div class="input-group">
                                    <input name="cconos" id="cconos" type="text" class="form-control" placeholder="5" required>
                                </div>
                            </div>
                            <!-- ENVIAR -->
                            <div class="mb-3">
                                <input class="btn btn-success" type="submit" value="Calcular">
                            </div>
                        </form>
                    </div>
                    <?php if (isset($_POST['pcono']) && isset($_POST['cconos'])) :?>
                        <!-- CREAMOS LAS VARIABLE -->
                        <?php
                        $pcono=$_POST['pcono'];
                        $cantConos=$_POST['cconos'];
                        $descuento1=0.05*10000;
                        $descuento2=0.05*9500;
                        $importeCompra=$pcono*$cantConos*100;
                        $importeDescuento=$descuento1+$descuento2;
                        $importePagar=$importeCompra-$importeDescuento;
                        ?>
                        <div class="col">
                            <h6 class="text-success">Resultados:</h6>
                            <table class="table table-bordered border-success">
                                <tr>
                                    <th scope="row">Importe de la compra</th>
                                    <td><?=$importeCompra?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Importe del descuento total</th>
                                    <td><?=$importeDescuento?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Importe a pagar</th>
                                    <td><?=$importePagar?></td>
                                    <td><b>S/.</b></td>
                                </tr>
                            </table>
                        </div>
                    <?php endif;?>
                </div>                        
            </div>
        </div>
    </div>
</div>