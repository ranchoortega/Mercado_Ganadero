<style>
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
                            <h1 style="text-align: center; font-family: 'Heebo', sans-serif;"> BIENVENIDO </h1>
                            <h1 style="text-align: center; font-family: 'Heebo', sans-serif;"> PLATAFORMA DE EGRESOS E INGRESOS </h1>
                            
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">BUSCADOR</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#"
                                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                                class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">NUMERO DE POLIZA</label>
                                                <input class="form-control" type="text" id="numero_poliza">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">NOMBRE DEL BENEFICIARIO</label>
                                                <input class="form-control" type="text" id="nombre_beneficiario">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">FUENTE DE FINANCIAMIENTO</label>
                                                <select class="form-control" id="fuente_financiamiento">
                                                    <option value="">Seleccionar...</option>
                                                    <option value="Cereso">Cereso</option>
                                                    <option value="Fism">Fism</option>
                                                    <option value="Faismun">Faismun</option>
                                                    <option value="Fortamun">Fortamun</option>
                                                    <option value="Participaciones">Participaciones</option>
                                                    <option value="Recursofiscales">Recursos fiscales</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">AÑO</label>
                                                <select class="form-control" id="ejercicio">
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">MES</label>
                                                <select class="form-control" id="mes">
                                                    <option value="Enero">Enero</option>
                                                    <option value="Febrero">Febrero</option>
                                                    <option value="Marzo">Marzo</option>
                                                    <option value="Abril">Abril</option>
                                                    <option value="Mayo">Mayo</option>
                                                    <option value="Junio">Junio</option>
                                                    <option value="Julio">Julio</option>
                                                    <option value="Agosto">Agosto</option>
                                                    <option value="Septiembre">Septiembre</option>
                                                    <option value="Octubre">Octubre</option>
                                                    <option value="Noviembre">Noviembre</option>
                                                    <option value="Diciembre">Diciembre</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12 text-center">
                                            <div class="mb-3">
                                                <button class="btn btn-success" id="btnBuscar">BUSCAR POLIZA</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" id="id_municipio" value="<?= $id_municipio ?>">
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="table table-striped polizas">
                                <thead>
                                    <tr>
                                        <th class="text-center">AÑO</th>
                                        <th class="text-center">MES</th>
                                        <th class="text-center">FUENTE DE FINANCIAMIENTO</th>
                                        <th class="text-center">LEGAJO</th>
                                        <th class="text-center"># POLIZA</th>
                                        <th class="text-center">CONCEPTO</th>
                                        <th class="text-center">FECHA</th>
                                        <th class="text-center">BENEFICIARIO</th>
                                        <th class="text-center">FOLIO</th>
                                        <th class="text-center">ESTATUS</th>
                                        <th class="text-center">PDF DESGLOZADO</th>
                                        <th class="text-center">PDF POLIZA</th>
                                        <th class="text-center">OPCIONES</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modalEvidencia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header" id="titulo">
                    
                </div>
                <div class="form-group text-right">
                    <input type="text" class="form-control" id="id" hidden>
                </div>
                <div class="modal-body">
                    <div class="row" id="documentos">
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-sm" id="btnAceptarModal">ACEPTAR</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal-->
<div class="modal fade" id="modalDocsJuntos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DOCUMENTOS POLIZA  <span class="noPoliza"></span></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div id="contenedorPrincipalDePdf">

                    </div>
            </div>
            <div class="modal-footer"></div>
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
                <h5 class="modal-title" id="exampleModalLabel">DOCUMENTOS POLIZA <span class="noPolizaDesglozada"></span></h5>
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