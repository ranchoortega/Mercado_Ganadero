
const proveedores = new Proveedores();
$(document).ready(() => {
    console.log("gggggggggggg");
    let user = $('#puto').val();
    console.log(user);
    
    
    console.log(proveedores.id_usuario);
    if (proveedores.id_usuario != "") {
      
        $('.divLoginAndCreate').hide();


    }
    else {
        $('.divCrear').hide();
    }



});
$('#btnFile').on('click', async () => {

    var fileInput = $("#newfile")[0];
    if (fileInput.files.length > 0) {
        var file = fileInput.files[0]; // Obtén el primer archivo seleccionado
        const { res, data } = await proveedores.upload(file);
        console.log(data);

        console.log(file); // Imprime el archivo en la consola
    }

});


$('.btnLocation').on('click', async () => {
    proveedores.getLocation();
    proveedores.verificationLocation = true;


});
$('.btnViewCreate').on('click', () => {
    $('.divCrear').show();
    $(".divLogin").hide();

});
$('.btnViewLogin').on('click', () => {
    $('.divCrear').hide();
    $(".divLogin").show();

});


//USER

$('#create').on('click', async () => {

    let user = $('#user').val();
    let password = $('#password').val();
    let name = $('#name').val();
    let phone = $('#phone').val();
    validarUser = proveedores.validarCampo(user, 'msguser', 'El usuario es obligatorio.');
    validarName = proveedores.validarCampo(name, 'msgpname', 'El nombre es obligatorio.');
    validarPhone = proveedores.validarCampo(phone, 'msgphone', 'El telefono es obligatorio.');
    validarPassword = proveedores.validarCampo(password, 'msgpassword', 'La contraseña es obligatoria');
    validarLocation = proveedores.validarLocation('msglocation', 'Haz clic en buscar')


    if (validarUser && validarName && validarPhone && validarPassword && validarLocation) {
        validarLengthPhone = proveedores.lengthCampo(phone.length, 'msgphone', 'Ingrese 10 dígitos', 10);
        validarLengthPassword = proveedores.lengthCampo(password.length, 'msgpassword', 'Ingrese 8 caracteres', 8);
        validarLengthUser = proveedores.lengthCampo(user.length, 'msguser', 'Ingrese 8 caracteres', 8);

        if (validarLengthPhone && validarLengthPassword && validarLengthUser) {
            const { res, data } = await proveedores.setProveedor(user, password, name, phone)
            if (res.ok) {
                if (data.res) {
                    $('#user').val('');
                    $('#password').val('');
                    $('#name').val('');
                    $('#phone').val('');
    
                    mensaje(data.icon, 'CORRECTO', data.mensaje);
                    await proveedores.guardarSesion(data);
                    location.reload();
                    return false;
                }
                else{
                    mensaje(data.icon, 'Usuario', data.mensaje);
                    return false;
                }
               
            }
            MensajeAlerta('error', '', 'Error al guardar la informacion, intentelo mas tarde', 'btn btn-primary');

        }
        else {
            MensajeAlerta('error', '', 'Ingrese toda la informacion requerida', 'btn btn-danger');
            return false;
        }


    }
    else {
        MensajeAlerta('error', '', 'Ingrese toda la informacion', 'btn btn-danger');
        return false;
    }



});

var userLink = document.getElementById('userLink');
    var logoutButton = document.getElementById('logoutButton');
    
    userLink.addEventListener('click', function(event) {
        event.preventDefault(); // Previene el comportamiento predeterminado del enlace
        if (logoutButton.style.display === 'none') {
            logoutButton.style.display = 'block';
        } else {
            logoutButton.style.display = 'none';
        }
    });