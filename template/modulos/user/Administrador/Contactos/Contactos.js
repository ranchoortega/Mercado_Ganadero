class Contactos {
    constructor() {
        this.token = $('.jwt').val();
        this.idusuario = $('.user').val();
        this.tablaContactos = "";
        this.id_contacto = "";

    }
    async cargarcontactos() {
        $(".tablaContactos").dataTable().fnDestroy();

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
        this.tablaContactos = generarTabla2(
            'tablaContactos',
            `${urlServer}administracion/A_Contactos/getContactos`,
            datos,
            columnas,
            columnalongitud,
            this.token
        );

    }

    horaFecha(fechaHora) {
    
        const fecha = new Date(fechaHora.replace(' ', 'T')); // La 

        const fechaSolo = fecha.toISOString().split('T')[0]; // "2024-08-07"
        const horaSolo = fecha.toTimeString().split(' ')[0]; // "18:50:15"

      return {
        hora:horaSolo, 
        fecha:fechaSolo
      }

    }
    async deleteContacto() {
        try {
            return sendDataGet(`administracion/A_Contactos/deleteContacto/${this.id_contacto}`)
            
           
        } catch (e) {
            console.log("hh");
        }
    }

}