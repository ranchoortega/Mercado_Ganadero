const contactos = new Contactos();

$('.btnSaveContacto').on('click',async ()=>{

    let name = $('#name').val();
    let phone = $('#phone').val();
    let comment = $('#comment').val();
    validarName = contactos.validarCampo(name, 'msgname', 'El nombre es obligatorio.');
    validarPhone = contactos.validarCampo(phone, 'msgphone', 'El telefono es obligatorio.');
    validarComment = contactos.validarCampo(comment, 'msgcomment', 'El comentario es obligatorio.'); 


    if(validarName && validarPhone && validarComment){
        const {res,data} = await contactos.setContacto(name, phone, comment)
        if(res.ok){
            $('#name').val('');
            $('#comment').val('');
            $('#comment').val('');
    
            mensaje(data.icon, 'CORRECTO', data.mensaje);
            return false;
        }
        MensajeAlerta('error','','Error al guardar la informacion, intentelo mas tarde','btn btn-primary');
        
    }
    else{
        MensajeAlerta('error','','Ingrese toda la informacion','btn btn-danger');
        return false;
    }
   
});
