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
     
        form.append('idUsuario',dataUsuario.id_usuario);
        form.append('token',dataUsuario.token);
        const res = await fetch(`${base_url}Login/SaveSesion`,{
            method:'POST',
            body:form
        });
        const data = await res.json();

        
        data ? window.location.href=`${base_url}administrador/Views` : window.location.href=`${base_url}`;
    }
}1