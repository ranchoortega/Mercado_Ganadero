<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="page-body" style=" margin-top: auto;">
    <div class="container-fluid" style="  margin-top: -38px;">
        <div class="page-header">
        <input class="form-control" type="text" id="valorLong" hidden>

        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-sm-12">
                            <h3 class="text-center">ANIMALES</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <button class="btn btn-primary mb-3" type="button" data-bs-toggle="modal"
                            data-original-title="test" data-bs-target="#newAnimal" id="btnNew">Agregar
                            animal</button>

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
                        <!--fin tabla-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal-->






<div class="modal fade" id="newAnimal" tabindex="-1" role="dialog" aria-labelledby="animalLabel" aria-hidden="true"
    style="overflow-x: hidden;
    overflow-y: auto;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="animalLabel">DESCRIPCION</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12" style=" display: flex;">
                        <div class="mb-3">
                            <label for="raza" class="form-label">RAZA </label>
                            <input class="form-control" type="text" id="raza">
                            <p class="text-danger msgpraza"></p>

                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">EDAD</label>
                            <input class="form-control" type="text" id="edad">
                            <p class="text-danger msgpedad"></p>

                        </div>
                    </div>
                    <div class="col-sm-12" style=" display: flex;">
                        <div class="mb-3">
                            <label for="genero" class="form-label">GENERO</label>
                            <input class="form-control" type="text" id="genero">
                            <p class="text-danger msgpgenero"></p>

                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">PRECIO</label>
                            <input class="form-control" type="text" id="precio">
                            <p class="text-danger msgpprecio"></p>

                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-6">
                            <label class="form-label">DESCRIPCION</label>
                            <textarea class="form-control" id="descripcion" rows="3"></textarea>
                            <p class="text-danger msgpdescripcion"></p>


                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-6">
                            <label class="form-label">TIPO</label>
                            <select class="form-control" id="tipo">
                                <option value="">SELECCION LA ESPECIE</option>
                                <option value="Reses">Reses</option>
                                <option value="Chivos">Chivos</option>
                                <option value="Aves">Aves</option>
                                <option value="Cerdos">Cerdos</option>
                            </select>
                            <p class="text-danger msptipo"></p>


                        </div>
                    </div>
                    <div class="col-sm-12 foto1" style=" display: flex;">
                        <div class="mb-3">
                            <label for="foto1" class="form-label">FOTO 1</label>
                            <input class="form-control" type="file" id="foto1">
                            <p class="text-danger msgpfoto1"></p>


                        </div>
                        <div class="mb-3 foto2">
                            <label for="foto2" class="form-label">FOTO 2</label>
                            <input class="form-control" type="file" id="foto2">
                            <p class="text-danger msgpfoto2"></p>

                        </div>
                    </div>
                    <div class="dt-ext table-responsive tablaAnimales" style="display: none;" >
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
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal" id="cerrar">Cerrar</button>
                <button class="btn btn-secondary btnSaveAnimal" type="button">Guardar</button>

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