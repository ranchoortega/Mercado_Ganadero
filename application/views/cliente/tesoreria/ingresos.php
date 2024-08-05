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
        animation: spin 9s linear infinite;
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
<div class="page-body">
    <div id="loader-overlay">
        <div id="loader"></div>
    </div>
    <div class="container-fluid">
        <div class="page-header">
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" id="inicio">
                <div class="card">
                    <div class="card-header">
                        <div class="col-sm-12">
                            <h3 class="text-center">CAPTURA DE INGRESOS</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                            <input type="text" class="form-control" id="idIngreso" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal"
                            data-original-title="test" data-bs-target="#exampleModal">Agregar nuevo ingreso</button>
                        <div class="dt-ext table-responsive">
                            <table class="table table-striped ingresos">
                                <thead>
                                    <tr>
                                        <th>CATEGORÍA</th>
                                        <th># RECIBO</th>
                                        <th>CONCEPTO</th>
                                        <th>FECHA</th>
                                        <th>EVIDENCIA</th>
                                        <th>OPCIONES</th>
                                        <th>OPCIONES</th>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Ingreso</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="categoria" class="col-form-label">Categoría</label>
                            <select class="js-example-basic-multiple col-sm-12" id="categoria" multiple="multiple">

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="subCategoria" class="col-form-label">Subcategoría</label>
                            <select class="js-example-basic-multiple col-sm-12" id="subCategoria" multiple="multiple">

                            </select>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="numero_recibo">Número de poliza:</label>
                                <input type="text" class="form-control" id="numero_recibo">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="concepto">Concepto:</label>
                                <input type="text" class="form-control" id="concepto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="concepto">Fecha:</label>
                                <input type="date" class="form-control" id="fecha" value="<?= $fecha ?>">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="monto">Monto:</label>
                                <div class="input-group pill-input-group"><span class="input-group-text">$ </span>
                                    <input class="form-control" type="number" id="monto">
                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="exampleInputEmail1" class="form-label">Fuente de financiamiento:</label>
                            <select class="form-control" id="fuenteFinanciamientoigreso">
                                <option value="Cereso">Cereso</option>
                                <option value="Fism">Fism</option>
                                <option value="Faismun">Faismun</option>
                                <option value="Fortamun">Fortamun</option>
                                <option value="Participaciones">Participaciones</option>
                                <option value="Recursofiscales">Recursos fiscales</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="evidencia">Evidencia:</label>
                            <input type="file" class="form-control" id="evidencia">
                            <input type="text" class="form-control" id="ruta" hidden>
                        </div>
                        <div class="col-sm-12 mb-3 text-center">
                            <button class="btn btn-success" id="btnAgregarIngreso">Capturar</button>
                            <img id="cargaIngreso" src='<?= base_url() ?>template/recursos/img/spiner.gif' height='30px'
                                hidden>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal" id="btnCerrarIngresos">Cerrar</button>
            </div>
        </div>
    </div>
</div>