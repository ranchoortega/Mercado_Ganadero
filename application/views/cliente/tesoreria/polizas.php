<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #loader-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
    }

    #loader {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #2b786a;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: spin 2s linear infinite;
    }

    .spinner {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #2b786a;
        animation: spin 1s linear infinite;
        margin: 20px auto;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
<div class="page-body" id="formulario">
    <div class="container-fluid">
        <div class="page-header"></div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                            <input type="text" class="form-control" id="idLegajo" value="<?= $idLegajo ?>" hidden>
                            <input type="text" class="form-control" id="tipo" value="<?= $tipo ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <h3 class="text-center">CAPTURA DE POLIZAS</h3>
                        <h5 class="text-center text-success"><b>INFORMACIÓN DEL LEGAJO</b></h5>
                        <h5 class="text-center"><b>LEGAJO <span class="numeroLegajo"></span></b></h5>
                        <a class="btn btn-primary btnNewPoliza mb-3">Nueva poliza</a>
                        <div class="dt-ext table-responsive">
                            <table class="table table-striped egresos">
                                <thead>
                                    <tr>
                                        <th class="text-center">NUMERO DE POLIZA</th>
                                        <th class="text-center">CONCEPTO DE LA POLIZA</th>
                                        <th class="text-center">FECHA DE LA POLIZA</th>
                                        <th class="text-center">BENEFICIARIO</th>
                                        <th class="text-center">FOLIO/CHEQUE/TRANSFERENCIA</th>
                                        <th class="text-center">ESTATUS</th>
                                        <th class="text-center">PDF DESGLOZADO</th>
                                        <th class="text-center">PDF POLIZA</th>
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
<div class="modal fade" id="modalNewPoliza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title titleModalSaveOrUpdate" id="exampleModalLabel">Nueva poliza</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" class="form-control" id="idPoliza">
                    <div class="col-sm-12 mb-2">
                        <label for="numero_recibo">Número de poliza:</label>
                        <input type="text" class="form-control" id="numeroPoliza">
                        <p class="text-danger msgnumeroPoliza"></p>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="concepto">Concepto de la poliza:</label>
                        <input type="text" class="form-control" id="concepto">
                        <p class="text-danger msgconcepto"></p>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="numero_recibo">Fecha de la poliza:</label>
                        <input type="date" class="form-control" id="fechaPoliza">
                        <p class="text-danger msgfechaPoliza"></p>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="concepto">Beneficiario:</label>
                        <input type="text" class="form-control" id="beneficiarioPoliza">
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="numero_recibo">Folio/Cheque/Transferencia:</label>
                        <input type="text" class="form-control" id="folioPoliza">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-sm-12 mb-3">
                    <div class="text-center">
                        <button class="btn btn-primary btnSavePoliza">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--otro modal-->
<!--modal-->
<div class="modal fade" id="modalCargarDocumentacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cargar documentación</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" class="form-control" id="idPolizaDocumentacion">
                    <div class="col-sm-12 mb-2">
                        <label for="polizaderegistro">Tipo de documento:</label>
                        <select class="form-control" id="tipoDocumento"></select>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="polizaderegistro">Archivo:</label>
                        <input type="file" class="form-control" id="documentoFilePolizaa">
                    </div>
                    <div class="col-sm-12 mt-5">
                        <div id="loader-overlay">
                            <div id="loader"></div>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary btnSaveDocumentoNew">Guardar</a>
                        </div>
                    </div>
                    <h5 class="text-center mt-5"><b>POLIZA <span class="numeroPolizaN"></span></b></h5>
                    <h5 class="text-center"><b>CONCEPTO <span class="conceptoPolizaN"></span></b></h5>
                </form>
                <div class="dt-ext table-responsive">
                    <table class="table table-striped documentospoliza">
                        <thead>
                            <tr>
                                <th class="text-center">DOCUMENTO</th>
                                <th class="text-center">TIPO DOCUMENTO</th>
                                <th class="text-center">OPCIONES</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!--modal documento-->
<!--modal-->
<div class="modal fade" id="modalUpdateDocumento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color:#000000;color:#ffffff;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar documento</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" class="form-control" id="idDocumentoUpdateDoc">
                    <input type="hidden" class="form-control" id="idPolizaUpdateDoc">
                    <div class="col-sm-12 mb-3">
                        <label for="tipoDocumentoUpdate">Tipo de documento:</label>
                        <select class="form-control" id="tipoDocumentoUpdate"></select>
                    </div><br>
                    <iframe id="contenedorPdfEdidt" src="" style="width:100%; height:500px;" frameborder="0"></iframe>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-sm-12 mb-3">
                    <div class="text-center">
                        <button
                            class="btn btn-primary btnActualizarDocumentoDePoliza">Actualizar</button>&nbsp;&nbsp;<button
                            class="btn btn-danger btnEliminarDocumentoDePoliza">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--otro modal-->
<!--modal-->
<div class="modal fade" id="modalDocsDesglosados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DOCUMENTOS POLIZA <span
                        class="noPolizaDesglozada"></span></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="listDoc">
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!--otro modal-->
<!--modal-->
<div class="modal fade" id="modalDocsJuntos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DOCUMENTOS POLIZA <span class="noPoliza"></span></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="contenedorPrincipalDePdf">
                    <div style="display: flex; justify-content:center;align-items:center;">
                        <div class="spinner" id="contenedorCargandodd"></div>
                    </div>
                    <iframe id="pdfComplete" src="" style="width:100%; height:700px;" frameborder="0"></iframe>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!--otro modal-->