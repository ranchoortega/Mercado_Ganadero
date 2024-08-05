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
                            <h3>PRESUPUESTO DE EGRESOS</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <label for="ejercicio">Ejercicio Fiscal:</label>
                                <select name="ejercicio" id="ejercicio" class="form-control">
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
                            </div>
                            <div class="col-sm-8 mb-3">
                                <label for="numero">Número Presupuesto:</label>
                                <input id="numero" class="form-control">
                            </div>
                            <div class="col-sm-12 mb-3 text-center">
                                <button class="btn btn-success" id="btnCrear">CREAR</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="presupuestos">

    </div> -->

    <div id="tablasPresupuestos">

    </div>

    <div class="modal fade" id="modalFondo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" id="titulo">
                    NUEVO FONDO
                </div>
                <div class="modal-body">
                    <input id="id_fondo" name="id_fondo" hidden>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="fondo" class="form-label">FONDO</label>
                                <select class="form-control" id="fondo" name="fondo">
                                    <option value="RECURSOS PROPIOS">RECURSOS PROPIOS</option>
                                    <option value="PARTICIPACIONES">PARTICIPACIONES</option>
                                    <option value="CONVENIO CERESO">CONVENIO CERESO</option>
                                    <option value="FORTAMUN DF">FORTAMUN DF</option>
                                    <option value="FISM DF">FISM DF</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" id="btnCancelarModalFondo">CANCELAR</button>
                    <button type="button" class="btn btn-success btn-sm" id="btnAceptarModalFondo">GUARDAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCapitulo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" id="titulo">
                    NUEVO CAPITULO
                </div>
                <div class="modal-body">
                    <input id="id" name="id" hidden>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="capitulo" class="form-label">CAPITULO</label>
                                <select class="form-control" id="capitulo" name="capitulo">

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" id="btnCancelarModalCapitulo">CANCELAR</button>
                    <button type="button" class="btn btn-success btn-sm" id="btnAceptarModalCapitulo">GUARDAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalConcepto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" id="titulo">
                    NUEVO CONCEPTO
                </div>
                <div class="modal-body">
                    <input id="idCapitulo" name="idCapitulo" hidden>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="concepto" class="form-label">CONCEPTO</label>
                                <select class="form-control" id="concepto" name="concepto">

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" id="btnCancelarModalConcepto">CANCELAR</button>
                    <button type="button" class="btn btn-success btn-sm" id="btnAceptarModalConcepto">GUARDAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalPartida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="tituloPartida">NUEVA PARTIDA</h3>
                    <!-- <button type="button" class="btn btn-danger btn-sm" id="btnEliminarPartida" hidden>ELIMINAR</button> -->
                </div>
                <div class="modal-body">
                    <input id="idConcepto" name="idConcepto">
                    <!-- <input id="idPartida" name="idPartida"> -->
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="partida" class="form-label">PARTIDA</label>
                                <select class="form-control" id="partida" name="partida">
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-2">
                            <div class="mb-3">
                                <label for="especifica" class="form-label">ESPECIFICA</label>
                                <input class="form-control" id="especifica" name="especifica" type="number" value="0">
                            </div>
                        </div> -->
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">CANTIDAD ASIGNADA</label>
                                <input class="form-control" id="cantidad" name="cantidad" type="number">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" id="btnCancelarModalPartida">CANCELAR</button>
                    <button type="button" class="btn btn-success btn-sm" id="btnAceptarModalPartida">GUARDAR</button>
                </div>
            </div>
        </div>
    </div>

</div>