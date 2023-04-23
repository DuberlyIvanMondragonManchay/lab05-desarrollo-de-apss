<div class="mx-5">
    <div class="row mt-3">
    <div class="card">
        <div class="col-md-12 col-lg-6">
                <div class="card-header">
                    <div class="card-title"><h3>Ejercicio #3</h3></div>
                </div>
                <div class="card-body">
                    <p>Una empresa dedicada al alquiler de automóvile cobra por día de alquiler
                        a una tarifa determinada. Como oferta promocional, la empresa aplica un
                        descuento igual al 15% del tarifa bruto. Además, la empresa obsequia 3 
                        lapiceros por cada día de alquiler. Dados la tarifa y el número de días 
                        de alquiler de un automóvil, diseñe un programa que determine el tarifa 
                        bruto, el tarifa del descuento, el tarifa neto a pagar y la cantidad de 
                        lapiceros de obsequio (5 puntos)</p>
                </div>
            </div>
            <div class="col">
                <h5 class="text-center">Programa</h5>
                <div class="row">
                    <div class="col">
                        <form method="POST">
                            <!-- INGRESAR TARIFA -->
                            <div class="mb-3">
                                <label for="tarifa" class="form-label">Tarifa:</label>
                                <div class="input-group">
                                    <span class="input-group-text">S/.</span>
                                    <input name="tarifa" id="tarifa" type="text" class="form-control" placeholder="50" required>
                                </div>
                            </div>
                            <!-- INGRESAR NUMERO DE DIAS -->
                            <div class="mb-3">
                                <label for="ndias" class="form-label">Número de dias:</label>
                                <div class="input-group">
                                    <input name="ndias" id="ndias" type="text" class="form-control" placeholder="10" required>
                                </div>
                            </div>    
                            <!-- ENVIAR -->
                            <div class="mb-3">
                                <input class="btn btn-success" type="submit" value="Calcular">
                            </div>
                        </form>
                    </div>
                    <?php if (isset($_POST['tarifa']) && isset($_POST['ndias'])) :?>
                        <!-- CREAMOS LAS VARIABLE -->
                        <?php
                        $tarifa=$_POST['tarifa'];
                        $nDias=$_POST['ndias'];
                        $importeBruto=$tarifa*$nDias;
                        $importeDescuento=500*(15/100);
                        $importeNeto=$importeBruto-$importeDescuento;
                        $lapiceros=3*$nDias
                        ?>
                        <div class="col">
                            <h6 class="text-success">Resultados:</h6>
                            <table class="table table-bordered border-success">
                                <tr>
                                    <th scope="row">Importe Bruto</th>
                                    <td><?=$importeBruto?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Importe Descuento</th>
                                    <td><?=$importeDescuento?></td>
                                    <td><b>S/.</b> </td>
                                </tr>
                                <tr>
                                    <th scope="row">Importe Neto</th>
                                    <td><?=$importeNeto?></td>
                                    <td><b>S/.</b></td>
                                </tr>
                                <tr>
                                    <th scope="row">Total de Lapiceros</th>
                                    <td colspan="2"><?=$lapiceros?></td>
                                </tr>
                            </table>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>