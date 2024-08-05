<div class="page-body" id="formulario">
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
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                            <input type="text" class="form-control" id="idPoliza" value="<?= $idPoliza ?>" hidden>
                            <input type="text" class="form-control" id="tipo" value="<?= $tipo ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <h3 class="text-center">CAPTURA DE DOCUMENTOS</h3>
                        <h5 class="text-center text-success">INFORMACIÓN DE LA POLIZA</h5>
                        <h5 class="text-center"><span class="numeroPoliza"></span></h5>
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal"
                            data-original-title="test" data-bs-target="#exampleModal"  id="btnNuevoDoc">Agregar nuevo documento</button>
                        <div class="dt-ext table-responsive">
                            <table class="table table-striped tablaArchivos">
                                <thead>
                                    <tr>
                                        <th>Numero de pdf</th>
                                        <th>Url</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
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
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo documento</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="row">
                        <div class="col-sm-12 mb-3"  id="divFile" hidden>
                            <label for="concepto">Documento:</label>
                            <div class="input-group">
                                <input class="form-control" id="inputFilePoliza" type="file"
                                    placeholder="Seleccione un documento">
                                <button class="btn btn-primary" id="btnAarchivosExpediente">Subir archivo</button>
                            </div>
                        </div>
                        <div id="22292072" class="mt-3" style="display: flex;justify-content: center;"></div>

                        <div class="col-sm-12 mb-3">
                            <label for="polizaderegistro">Tipo de documento:</label>
                            <select class="form-control" id="tipoDocumento"></select>
                        </div>
                        <!-- <div class="col-sm-6 mb-3">
                            <label for="nombreCampo">Nombre del campo:</label>
                            <input type="text" class="form-control" id="nombreCampo">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="valorCampo">Valor del campo:</label>
                            <input type="text" class="form-control" id="valorCampo">
                        </div> -->
                        <!-- <div class="col-sm-12 mb-3">
                            <label for="nombreArchivoFile">Descripción del archivo:</label>
                            <input type="text" class="form-control" id="nombreArchivoFile">
                        </div> -->



                    </div>
                    <div class="row" id="campos">

                    </div>
                    <div class="row">
                        <div id="pdf-controls" class="col-sm-12 mb-3">
                            <label for="page" style="display: flex;justify-content: space-around;">AGREGAR LAS PAGINAS
                                DE INICO Y FINAL</label>
                            <div style="display: flex;justify-content: center;" class=" mb-3">

                                <span
                                    style="    font-size: 14px; border-color: #e6edef; color: #717171; padding-top: 6px;">
                                    Inicio</span>
                                <input type="number" id="page-number-inicio" min="1" value="1"
                                    class="form-control d-inline-block" style="width: 70px;">

                                <span
                                    style="    font-size: 14px; border-color: #e6edef; color: #717171; padding-top: 6px;">
                                    Final</span>
                                <input type="number" id="page-number-final" min="1" value="1"
                                    class="form-control d-inline-block" style="width: 70px;">



                                <!--<button id="go-to-page" class="btn btn-danger">Agregar Pag</button>-->
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <div class="text-center">
                                <a href="javascript:;" class="btn btn-primary btnAddCampo" hidden>Agregar valores</a>
                            </div>
                        </div>
                    </div>
                    <div class="dt-ext table-responsive divTabla mb-3" hidden>
                        <table class="table table-striped tablaCampos">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Datos</th>
                                    <th>Inicio</th>
                                    <th>Final</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <div class="dt-ext table-responsive divTablaView mb-3" hidden>
                        <table class="table table-striped tablaCamposView">
                            <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Datos</th>
                                    <th>Inicio</th>
                                    <th>Final</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btnCerrarDocumento" type="button" data-bs-dismiss="modal">Cerrar</button>
                <button class="btn btn-secondary btnSaveDocumentoFile" type="button">Guardar</button>
            </div>
        </div>
    </div>
</div>