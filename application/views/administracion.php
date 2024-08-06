<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5"><img class="bg-img-cover bg-center" src="<?php echo base_url('template/recursos/img/inicio.jpg'); ?>" alt="looginpage"></div>
            <div class="col-xl-7 p-0">    
                <div class="login-card">
                    <form class="theme-form login-form" id="form-user">
                        <h6>INICIAR SESIÓN</h6>
                        <div class="form-group">
                            <label>Usuario</label>
                            <div class="input-group"><span class="input-group-text"></span>
                                <input class="form-control" id="usuario" name="usuario" type="text"  placeholder="usuario">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <div class="input-group"><span class="input-group-text"></span>
                                <input class="form-control" type="password" id="contrasena" name="contrasena" placeholder="*****">
                            </div>
                        </div>
                        
                        <div class="form-group"><a class="btn btn-danger btn-block" id="btnLogin" type="submit">Iniciar Sesión</a></div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>