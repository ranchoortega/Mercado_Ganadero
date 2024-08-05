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
                    <div class="card-header">
                        <div class="col-sm-12">
                            <h3 class="text-center">SOLICITUD DE SERVICIOS</h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                            <input type="text" class="form-control" id="idUsuario" value="<?= $usuario ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="tipoSolicitud">Tipo de solicitud:</label>
                                <select name="tipoSolicitud" id="tipoSolicitud" class="form-control">
                                    <option value="0">Selecciona un tipo</option>
                                    <option value="servicio de alimentos">Alimentos</option>
                                    <option value="mantenimiento / reparación equipo de computo">Mantenimiento de computo</option>
                                    <option value="mantenimiento de vehiculos">Mantenimiento vehicular</option>
                                    <option value="servicios profecionales">Servicios profesionales</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="fechaPedido">Fecha del pedido:</label>
                                <input name="fechaPedido" id="fechaPedido" class="form-control" type="date" value="<?= $fecha ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="programa">Programa:</label>
                                <select name="programa" id="programa" class="form-control">
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="componente">Componente:</label>
                                <select name="componente" id="componente" class="form-control">
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="actividad">Actividad:</label>
                                <select name="actividad" id="actividad" class="form-control">
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="meta">Meta:</label>
                                <input type="text" class="form-control" id="meta">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="meta">Numero de oficio:</label>
                                <input type="text" class="form-control" id="oficio">
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="fecha_expedicion">Fecha de expedición de oficio:</label>
                                <input type="date" class="form-control" id="fecha_expedicion">
                            </div>
                        </div>
                        <hr>

                        <div id="tablaAlimentos" hidden>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="articulo">Articulo:</label>
                                    <input type="text" name="articulo" id="articulo" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <label for="unidad">Unidad:</label>
                                    <input type="text" name="unidad" id="unidad" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <label for="cantidad">Cantidad:</label>
                                    <input type="number" name="cantidad" id="cantidad" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3 text-center">
                                    <button type="button" class="btn btn-success bntAgregarAlimento" style="margin-top:15px;">AGREGAR</button>
                                </div>
                            </div>

                            <div class="container">
                                <div class="dt-ext table-responsive">
                                    <table class="table table-striped insumos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ARTICULO</th>
                                                <th>UNIDAD</th>
                                                <th>CANTIDAD</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="tablaServProf">
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="articulo">Articulo:</label>
                                    <input type="text" name="articulo" id="articulo" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <label for="unidad">Unidad:</label>
                                    <input type="text" name="unidad" id="unidad" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <label for="cantidad">Cantidad:</label>
                                    <input type="number" name="cantidad" id="cantidad" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3 text-center">
                                    <button type="button" class="btn btn-success bntAgregar" style="margin-top:15px;">AGREGAR</button>
                                </div>
                            </div>

                            <div class="container">
                                <div class="dt-ext table-responsive">
                                    <table class="table table-striped insumos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ARTICULO</th>
                                                <th>UNIDAD</th>
                                                <th>CANTIDAD</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br><br><br><br>

                        <div class="row">

                            <div class="col-sm-12 mb-3 text-center">
                                <button class="btn btn-success" id="btnAgregarInsumos">Capturar</button>
                                <img id="cargaInsumos" src='<?= base_url() ?>template/recursos/img/spiner.gif' height='30px' hidden>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>