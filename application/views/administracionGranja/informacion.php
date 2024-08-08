<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="page-body" style=" margin-top: auto;">
    <div class="container-fluid" style="  margin-top: -38px;">
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
                            <h3 class="text-center">CAPTURA LA GRANJA</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal"
                            data-original-title="test" data-bs-target="#exampleModal">Agregar informacion</button>

                        <div class="dt-ext table-responsive">
                            <table class="table table-striped egresos">
                                <thead>
                                    <tr>
                                        <th class="text-center">Facebook</th>
                                        <th class="text-center">Telefono</th>
                                        <th class="text-center">Referencias</th>
                                       
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
                <h5 class="modal-title" id="exampleModalLabel">Informacion general</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                 
                    <div class="mb-3">
                        <label class="form-label">Facebook</label>
                        <input class="form-control" type="text" id="numero_poliza">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input class="form-control" type="text" id="numero_poliza">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ubicaiones referentes</label>
                        <input class="form-control" type="text" id="numero_poliza">
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