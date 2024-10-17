<section>
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-12 p-0">
                <div class="" style=" background-color: rgba($primary-color, 0.1);
  height: 50;
  display: flex;    
  align-items: center;    
  justify-content: center;
  min-height: 50;   
  margin: 0 auto;   
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
                                    data-target="#exampleModalCenter" style="width: 50%;">Buscar</button>


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
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <div id="map" style="height: 400px;"></div>
                                    <!-- Define una altura adecuada para el mapa -->
                                    <button id="localizar" class="btn btn-info mt-3">Mostrar mi ubicación</button>

                                    <script>


                                        // Inicializa el mapa centrado en Londres
                                        const map = L.map('map').setView([19.0414, -98.2063], 13);


                                        // Capa de OpenStreetMap



                                    </script>
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