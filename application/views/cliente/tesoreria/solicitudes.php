<div class="page-body">
    <div class="container-fluid">
        <div class="page-header">
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid" id="inicio">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-sm-8">
                            <h3>SOLICITUDES DE REQUISICIONES</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                            <input type="text" class="form-control" id="idUsuario" value="<?= $usuario ?>" hidden>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-success btn-sm" id="btnNuevaRequisicion">NUEVA REQUISICIÓN</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="table table-striped requisiciones">
                                <thead>
                                    <tr>
                                        <th>TIPO DE SOLICITUD</th>
                                        <th>NUMERO DE OFICIO</th>
                                        <th>FECHA DEL OFICIO</th>
                                        <th>PROGRAMA</th>
                                        <th>COMPONENTE</th>
                                        <th>ACTIVIDAD</th>
                                        <th>ESTATUS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalTipo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" id="titulo">
                    <h5>TIPO DE REQUISICIÓN</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">TIPO DE REQUISICIÓN</label>
                                <select class="form-control" id="tipo_requisicion" name="tipo_requisicion">
                                </select>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="button" class="btn btn-success btn-sm"
                                id="btnContinuar">CONTINUAR</button>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" id="btnAceptarModal">CANCELAR</button>
                </div>
            </div>
        </div>
    </div>
</div>