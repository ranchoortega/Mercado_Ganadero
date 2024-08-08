class Contactos{
    constructor(){
        this.token = $('.jwt').val();
        this.idusuario = $('.user').val();
        this.tablaContactos = "";

    }
    async cargarcontactos () {
        $(".ingrestablaContactosos").dataTable().fnDestroy();

        var columnas = [
            { "data": "name" },
            {
                "data": null,
                "defaultContent": '<div style="display: flex;justify-content: center;">' +
                    '<button type="button" id="btnVer" class="btn btn-success mr-1 mb-1"><i class="fa fa-eye"></i></button><button type="button" id="btnEliminar" class="btn btn-danger mr-1 mb-1"><i class="fa fa-trash"></i></button>' +
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
}