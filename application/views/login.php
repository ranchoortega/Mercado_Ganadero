<style>
    .js-example-basic-multiple {
    z-index: 10000; /* Asegúrate de que el select tenga un z-index alto */
    position: relative; /* Necesario para que el z-index funcione */
}

#top-header{
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

    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 d-flex justify-content-between flex-nowrap">
                    <div class="breadcrumb-item">
                        <a href="<?php echo base_url() ?>Welcome"><i class="icofont-home icofont-2x"></i></a>
                    </div>
                    <div class="breadcrumb-item" id="iconReses">
                        <a href="<?php echo base_url() ?>Cliente/Animales/Reses"><i
                                class="icofont-cow icofont-2x"></i></a>
                    </div>
                    <div class="breadcrumb-item" id="iconChivos">
                        <a href="<?php echo base_url() ?>Cliente/Animales/Chivos"><i
                                class="icofont-giraffe-head-1 icofont-2x"></i></a>
                    </div>
                    <div class="breadcrumb-item" id="iconCerdos">
                        <a href="<?php echo base_url() ?>Cliente/Animales/Cerdos"><i
                                class="icofont-pig-face icofont-2x"></i></a>
                    </div>
                    <div class="breadcrumb-item" id="iconAves">
                        <a href="<?php echo base_url() ?>Cliente/Animales/Aves"><i
                                class="icofont-rooster icofont-2x"></i></a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-12 p-0">
                <div class="" style=" background-color: rgba($primary-color, 0.1); height: 50;  display: flex;   align-items: center;      justify-content: center;  min-height: 50;     margin: 0 auto;   
  padding: 30px 12px;">
                    <div class="col-md-6 order-details theme-form login-form" id="form-user">
                        <!-- Billing Details -->
                        <div class="billing-details divCrear">
                            <div class="section-title">
                                <h3 class="title">Crear cuenta</h3>
                            </div>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-user bx-sm" id="addon-wrapping"></span>
                                <input type="text" class="input" placeholder="Usuario" aria-describedby="addon-wrapping"
                                    id="user">
                            </div>
                            <p class="text-danger msguser"></p>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bx-low-vision bx-sm" id="addon-wrapping"></span>
                                <input type="password" class="input" placeholder="Contraseña"
                                    aria-describedby="addon-wrapping" id="password" minlength="4" maxlength="8">
                            </div>
                            <p class="text-danger msgpassword"></p>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-user-detail bx-sm" id="addon-wrapping"></span>
                                <input type="text" class="input" placeholder="Nombre" aria-describedby="addon-wrapping"
                                    id="name">
                            </div>
                            <p class="text-danger msgpname"></p>

                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-phone-call bx-sm" id="addon-wrapping"></span>
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

                                <span class="input-group-text bx bx-current-location bx-sm" id="addon-wrapping"></span>


                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                <input type="text" readonly class="form-control-plaintext input" id="location"
                                    value="Ubicación">


                                <button type="button" class="btn btn-primary input btnLocation" data-toggle="modal"
                                    data-target="#exampleModalCenter" style="width: 50%; z-index: 0;">Buscar</button>


                            </div>


                            <p class="text-danger msglocation"></p>
                            <div class="form-group"
                                style=" margin-top: -12PX; display: flex;    justify-content: space-around;">
                                <a id="create" class="primary-btn order-submit">Crear cuenta</a>


                            </div>
                            <div class="form-group"
                                style=" margin-top: -12px; display: flex;    justify-content: space-around;">

                                <a class="btnViewLogin">¿Ya tienes cuenta? Haz clic aqui</a>

                            </div>







                        </div>
                        <!-- /Billing Details -->
                        <div class="billing-details divLogin">
                            <div class="section-title">
                                <h3 class="title">Ingresar</h3>
                            </div>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-user bx-sm" id="addon-wrapping"></span>
                                <input type="text" class="input" placeholder="Usuario" aria-describedby="addon-wrapping"
                                    id="usuario">
                            </div>
                            <p class="text-danger msgploginname"></p>
                            <div class="input-group flex-nowrap ">

                                <span class="input-group-text bx bxs-user bx-sm" id="addon-wrapping"></span>
                                <input type="password" class="input" placeholder="Contraseña"
                                    aria-describedby="addon-wrapping" id="contrasena" minlength="4" maxlength="8">
                            </div>
                            <p class="text-danger msgploginpassword"></p>
                            <div class="form-group"
                                style=" margin-top: -12PX; display: flex;    justify-content: space-around;">
                                <a id="btnLogin" class="primary-btn order-submit">Iniciar sesion</a>


                            </div>
                            <div class="form-group"
                                style=" margin-top: -12px; display: flex;    justify-content: space-around;">

                                <a class="btnViewCreate">¿No tienes cuenta? Haz clic aqui</a>

                            </div>





                        </div>



                    </div>
                    <div class="modal fade" id="exampleModalCenter" tabindex="" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Si la ubicación está mal (puedes
                                        mover el
                                        marcador)</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="map" style="height: 200px;"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <button id="localizar" class="btn btn-info mt-3">Mostrar mi
                                                    ubicación</button>
                                                <script>
                                                    // Inicializa el mapa centrado en Londres
                                                    const map = L.map('map').setView([19.0414, -98.2063], 13);

                                                </script>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Selecciona tu estado</label>

                                                <select class="js-example-basic-multiple col-sm-12" id="mimunicipio" >

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-4">
                                                <label class="form-label">Municipio</label>
                                                <select class="js-example-basic-multiple col-sm-12" id="estado-municipio" ></select>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Define una altura adecuada para el mapa -->

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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