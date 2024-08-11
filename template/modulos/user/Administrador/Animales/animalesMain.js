const proveedores = new Animales();


$(document).ready(async function () {

    await proveedores.cargarDescriciones();

});
$('.btnSaveAnimal').on('click', async () => {
    if (proveedores.token) {

        let raza = $('#raza').val();
        let edad = $('#edad').val();
        let genero = $('#genero').val();
        let descripcion = $('#descripcion').val();
        let precio = $('#precio').val();
        let tipo = $('#tipo').val();
   

        validarRaza = proveedores.validarCampo(raza, 'msgpraza', 'Ingrese la raza.');
        validarEdad = proveedores.validarCampo(edad, 'msgpedad', 'Ingrese la edad');
        validarGenero = proveedores.validarCampo(genero, 'msgpgenero', 'Selecciona un genero');
        validarDescipcion = proveedores.validarCampo(descripcion, 'msgpdescripcion', 'Ingresa una descipcion.');
        validarPrecio = proveedores.validarCampo(precio, 'msgpprecio', 'Ingresa el precio');
        validarTipo = proveedores.validarCampo(tipo, 'msgptipo', 'Selecciona la especie');
        var fileInput = $("#foto1")[0];
        var fileInput2 = $("#foto2")[0];


        if (validarRaza && validarEdad && validarGenero && validarDescipcion && validarPrecio && validarTipo) {

          
            let fileVali = fileInput.files.length > 0 ? "si" : "";
            let fileVali2 = fileInput2.files.length > 0 ? "si" : "";
            validarFile = proveedores.validarCampo(fileVali, 'msgpfoto1', 'Ingresa una imagen');
            validarFile2 = proveedores.validarCampo(fileVali2, 'msgpfoto2', 'Ingresa una imagen');


            if (validarFile && validarFile2) {
                let archivo = fileInput.files[0];
                let archivo2 = fileInput2.files[0];

                let extension = archivo.name.split('.').pop().toLowerCase();
                let extension2 = archivo2.name.split('.').pop().toLowerCase();
                let permitidas = ['png', 'jpg'];
                if ((permitidas.indexOf(extension) === -1)) {
                    MensajeAlerta('warning', '', 'Seleccione una imagen válida (png o jpg)', 'btn btn-primary');
                    return false;
                }
                else if(  (permitidas.indexOf(extension2) === -1)) {
                    MensajeAlerta('warning', '', 'Seleccione una imagen válida (png o jpg)', 'btn btn-primary');
                    return false;
                }
            
                else {
                    var file = fileInput.files[0]; // Obtén el primer archivo seleccionado
                    var file2 = fileInput2.files[0]; // Obtén el primer archivo seleccionado
                    const { res:resFile, data:dataFile } = await proveedores.setAnimal(raza, edad, genero, descripcion, precio, tipo);
                    if (resFile.ok) {
                        if (dataFile.res) {
                            const {res:resAnimal, data:dataAnimal} = await proveedores.upload(file, dataFile.res);
                            const {res:resAnimal2, data:dataAnimal2} = await proveedores.upload(file2, dataFile.res);
                            if (resAnimal.ok && resAnimal2.ok) {
                                if (dataAnimal.res && dataAnimal2.res) {
                                    mensaje(dataAnimal.icon, 'CORRECTO', dataAnimal.mensaje);
                                    limpiarElementos(".form-control");
                                } else {
                                    mensaje(dataAnimal.icon, 'ERROR', dataAnimal.mensaje);
                                    
                                }
                                
                            }
                          
                        }
                        else{
                            mensaje(dataFile.icon, 'ERROR', dataFile.mensaje);
                        }
                    }
                }


            } else {
                MensajeAlerta('warning', '', 'Por favor, suba un archivo (imagen)', 'btn btn-primary');
            }

        } else {

        }

    }
    else {
        MensajeAlerta('error', '', 'Inicia sesion por favor', 'btn btn-primary');
    }

});
$(document).on('click', '#btnNew', function () {
   
    $('.tablaAnimales').hide();
    $('.foto1').show();
    $('.foto2').show();
    $('.btnSaveAnimal').show();



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



$(document).on('click', '#btnDescripcion', async function () {
    var data = proveedores.tablaDescripcion.row($(this).parents('tr')).data();
    proveedores.id_descricion = data.id_descripcion;
    await  proveedores.cargarImagenes();
    $('#raza').val(data.raza);
    $('#edad').val(data.edad);
    $('#genero').val(data.genero);
    $('#precio').val(data.precio);
    $('#descripcion').val(data.descripcion);
    $('#tipo').val(data.tipo);
    $('.tablaAnimales').show();
    $('.foto1').hide();
    $('.foto2').hide();
 
 
    
   
    


 


    $('.btnSaveAnimal').hide();
    await proveedores.cargarDescriciones();

        


    

});

$(document).on('click', '#btnAnimales', async function () {
    var data = proveedores.tablaAnimales.row($(this).parents('tr')).data();
    $('#imgAnimales').attr('src', data.url);
    
   


});
$(document).on('click', '#cerrar', async function () {
   
    
   
    proveedores.id_descricion =""  ;
    limpiarElementos(".form-control");



});