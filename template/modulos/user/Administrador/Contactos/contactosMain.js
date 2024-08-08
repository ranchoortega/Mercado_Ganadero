const contactos = new Contactos();


$(document).ready(async function () {

    await contactos.cargarcontactos();


});
$(document).on('click', '#btnVer', function () {
    var data = contactos.tablaContactos.row($(this).parents('tr')).data();
    $('#name').val(data.name);
    $('#phone').val(data.phone);
    $('#comment').val(data.comment);
    dataFecha = contactos.horaFecha(data.fecha_alta)
    $('#fecha').val(dataFecha.fecha);
    $('#hora').val(dataFecha.hora);

    console.log(dataFecha);

});

$(document).on('click', '#btnEliminar', function () {
    var data = contactos.tablaContactos.row($(this).parents('tr')).data();

    contactos.id_contacto = data.id_contacto;
    mensajeAccion('warning', 'ELIMINAR CONTACTO', '¿DESEAS ELIMINAR ESTE CONTACTO?').then(async (result) => {
        if (result.isConfirmed) {
            const { res, data } = await contactos.deleteContacto();
            console.log(res);
            if (res.ok) {
                
                console.log("entrasss");
                
                MensajeAlerta(data.icon, 'ELIMINACION', data.mensaje, 'btn btn-primary');

                
                contactos.cargarcontactos();
                contactos.id_contacto =  "";
            }
            else{
                MensajeAlerta(data.icon, 'ELIMINACION', data.mensaje, 'btn btn-primary');
            }
           
           

        }
    })


});