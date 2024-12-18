<style>
    #top-header {
        z-index: 3;
    }

    .breadcrumb-item {
        flex: 1;
        /* Todos los elementos se repartirán de manera uniforme */
        text-align: center;
        padding: 10px;
        white-space: nowrap;
        /* Evita que el texto se corte en varias líneas */
    }

    .breadcrumb-item a {
        text-decoration: none;
        color: inherit;
    }

    .breadcrumb-item::before {
        content: none !important;
        /* Asegura que se aplique este estilo sobre cualquier otro */
        padding-right: 0 !important;
    }


    /* Opcionalmente, puedes ajustar la fuente o el espaciado en pantallas más pequeñas */
    @media (max-width: 576px) {
        .breadcrumb-item {
            padding: 5px;
            /* Reduce el espaciado en pantallas muy pequeñas */
        }
    }
</style>


<section class="page-body">


    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-12 p-0">
                <div class="" style=" background-color: rgba($primary-color, 0.1); height: 50;  display: flex;   align-items: center;      justify-content: center;  min-height: 50;     margin: 0 auto;   
  padding: 30px 12px;">
                    <div class="col-md-6 order-details theme-form login-form" id="form-user">
                        <!-- Billing Details -->
                        <div class="billing-details divCrear" style="display:none;">
                            <div class="section-title">
                                <h3 class="title">Crear cuenta</h3>
                            </div>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-user bx-xs" id="addon-wrapping"></span>
                                <input type="text" class="input" placeholder="Usuario" aria-describedby="addon-wrapping"
                                    id="user">
                            </div>
                            <p class="text-danger msguser"></p>
                            <div class="input-group flex-nowrap ">


                                <span class="input-group-text bx bx-low-vision bx-xs" id="addon-wrapping"></span>
                                <input type="password" class="input" placeholder="Contraseña"
                                    aria-describedby="addon-wrapping" id="password" minlength="4" maxlength="8">
                            </div>
                            <p class="text-danger msgpassword"></p>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-user-detail bx-xs" id="addon-wrapping"></span>
                                <input type="text" class="input" placeholder="Nombre" aria-describedby="addon-wrapping"
                                    id="name">
                            </div>
                            <p class="text-danger msgpname"></p>

                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-phone-call bx-xs" id="addon-wrapping"></span>
                                <input class="input" type="tel" pattern="\d{10}" maxlength="10" name="tel"
                                    placeholder="Teléfono" id="phone" aria-describedby="addon-wrapping">
                            </div>
                            <p class="text-danger msgphone"></p>
                            <script>
                                document.getElementById('phone').addEventListener('input', function (e) {
                                    var value = e.target.value;
                                    // Eliminar cualquier carácter no numérico
                                    e.target.value = value.replace(/\D/g, '').slice(0, 10);
                                });
                            </script>


                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bx-current-location bx-xs" id="addon-wrapping"></span>


                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                <input type="text" readonly class="form-control-plaintext input" id="location"
                                    value="Ubicación">


                                <button type="button" class="btn btn-primary btnLocation" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter" style="width: 50%;">Buscar</button>


                            </div>


                            <p class="text-danger msglocation"></p>
                            <div class="form-group"
                                style=" margin-top: -12PX; display: flex;    justify-content: space-around;">
                                <a id="create" class="primary-btn order-submit">Crear cuenta</a>


                            </div>
                            <div class="form-group"
                                style=" margin-top: 5px; display: flex;    justify-content: space-around;">

                                <a class="btnViewLogin">¿Ya tienes cuenta? Haz clic aqui</a>

                            </div>







                        </div>
                        <!-- /Billing Details -->
                        <div class="billing-details divLogin">
                            <div class="section-title">
                                <h3 class="title">Ingresar</h3>
                            </div>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-user bx-xs" id="addon-wrapping"></span>
                                <input type="text" class="input" placeholder="Usuario" aria-describedby="addon-wrapping"
                                    id="usuario">
                            </div>
                            <p class="text-danger msgploginname"></p>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-user bx-xs" id="addon-wrapping"></span>
                                <input type="password" class="input" placeholder="Contraseña"
                                    aria-describedby="addon-wrapping" id="contrasena" minlength="4" maxlength="8">
                            </div>
                            <p class="text-danger msgploginpassword"></p>
                            <div class="form-group"
                                style=" margin-top: -12PX; display: flex;    justify-content: space-around;">
                                <a id="btnLogin" class="primary-btn order-submit">Iniciar sesion</a>


                            </div>
                            <div class="form-group"
                                style=" margin-top: 5px; display: flex;    justify-content: space-around;">

                                <a class="btnViewCreate">¿No tienes cuenta? Haz clic aqui</a>

                            </div>





                        </div>



                    </div>
                    <div class="modal fade" id="exampleModalCenter" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Si la ubicación está mal (puedes
                                        mover el
                                        marcador)</h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div id="map" style="height: 200px;"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <button id="localizar" class="btn btn-info mt-3">Mostrar mi
                                                    ubicación</button>
                                                <p class="text-danger msgpbtnlocation"></p>

                                                <script>
                                                    // Inicializa el mapa centrado en Londres
                                                    const map = L.map('map').setView([19.0414, -98.2063], 13);

                                                </script>

                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Selecciona tu estado</label>

                                                <select class="js-example-basic-multiple col-sm-12" id="mimunicipio">

                                                </select>
                                                <p class="text-danger msgpmimunicipio"></p>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Primero seleccione un Estado</label>
                                                <select class="js-example-basic-multiple col-sm-12"
                                                    id="estado-municipio"></select>
                                                <p class="text-danger msgpestado-municipio"></p>

                                            </div>
                                        </div>

                                    </div>

                                    <!-- Define una altura adecuada para el mapa -->

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary guardarLocation">Guardar
                                        cambios</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>