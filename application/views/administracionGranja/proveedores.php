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
                            <h3 class="text-center">PROVEEDORES</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal"
                            data-original-title="test" data-bs-target="#exampleModal" hidden>Agregar
                            informacion</button>

                        <div class="dt-ext table-responsive">
                            <table class="table table-striped tablaProveedores">
                                <thead>
                                    <tr>
                                        <th class="text-center">PROVEEDORES</th>
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
                <h5 class="modal-title" id="exampleModalLabel">ANIMALES</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="dt-ext table-responsive">
                        <table class="table table-striped tablaDescripcion">
                            <thead>
                                <tr>
                                    <th class="text-center">RAZA</th>
                                    <th class="text-center">OPCIONES</th>


                                </tr>
                            </thead>
                        </table>
                    </div>


                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="descripcionModal" tabindex="-1" role="dialog" aria-labelledby="descripcionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descripcionModalLabel">DESCRIPCION</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12" style=" display: flex;">
                        <div class="mb-3">
                            <label for="raza" class="form-label">RAZA </label>
                            <input class="form-control" type="text" id="raza">
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">EDAD</label>
                            <input class="form-control" type="text" id="edad">
                        </div>
                    </div>
                    <div class="col-sm-12" style=" display: flex;">
                        <div class="mb-3">
                            <label for="genero" class="form-label">GENERO</label>
                            <input class="form-control" type="text" id="genero">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">PRECIO</label>
                            <input class="form-control" type="text" id="precio">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-6">
                            <label class="form-label">DESCRIPCION</label>
                            <textarea class="form-control" id="descripcion" rows="3"></textarea>

                        </div>
                    </div>
                    <div class="col-sm-12" style=" display: flex;">
                        <div class="mb-3">
                            <label for="ubicacion_no_hombres" class="form-label">FECHA </label>
                            <input class="form-control" type="date" id="fecha">
                        </div>
                        <div class="mb-3">
                            <label for="ubicacion_no_mujeres" class="form-label">HORA</label>
                            <input class="form-control" type="time" id="hora">
                        </div>
                    </div>

                    <div class="dt-ext table-responsive">
                        <table class="table table-striped tablaAnimal">
                            <thead>
                                <tr>
                                   
                                    <th class="text-center">OPCIONES</th>


                                </tr>
                            </thead>
                        </table>
                    </div>


                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="animalMode" tabindex="-1" role="dialog" aria-labelledby="animalModeLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="animalModeLabel">FOTOS</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="dt-ext table-responsive">
                        <img id="imgAnimales" src="" alt="animal" style="width:100%">
                    </div>


                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
