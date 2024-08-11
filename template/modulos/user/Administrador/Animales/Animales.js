class Animales {
    constructor() {
        this.token = $('.jwt').val();
        this.idusuario = $('.user').val();
        this.tablaProveedores = "";
        this.tablaDescripcion = "";
        this.tablaAnimales = "";


        this.id_proveedor = "";
        this.id_descricion = "";

    }
    async cargarProveedores() {
        $(".tablaProveedores").dataTable().fnDestroy();

        var columnas = [
            { "data": "name" },
            {
                "data": null,
                "defaultContent": '<div style="display: flex;justify-content: center;">' +
                    '<button type="button" id="btnVer" class="btn btn-success mr-1 mb-1"  data-bs-toggle="modal"                            data-original-title="test" data-bs-target="#exampleModal" ><i class="fa fa-eye"></i></button><button type="button" id="btnEliminar" class="btn btn-danger mr-1 mb-1"><i class="fa fa-trash"></i></button>' +
                    '</div>'
            }
        ];



        var columnalongitud = [
            { "width": 150, "targets": 0 },
            { "width": 150, "targets": 1 }

        ];

        var datos = {
        };
        this.tablaProveedores = generarTabla2(
            'tablaProveedores',
            `${urlServer}administracion/A_Proveedores/getProveedores`,
            datos,
            columnas,
            columnalongitud,
            this.token
        );

    }
    async cargarDescriciones() {
        $(".tablaDescripcion").dataTable().fnDestroy();

        var columnas = [
            { "data": "raza" },
            {
                "data": null,
                "defaultContent": '<div style="display: flex;justify-content: center;">' +
                    '<button type="button" id="btnDescripcion" class="btn btn-success mr-1 mb-1"  data-bs-toggle="modal"                            data-original-title="test" data-bs-target="#newAnimal" ><i class="fa fa-eye"></i></button><button type="button" id="btnEliminarDescripcion" class="btn btn-danger mr-1 mb-1"><i class="fa fa-trash"></i></button>' +
                    '</div>'
            }
        ];



        var columnalongitud = [
            { "width": 150, "targets": 0 },
            { "width": 150, "targets": 1 }

        ];

        var datos = {
          
        };
        this.tablaDescripcion = generarTabla2(
            'tablaDescripcion',
            `${urlServer}administracion/A_Animales/getDescripcionAnimales`,
            datos,
            columnas,
            columnalongitud,
            this.token
        );

    }
    async cargarImagenes() {
        $(".tablaAnimal").dataTable().fnDestroy();

        var columnas = [

            {
                "data": null,
                "defaultContent": '<div style="display: flex;justify-content: center;">' +
                    '<button type="button" id="btnAnimales" class="btn btn-success mr-1 mb-1"  data-bs-toggle="modal"                            data-original-title="test" data-bs-target="#animalMode" ><i class="fa fa-eye"></i></button><button type="button" id="btnEliminarAnimal" class="btn btn-danger mr-1 mb-1"><i class="fa fa-trash"></i></button>' +
                    '</div>'
            }
        ];



        var columnalongitud = [
            { "width": 150, "targets": 0 },


        ];

        var datos = {
            "id": this.id_descricion
        };
        this.tablaAnimales = generarTabla2(
            'tablaAnimal',
            `${urlServer}administracion/A_Proveedores/getAnimales`,
            datos,
            columnas,
            columnalongitud,
            this.token
        );


        

    }


    async deleteProveedores() {
        try {
            return sendDataGet(`administracion/A_Proveedores/deleteProveedores/${this.id_proveedor}`)


        } catch (e) {
            console.log("hh");
        }
    }

    async deleteDescripciones(id) {
        try {
            return sendDataGet(`administracion/A_Proveedores/deleteDescripcions/${id}`)


        } catch (e) {
            console.log(e);
        }
    }

    async deleteAnimales(id,url) {
        const form = new FormData();
        form.append("id",id);
        form.append("url",url);
      
      
    
        return sendData(form, "administracion/A_Proveedores/deleteAnimales")
       
    }

    horaFecha(fechaHora) {

        const fecha = new Date(fechaHora.replace(' ', 'T')); // La 

        const fechaSolo = fecha.toISOString().split('T')[0]; // "2024-08-07"
        const horaSolo = fecha.toTimeString().split(' ')[0]; // "18:50:15"

        return {
            hora: horaSolo,
            fecha: fechaSolo
        }

    }

    async upload(file, id_descripcion) {
        const form = new FormData();

        form.append("file", file);
        form.append("id_descripcion", id_descripcion);
        return sendData(form, "upload/Upload/saveImage")

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

    async setAnimal(raza, edad, genero, descripcion, precio, tipo) {
        const form = new FormData();
        form.append("id_usuario",  this.idusuario);
        form.append("id_descripcion",  this.id_descricion);
        form.append("raza", raza);
        form.append("edad", edad);
        form.append("genero", genero);
        form.append("descripcion", descripcion);
        form.append("precio", precio);
        form.append("tipo", tipo);


        return sendData(form, "administracion/A_Animales/setDescripcio")
    }














}