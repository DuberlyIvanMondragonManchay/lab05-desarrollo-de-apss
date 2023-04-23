<div class="mx-5">
    <div class="row mt-3">
    <div class="card">
        <div class="col-md-12 col-lg-6">
                <div class="card-header">
                    <div class="card-title"><h3>Ejercicio #2</h3></div>
                </div>
                <div class="card-body">
                    <p>Una fábrica de gaseosas ha decidido rebajar el precio de su gaseosa 
                        de 3 litros en 5% con la finalidad de igualar los precios de
                        la competencia. Adicionalmente, ofrece un descuento especial igual al 
                        7% del pgaseosa de la compra. Además, como incentivo especial,
                        obsequia dos caramelos por cada gaseosa adquirida.Dados el precio 
                        actual de la gaseosa y la cantidad de unidades adquiridas, diseñe un
                        programa que determine el nuevo precio de la gaseosa, el pgaseosa
                        de la compra, el pgaseosa del descuento, el pgaseosa a pagar y el 
                        obsequio (5 puntos).</p>
                </div>
            </div>
            <div class="col">
                <h5 class="text-center">Programa</h5>
                <div class="row">
                    <div class="col">
                        <form method="POST">
                            <!-- INGRESAR PRECIO DE LA GASEOSA -->
                            <div class="mb-3">
                                <label for="pgaseosa" class="form-label">Precio de la gaseosa:</label>
                                <div class="input-group">
                                    <span class="input-group-text">S/.</span>
                                    <input name="pgaseosa" id="pgaseosa" type="text" class="form-control" placeholder="10" required>
                                </div>
                            </div>
                            <!-- INGRESAR CANTIDAD DE UNIDADES -->
                            <div class="mb-3">
                                <label for="unidades" class="form-label">Cantidad de unidades:</label>
                                <div class="input-group">
                                    <input name="unidades" id="unidades" type="text" class="form-control" placeholder="5" required>
                                </div>
                            </div>
                            <!-- CALCULAR -->
                            <div class="mb-3">
                                <input class="btn btn-success" type="submit" value="Calcular">
                            </div>
                        </form>
                    </div>
                    <?php if (isset($_POST['pgaseosa']) && isset($_POST['unidades'])) :?>
                        <!-- CREAMOS LAS VARIABLE -->
                        <?php
                        $pgaseosa=$_POST['pgaseosa'];
                        $cantUnidades=$_POST['unidades'];
                        $nuevoPrecio=$pgaseosa-($pgaseosa*5)/100;
                        $importeCompra=$cantUnidades*$nuevoPrecio;
                        $importeDescuento=$importeCompra*(7/100);
                        $importePagar =$importeCompra-$importeDescuento;
                        $tcaramelos=$cantUnidades*2;
                        ?>
                        <div class="col">
                            <h6 class="text-success">Resultados:</h6>
                            <table class="table table-bordered border-success">
                                <tr>
                                    <th scope="row">Nuevo Precio</th>
                                    <td><?=$nuevoPrecio?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Importe Compra</th>
                                    <td><?=$importeCompra?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Importe del descuento</th>
                                    <td><?=$importeDescuento?></td>
                                    <td><b>S/.</b></td>
                                </tr>
                                <tr>
                                    <th scope="row">Importe a Pagar</th>
                                    <td><?=$importePagar?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Obsequi de Caramelos</th>
                                    <td colspan="2"><?=$tcaramelos?></td>
                                </tr>
                            </table>
                        </div>
                    <?php endif;?>
                </div>  
            </div>
        </div>
    </div>
</div>