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
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                            <input type="text" class="form-control" id="idEgresos" value="<?= $idegresos ?>" hidden>
                            <input type="text" class="form-control" id="tipo" value="<?= $tipo ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <h3 class="text-center">CAPTURA DE LEGAJOS</h3>
                        <h5 class="text-center text-success"><b id="tipoInformacion"></b></h5>
                        <h5 class="text-center"><b>EJERCICIO FISCAL:</b><span class="ejercicioFiscalEgreso"></span></h5>
                        <h5 class="text-center"><b>MES:</b> <span class="mesEgreso"></span></h5>
                        <h5 class="text-center"><b>FUENTE DE FINANCIAMIENTO:</b> <span class="fuenteEgreso"></span></h5>
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal" data-original-title="test"
                            data-bs-target="#exampleModal">Agregar nuevo legajo</button>
                            <div class="d-flex justify-content-end">
                                <div style="font-size:20px;"><span class="badge badge-primary" style="width:25px;height:25px;">&nbsp;</span> Significa que el legajo ya contiene polizas disponibles</div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div style="font-size:20px;"><span class="badge badge-danger" style="width:25px;height:25px;">&nbsp;</span> Significa que el legajo aun no contiene polizas disponibles</div>
                            </div>
                        <div class="dt-ext table-responsive">
                            <table class="table table-striped egresos">
                                <thead>
                                    <tr>
                                        <th class="text-center">NUMERO DE LEGAJO</th>
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
                <h5 class="modal-title" id="exampleModalLabel">Nuevo legajo</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Numero de legajo:</label>
                        <input class="form-control" type="number" id="numeroLegajo">  
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