<div class="page-body" id="formulario">
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
                            <input type="text" class="form-control" id="idDocumento" value="<?= $idDocumento ?>" hidden>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--tabla-->
                        <h3 class="text-center">DETALLES DEL DOCUMENTO</h3>
                        <h5 class="text-center text-success nameDocumento"></h5>
                        <div class="contenedorDetalles"></div>
                        <div class="text-center mt-5 mb-5">
                        <!--<embed id="contenedorPdf" src="" type="application/pdf" width="60%" height="1000px" />-->
                        <iframe id="contenedorPdf" src="" type="application/pdf" width="60%" height="1000px" frameborder="0" ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
