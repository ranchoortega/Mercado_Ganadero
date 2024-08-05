class Login {
    constructor(){}

    async iniciarSesion(usuario, password) {
        try {
            const form = new FormData();
            form.append('usuario',usuario);
            form.append('pass',password)
            const res = await fetch(`${urlServer}Login/IniciarSesion`,{
                method:'POST',
                body:form
            });
            const data = await res.json();
            return {res,data}
        } catch (error) {
            console.log(error);
        }
    }

    async guardarSesion(dataUsuario){
        const form = new FormData();
        form.append('activo',dataUsuario.activo);
        form.append('apellidoMaterno',dataUsuario.apellido_materno);
        form.append('apellidoPaterno',dataUsuario.apellido_paterno);
        form.append('idAdministracion',dataUsuario.id_administracion);
        form.append('idJerarquia',dataUsuario.id_jerarquia);
        form.append('idUnidadResponsable',dataUsuario.id_unidad_responsable);
        form.append('idUsuario',dataUsuario.id_usuario);
        form.append('nombre',dataUsuario.nombre);
        form.append('rol',dataUsuario.rol);
        form.append('token',dataUsuario.token);
        form.append('usuarioInafed',dataUsuario.usuario_inafed);
        form.append('usuarioObras',dataUsuario.usuario_obras);
        const res = await fetch(`${base_url}Login/SaveSesion`,{
            method:'POST',
            body:form
        });
        const data = await res.json();

        
        data ? window.location.href=`${base_url}InicioController/bienvenido` : window.location.href=`${base_url}`;
    }
}1