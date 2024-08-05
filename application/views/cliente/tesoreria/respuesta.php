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
                            <h3>REQUISICIÓN</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                            <input type="text" class="form-control" id="idRequisicion" value="<?= $requisicion ?>"
                                hidden>
                            <input type="text" class="form-control" id="idUsuario" value="<?= $usuario ?>" hidden>
                        </div>
                        <div class="col-sm-4" id="boton" hidden>
                            <button class="btn btn-danger btn-sm" id="btnCancelarRequisicion">CANCELAR</button>
                        </div>
                        <div class="col-sm-12" id="descripcion">

                        </div>
                        <div class="col-sm-12 text-center" id="descripcion">
                            <button class="btn btn-success" id="btnOficio">OFICIO</button>
                            <!-- <button class="btn btn-success" id="btnRequisicion">REQUISICIÓN</button> -->
                        </div>

                    </div>
                    <div class="card-body" id="insumos" hidden>
                        <div class="container">
                            <div class="dt-ext table-responsive">
                                <table class="table table-striped insumos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ARTICULO</th>
                                            <th>UNIDAD</th>
                                            <th>CANTIDAD SOLICITADA</th>
                                            <th>CANTIDAD APROBADA</th>
                                            <!-- <th></th> -->
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="vehiculos" hidden>
                        <div class="container">
                            <div class="dt-ext table-responsive">
                                <table class="table table-striped carros">
                                    <thead>
                                        <tr>
                                            <th>CANTIDAD</th>
                                            <th>SERVICIO</th>
                                            <th>JUSTIFICACIÓN</th>
                                            <th>ESTATUS</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card-body" id="arrendamientos" hidden>
                        <div class="container">
                            <div class="dt-ext table-responsive">
                                <table class="table table-striped arre">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ARTICULO</th>
                                            <th>CANTIDAD SOLICITADA</th>
                                            <th>CANTIDAD APROBADA</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>