<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-sm-12">
                            <h3 class="text-center">CAPTURA DE EGRESOS</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal" data-original-title="test"
                            data-bs-target="#exampleModal">Agregar nuevo egreso</button>
                            <div class="d-flex justify-content-end">
                                <div style="font-size:20px;"><span class="badge badge-primary" style="width:25px;height:25px;">&nbsp;</span> Significa que el mes ya contiene legajos disponibles</div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div style="font-size:20px;"><span class="badge badge-danger" style="width:25px;height:25px;">&nbsp;</span> Significa que el mes aun no contiene legajos disponibles</div>
                            </div>
                        <div class="dt-ext table-responsive">
                            <table class="table table-striped egresos">
                                <thead>
                                    <tr>
                                        <th class="text-center">EJERCICIO FISCAL</th>
                                        <th class="text-center">MES</th>
                                        <th class="text-center">FUENTE DE FINANCIAMIENTO</th>
                                        <th class="text-center">ESTATUS</th>
                                        <th class="text-center">OPCIONES</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!--fin tabla-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo egreso</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ejercicio fiscal:</label>
                        <select class="form-control" id="ejercicioFiscalEgreso">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mes:</label>
                        <select class="form-control" id="mesEgreso">
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>
                            <option value="Abril">Abril</option>
                            <option value="Mayo">Mayo</option>
                            <option value="Junio">Junio</option>
                            <option value="Julio">Julio</option>
                            <option value="Agosto">Agosto</option>
                            <option value="Septiembre">Septiembre</option>
                            <option value="Octubre">Octubre</option>
                            <option value="Noviembre">Noviembre</option>
                            <option value="Diciembre">Diciembre</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fuente de financiamiento:</label>
                        <select class="form-control" id="fuenteFinanciamientoEgreso">
                            <option value="Cereso">Cereso</option>
                            <option value="Fism">Fism</option>
                            <option value="Faismun">Faismun</option>
                            <option value="Fortamun">Fortamun</option>
                            <option value="Participaciones">Participaciones</option>
                            <option value="Recursofiscales">Recursos fiscales</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>
                <button class="btn btn-secondary btnSaveEgreso" type="button">Guardar</button>
            </div>
        </div>
    </div>
</div>