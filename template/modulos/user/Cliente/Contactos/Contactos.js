class Contactos{
    constructor(){
        this.id_contacto = ""

    }

    
    async setContacto(name, phone, comment){
        const form = new FormData();
        form.append("id_contacto",this.id_contacto);
        form.append("name",name);
        form.append("phone",phone);
        form.append("comment",comment);
      
    
        return sendData(form, "C_Contactos/setContacto")
       
    }
    
    validarCampo(valorCampo,idMensaje,mensaje){
        if(valorCampo === ''){
            $(`.${idMensaje}`).html(mensaje);
            return false;
        }else{
            $(`.${idMensaje}`).html('');
            return true;
        }
    }
    lengthCampo(valorCampo,idMensaje,mensaje){
        if(valorCampo != 10){
            $(`.${idMensaje}`).html(mensaje);
            return false;
        }else{
            $(`.${idMensaje}`).html('');
            return true;
        }
    }

}