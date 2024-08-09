class Login {
    constructor() {
        this.idusuario = $('.user').val();
        console.log(this.idusuario);

    }

    async iniciarSesion(usuario, password) {
        try {
            const form = new FormData();
            form.append('usuario', usuario);
            form.append('pass', password)
            const res = await fetch(`${urlServer}Login/IniciarSesion`, {
                method: 'POST',
                body: form
            });
            const data = await res.json();
            return { res, data }
        } catch (error) {
            console.log(error);
        }
    }

    async guardarSesion(dataUsuario) {
        const form = new FormData();

        form.append('idUsuario', dataUsuario.id_usuario);
        form.append('token', dataUsuario.token || ""); // Si no hay token, se envía una cadena vacía

        // Verificar si el token es válido: no es nulo, indefinido, ni una cadena vacía
        if (dataUsuario.token && dataUsuario.token.trim() !== "" && dataUsuario.token !== "undefined") {
            // Si el token es válido, se realiza la solicitud
            const res = await fetch(`${base_url}Login/SaveSesion`, {
                method: 'POST',
                body: form
            });
            const data = await res.json();

            data ? window.location.href = `${base_url}administrador/Views` : window.location.href = `${base_url}`;
        } else {
            // Si el token no es válido, se realiza otra solicitud
            const res = await fetch(`${base_url}Login/SaveSesion`, {
                method: 'POST',
                body: form
            });
            const data = await res.json();

            data ? window.location.href = `${base_url}cliente/provedores` : window.location.href = `${base_url}`;
        }
    }

}