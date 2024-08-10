const proveedores = new Proveedores();


$(document).ready(async function () {

    await proveedores.cargarProveedores();


});


$(document).on('click', '#btnEliminar', function () {
    var data = proveedores.tablaProveedores.row($(this).parents('tr')).data();

   proveedores.id_proveedor = data.id_user;
    mensajeAccion('warning', 'ELIMINAR CONTACTO', '¿DESEAS ELIMINAR ESTE CONTACTO?').then(async (result) => {
        if (result.isConfirmed) {
            const { res, data } = await proveedores.deleteProveedores();
            console.log(res);
            if (res.ok) {
                
                console.log("entrasss");
                
                MensajeAlerta(data.icon, 'ELIMINACION', data.mensaje, 'btn btn-primary');

                
               proveedores.cargarProveedores();
               proveedores.id_proveedor =  "";
            }
            else{
                MensajeAlerta(data.icon, 'ELIMINACION', data.mensaje, 'btn btn-primary');
            }
           
           

        }
    })


});
$(document).on('click', '#btnEliminarDescripcion', async function () {
    
    var animal = proveedores.tablaDescripcion.row($(this).parents('tr')).data();

    mensajeAccion('warning', 'ELIMINAR IMAGEN', '¿DESEAS ELIMINAR ESTE IMAGEN?').then(async (result) => {
        if (result.isConfirmed) {
            const { res, data } = await proveedores.deleteDescripciones(animal.id_descripcion);
            console.log(res);
            if (res.ok) {
                
              
                
                MensajeAlerta(data.icon, 'ELIMINACION', data.mensaje, 'btn btn-primary');

                
                await  proveedores.cargarDescriciones();

               
            }
            else{
                MensajeAlerta(data.icon, 'ELIMINACION', data.mensaje, 'btn btn-primary');
            }
           
           

        }
    })
    

});
$(document).on('click', '#btnEliminarAnimal', async function () {
    var animal = proveedores.tablaAnimales.row($(this).parents('tr')).data();

    mensajeAccion('warning', 'ELIMINAR IMAGEN', '¿DESEAS ELIMINAR ESTE IMAGEN?').then(async (result) => {
        if (result.isConfirmed) {
            const { res, data } = await proveedores.deleteAnimales(animal.id_files, animal.url);
            console.log(res);
            if (res.ok) {
                
              
                
                MensajeAlerta(data.icon, 'ELIMINACION', data.mensaje, 'btn btn-primary');

                
                await  proveedores.cargarImagenes();

               
            }
            else{
                MensajeAlerta(data.icon, 'ELIMINACION', data.mensaje, 'btn btn-primary');
            }
           
           

        }
    })
 
    

});

//Abrir modal


$(document).on('click', '#btnVer', async function () {
    var data = proveedores.tablaProveedores.row($(this).parents('tr')).data();
    console.log(data);
    
    proveedores.id_proveedor = data.id_user;
    await proveedores.cargarDescriciones();


});
$(document).on('click', '#btnDescripcion', async function () {
    var data = proveedores.tablaDescripcion.row($(this).parents('tr')).data();
    $('#raza').val(data.raza);
    $('#edad').val(data.edad);
    $('#genero').val(data.genero);
    $('#precio').val(data.precio);
    $('#descripcion').val(data.descripcion);
    dataFecha = proveedores.horaFecha(data.fecha_alta)
    $('#fecha').val(dataFecha.fecha);
    $('#hora').val(dataFecha.hora);
    proveedores.id_descricion = data.id_descripcion;
    await  proveedores.cargarImagenes();

    

});
$(document).on('click', '#btnAnimales', async function () {
    var data = proveedores.tablaAnimales.row($(this).parents('tr')).data();
    $('#imgAnimales').attr('src', data.url);
    
   


});