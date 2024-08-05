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
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <h3 class="text-center">POLIZAS SIN REGISTRO DE LEGAJO</h3>
                        <div class="dt-ext table-responsive">
                            <table class="table table-striped tblpolizas">
                                <thead>
                                    <tr>
                                        <th class="text-center">NUMERO DE POLIZA</th>
                                        <th class="text-center">CONCEPTO DE LA POLIZA</th>
                                        <th class="text-center">FECHA DE LA POLIZA</th>
                                        <th class="text-center">BENEFICIARIO</th>
                                        <th class="text-center">FOLIO/CHEQUE/TRANSFERENCIA</th>
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
                <h5 class="modal-title titleModalSaveOrUpdate" id="exampleModalLabel">REGISTRAR POLIZA</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="col-sm-12 mb-2">
                        <label for="numero_recibo">EGRESO:</label>
                        <select class="form-control" id="listEgresos"></select>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <label for="numero_recibo">LEGAJO:</label>
                        <select class="form-control" id="listLegajos"></select>
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
