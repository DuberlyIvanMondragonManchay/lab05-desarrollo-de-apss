<div class="mx-5">
    <div class="row mt-3">
    <div class="card">
        <div class="col-md-12 col-lg-6">
                <div class="card-header">
                    <div class="card-title"><h3>Ejercicio #1</h3></div>
                </div>
                <div class="card-body">
                    <p>Una empresa ha decidido otorgar a sus vendedores una bonificación de S/.
                        50 por cada hijo en edad escolar. El sueldo bruto se calcula sumando un 
                        sueldo básico de S/. 600 más una comisión que es igual al 7.5% del 
                        importe total vendido del mes y más la bonificación. por ley, todo 
                        vendedor está sujeto a un descuento del 11% del sueldo bruto. 
                        Dados el importe total vendido del mes y la cantidad de hijos en edad
                        escolar, diseñe un programa que determine la comisión, la bonificación, 
                        el sueldo bruto, el descuento y el sueldo neto de un vendedor (5 puntos).</p>
                </div>
            </div>
            <div class="col">
                <h5 class="text-center">Programa</h5>
                <div class="row">
                    <div class="col">
                        <form method="POST">
                            <!-- INGRESAR IMPORTE -->
                            <div class="mb-3">
                                <label for="importe" class="form-label">Importe total vendido de mes:</label>
                                <div class="input-group">
                                    <span class="input-group-text">S/.</span>
                                    <input name="importe" id="importe" type="text" class="form-control" placeholder="1500" required>
                                </div>
                            </div>
                            <!-- INGRESAR CANTIDAD DE HIJOS -->
                            <div class="mb-3">
                                <label for="hijos" class="form-label">Cantidad de hijos:</label>
                                <div class="input-group">
                                    <input name="hijos" id="hijos" type="text" class="form-control" placeholder="2" required>
                                </div>
                            </div>
                            <!-- BONIFICACIÓN -->
                            <div class="mb-3">
                                <label for="bonificasion" class="form-label">Bonificación:</label>
                                <div class="input-group">
                                    <span class="input-group-text">S/.</span>
                                    <input name="bonificasion" id="bonificasion" type="text" class="form-control" placeholder="50" value="50" required>
                                </div>
                            </div>
                            <!-- ENVIAR -->
                            <div class="mb-3">
                                <input class="btn btn-success" type="submit" value="Calcular">
                            </div>
                        </form>
                    </div>
                    <?php if (isset($_POST['importe']) && isset($_POST['hijos']) && isset($_POST['bonificasion'])) :?>
                        <!-- CREAMOS LAS VARIABLE -->
                        <?php
                        $importe=$_POST['importe'];
                        $cantHijos=$_POST['hijos'];
                        $bonificasion=$_POST['bonificasion'];
                        $sBase=600;
                        $comision=($importe*7.5)/100;
                        $totalBonificasion=($bonificasion*$cantHijos);
                        $sBruto=($sBase+$comision+$totalBonificasion);
                        $descuento=(($sBruto*11)/100);
                        $sNeto=($sBruto-$descuento);
                        ?>
                        <div class="col">
                            <h6 class="text-success">Resultados:</h6>
                            <table class="table table-bordered border-success">
                                <tr>
                                    <th scope="row">Sueldo base</th>
                                    <td><?=$sBase?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Comisión</th>
                                    <td><?=$comision?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Total Bonificación</th>
                                    <td><?=$totalBonificasion?></td>
                                    <td><b>S/.</b></td>
                                </tr>
                                <tr>
                                    <th scope="row">Sueldo bruto</th>
                                    <td><?=$sBruto?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Descuento</th>
                                    <td><?=$descuento?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Sueldo neto</th>
                                    <td><?=$sNeto?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                            </table>
                        </div>
                    <?php endif;?>
                </div>             
            </div>
        </div>
    </div>
</div>