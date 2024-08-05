const login = new Login();

document.getElementById('btnLogin').addEventListener('click', async () => {
    let usuario = document.getElementById('usuario').value;
    let pass = document.getElementById('contrasena').value;
    let { res, data } = await login.iniciarSesion(usuario, pass);
    if (res?.status != 200) {
        MensajeAlerta('error', '', data.mensaje, 'btn-danger');
        return false;
    }
    if (data.activo < 1) {
        MensajeAlerta('error', '', 'Usuario inactivo', 'btn-danger')
        return false;
    }

    login.guardarSesion(data);
});
document.addEventListener("keydown", async (e) => {
    if (e.key == "Enter") {
        let usuario = document.getElementById('usuario').value;
        let pass = document.getElementById('contrasena').value;
        let { res, data } = await login.iniciarSesion(usuario, pass);
        if (res?.status != 200) {
            MensajeAlerta('error', '', data.mensaje, 'btn-danger');
            return false;
        }
        if (data.activo < 1) {
            MensajeAlerta('error', '', 'Usuario inactivo', 'btn-danger')
            return false;
        }

        login.guardarSesion(data);
    }
})