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
                            <h3 class="text-center" id="titulo"></h3>
                            <input type="text" class="form-control" id="idMunicipio" value="<?= $municipio ?>" hidden>
                            <input type="text" class="form-control" id="idUsuario" value="<?= $usuario ?>" hidden>
                            <input type="text" class="form-control" id="idTipo" value="<?= $tipo ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="formPLM" hidden>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="fechaPedido">Fecha del pedido:</label>
                                    <input name="fechaPedido" id="fechaPedido" class="form-control" type="date"
                                        value="<?= $fecha ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="meta">Numero de oficio:</label>
                                    <input type="text" class="form-control" id="oficio">
                                </div>
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
                                <hr>
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
                                    <button type="button" class="btn btn-success bntAgregar"
                                        style="margin-top:15px;">AGREGAR</button>
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
                            </div><br>

                            <div class="row">

                                <div class="col-sm-12 mb-3 text-center">
                                    <button class="btn btn-success" id="btnAgregarPLM">Capturar</button>
                                    <img id="cargaPLM" src='<?= base_url() ?>template/recursos/img/spiner.gif'
                                        height='30px' hidden>
                                </div>
                            </div>
                        </div>

                        <div id="formAlimentos" hidden>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="fechaPedidoA">Fecha del pedido:</label>
                                    <input name="fechaPedidoA" id="fechaPedidoA" class="form-control" type="date"
                                        value="<?= $fecha ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="fechaRealizarA">Fecha en que se realizará:</label>
                                    <input name="fechaRealizarA" id="fechaRealizarA" class="form-control" type="date"
                                        value="<?= $fecha ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="motivoA">Motivo:</label>
                                    <input type="text" class="form-control" id="motivoA">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="numeroBeneficiadosA">Numero de personas:</label>
                                    <input type="number" class="form-control" id="numeroBeneficiadosA">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="oficioA">Numero de oficio:</label>
                                    <input type="text" class="form-control" id="oficioA">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="programaA">Programa:</label>
                                    <select name="programaA" id="programaA" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="componenteA">Componente:</label>
                                    <select name="componenteA" id="componenteA" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="actividadA">Actividad:</label>
                                    <select name="actividadA" id="actividadA" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="metaA">Meta:</label>
                                    <input type="text" class="form-control" id="metaA">
                                </div>
                                <hr>
                                <div class="col-sm-8 mb-3">
                                    <label for="articuloA">Articulo:</label>
                                    <input type="text" name="articuloA" id="articuloA" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <label for="cantidadA">Cantidad:</label>
                                    <input type="number" name="cantidadA" id="cantidadA" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3 text-center">
                                    <button type="button" class="btn btn-success bntAgregarA"
                                        style="margin-top:15px;">AGREGAR</button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="dt-ext table-responsive">
                                    <table class="table table-striped alimentos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ARTICULO</th>
                                                <th>CANTIDAD</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div><br>

                            <div class="row">

                                <div class="col-sm-12 mb-3 text-center">
                                    <button class="btn btn-success" id="btnAgregarAlimentos">Capturar</button>
                                    <img id="cargaA" src='<?= base_url() ?>template/recursos/img/spiner.gif'
                                        height='30px' hidden>
                                </div>
                            </div>
                        </div>

                        <div id="formVehiculos" hidden>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="fechaPedidoCarro">Fecha del pedido:</label>
                                    <input name="fechaPedidoCarro" id="fechaPedidoCarro" class="form-control"
                                        type="date" value="<?= $fecha ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="oficioCarro">Numero de oficio:</label>
                                    <input type="text" class="form-control" id="oficioCarro">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label for="programaCarro">Programa:</label>
                                    <select name="programaCarro" id="programaCarro" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="componenteCarro">Componente:</label>
                                    <select name="componenteCarro" id="componenteCarro" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="actividadCarro">Actividad:</label>
                                    <select name="actividadCarro" id="actividadCarro" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="metaCarro">Meta:</label>
                                    <input type="text" class="form-control" id="metaCarro">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label for="unidadCarro">Número de unidad:</label>
                                    <input type="text" class="form-control" id="unidadCarro">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="tipoCarro">Tipo de vehiculo:</label>
                                    <input type="text" class="form-control" id="tipoCarro">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="marcaCarro">Marca:</label>
                                    <input type="text" class="form-control" id="marcaCarro">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="modeloCarro">Modelo:</label>
                                    <input type="text" class="form-control" id="modeloCarro">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="placasCarro">Placas de circulación:</label>
                                    <input type="text" class="form-control" id="placasCarro">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="serieCarro">Número de serie:</label>
                                    <input type="text" class="form-control" id="serieCarro">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="conductorCarro">Nombre del conductor:</label>
                                    <input type="text" class="form-control" id="conductorCarro">
                                </div>
                                <hr>
                                <div class="col-sm-2 mb-3">
                                    <label for="cantidadCarro">Cantidad:</label>
                                    <input type="number" name="cantidadCarro" id="cantidadCarro" class="form-control">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="servicioCarro">Servicio:</label>
                                    <input type="text" name="servicioCarro" id="servicioCarro" class="form-control">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="justificacionCarro">Justificación:</label>
                                    <input type="text" name="justificacionCarro" id="justificacionCarro"
                                        class="form-control">
                                </div>

                                <div class="col-sm-2 mb-3 text-center">
                                    <button type="button" class="btn btn-success bntAgregarC"
                                        style="margin-top:15px;">AGREGAR</button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="dt-ext table-responsive">
                                    <table class="table table-striped carros">
                                        <thead>
                                            <tr>
                                                <th>CANTIDAD</th>
                                                <th>SERVICIO</th>
                                                <th>JUSTIFICACIÓN</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div><br>

                            <div class="row">

                                <div class="col-sm-12 mb-3 text-center">
                                    <button class="btn btn-success" id="btnAgregarCarro">Capturar</button>
                                    <img id="cargaC" src='<?= base_url() ?>template/recursos/img/spiner.gif'
                                        height='30px' hidden>
                                </div>
                            </div>
                        </div>

                        <div id="formComputo" hidden>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="fechaPedidoComputo">Fecha del pedido:</label>
                                    <input name="fechaPedidoComputo" id="fechaPedidoComputo" class="form-control"
                                        type="date" value="<?= $fecha ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="oficioComputo">Numero de oficio:</label>
                                    <input type="text" class="form-control" id="oficioComputo">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label for="programaComputo">Programa:</label>
                                    <select name="programaComputo" id="programaComputo" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="componenteComputo">Componente:</label>
                                    <select name="componenteComputo" id="componenteComputo" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="actividadComputo">Actividad:</label>
                                    <select name="actividadComputo" id="actividadComputo" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="metaComputo">Meta:</label>
                                    <input type="text" class="form-control" id="metaComputo">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label for="tipoComputo">TIPO:</label>
                                    <select name="tipoComputo" id="tipoComputo" class="form-control">
                                        <option value="Portatil">Portatil</option>
                                        <option value="De escritorio">De escritorio</option>
                                        <option value="De impresión">De impresión</option>
                                        <option value="De escaneo">De escaneo</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="numeroInventarioComputo">Número de inventario:</label>
                                    <input type="text" class="form-control" id="numeroInventarioComputo">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="numeroSerieComputo">Número de serie:</label>
                                    <input type="text" class="form-control" id="numeroSerieComputo">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="responsableComputo">Nombre del responsable:</label>
                                    <input type="text" class="form-control" id="responsableComputo">
                                </div>
                                <hr>
                                <div class="col-sm-2 mb-3">
                                    <label for="cantidadComputo">Cantidad:</label>
                                    <input type="number" name="cantidadComputo" id="cantidadComputo"
                                        class="form-control">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="servicioComputo">Servicio:</label>
                                    <input type="text" name="servicioComputo" id="servicioComputo" class="form-control">
                                </div>
                                <div class="col-sm-4 mb-3">
                                    <label for="justificacionComputo">Justificación:</label>
                                    <input type="text" name="justificacionComputo" id="justificacionComputo"
                                        class="form-control">
                                </div>

                                <div class="col-sm-2 mb-3 text-center">
                                    <button type="button" class="btn btn-success bntAgregarCI"
                                        style="margin-top:15px;">AGREGAR</button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="dt-ext table-responsive">
                                    <table class="table table-striped computo">
                                        <thead>
                                            <tr>
                                                <th>CANTIDAD</th>
                                                <th>SERVICIO</th>
                                                <th>JUSTIFICACIÓN</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div><br>

                            <div class="row">

                                <div class="col-sm-12 mb-3 text-center">
                                    <button class="btn btn-success" id="btnAgregarComputo">Capturar</button>
                                    <img id="cargaCI" src='<?= base_url() ?>template/recursos/img/spiner.gif'
                                        height='30px' hidden>
                                </div>
                            </div>
                        </div>

                        <div id="formA" hidden>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="fechaPedidoArrendamiento">Fecha del pedido:</label>
                                    <input name="fechaPedidoArrendamiento" id="fechaPedidoArrendamiento" class="form-control" type="date"
                                        value="<?= $fecha ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="oficioArrendamiento">Numero de oficio:</label>
                                    <input type="text" class="form-control" id="oficioArrendamiento">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="programaArrendamiento">Programa:</label>
                                    <select name="programaArrendamiento" id="programaArrendamiento" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="componenteArrendamiento">Componente:</label>
                                    <select name="componenteArrendamiento" id="componenteArrendamiento" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="actividadArrendamiento">Actividad:</label>
                                    <select name="actividadArrendamiento" id="actividadArrendamiento" class="form-control">
                                    </select>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="metaArrendamiento">Meta:</label>
                                    <input type="text" class="form-control" id="metaArrendamiento">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label for="justificacionArrendamiento">Justificación del arrendamiento:</label>
                                    <input type="text" class="form-control" id="justificacionArrendamiento">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="fechaArrendamiento">Fecha del arrendamiento:</label>
                                    <input type="date" class="form-control" id="fechaArrendamiento">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="ubicacionArrendamiento">Ubicación:</label>
                                    <input type="text" class="form-control" id="ubicacionArrendamiento">
                                </div>
                                <hr>
                                <div class="col-sm-8 mb-3">
                                    <label for="articuloArrendamiento">Articulo:</label>
                                    <input type="text" name="articuloArrendamiento" id="articuloArrendamiento" class="form-control">
                                </div>

                                <div class="col-sm-2 mb-3">
                                    <label for="cantidadArrendamiento">Cantidad:</label>
                                    <input type="number" name="cantidadArrendamiento" id="cantidadArrendamiento" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3 text-center">
                                    <button type="button" class="btn btn-success bntAgregarArre"
                                        style="margin-top:15px;">AGREGAR</button>
                                </div>
                            </div>
                            <div class="container">
                                <div class="dt-ext table-responsive">
                                    <table class="table table-striped arrendamientos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ARTICULO</th>
                                                <th>CANTIDAD</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div><br>

                            <div class="row">

                                <div class="col-sm-12 mb-3 text-center">
                                    <button class="btn btn-success" id="btnAgregarArrendamiento">Capturar</button>
                                    <img id="cargaArre" src='<?= base_url() ?>template/recursos/img/spiner.gif'
                                        height='30px' hidden>
                                </div>
                            </div>
                        </div>

                        <div id="formV" hidden>
                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="fechaPedidoViatico">Fecha del pedido:</label>
                                    <input name="fechaPedidoViatico" id="fechaPedidoViatico" class="form-control" type="date"
                                        value="<?= $fecha ?>">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="oficioViatico">Numero de oficio:</label>
                                    <input type="text" class="form-control" id="oficioViatico">
                                </div>
                                
                                <div class="col-sm-6 mb-3">
                                    <label for="lugarViatico">Lugar:</label>
                                    <input type="text" class="form-control" id="lugarViatico">
                                </div>

                                <div class="col-sm-6 mb-3">
                                    <label for="periodoViatico">Periodo:</label>
                                    <input type="text" class="form-control" id="periodoViatico">
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="objetivoViatico">Objetivo:</label>
                                    <input type="text" class="form-control" id="objetivoViatico">
                                </div>

                                
                                <!-- <hr>
                                <div class="col-sm-8 mb-3">
                                    <label for="articuloArrendamiento">Articulo:</label>
                                    <input type="text" name="articuloArrendamiento" id="articuloArrendamiento" class="form-control">
                                </div>

                                <div class="col-sm-2 mb-3">
                                    <label for="cantidadArrendamiento">Cantidad:</label>
                                    <input type="number" name="cantidadArrendamiento" id="cantidadArrendamiento" class="form-control">
                                </div>
                                <div class="col-sm-2 mb-3 text-center">
                                    <button type="button" class="btn btn-success bntAgregarV"
                                        style="margin-top:15px;">AGREGAR</button>
                                </div> -->
                            </div>
                            <!-- <div class="container">
                                <div class="dt-ext table-responsive">
                                    <table class="table table-striped arrendamientos">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>ARTICULO</th>
                                                <th>CANTIDAD</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div><br> -->

                            <div class="row">

                                <div class="col-sm-12 mb-3 text-center">
                                    <button class="btn btn-success" id="btnAgregarViatico">Capturar</button>
                                    <img id="cargaV" src='<?= base_url() ?>template/recursos/img/spiner.gif'
                                        height='30px' hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>