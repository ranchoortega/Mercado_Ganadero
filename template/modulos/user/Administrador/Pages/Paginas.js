class Paginas {
    constructor() {
        this.token = $('.jwt').val();
        this.idusuario = $('.user').val();
        this.tablaPages = "";
        this.id_pages_status = "";

    }
    async cargarPage() {
        $(".tablaPages").dataTable().fnDestroy();

        var columnas = [
            { "data": "name" },
            {
                "data": "status", // Agregar status aquí para acceder a él
                "render": function (data, type, row) {
                     let icono = ""
                     

                    if (data != "1") { 
                        icono = "fa-solid fa-eye-slash";
                    }
                    else{
                        icono = "fa fa-eye";
                    }
                    return  `<div style="display: flex;justify-content: center;">
                        <button type="button" id="btnVer" class="btn btn-success mr-1 mb-1"  data-bs-toggle="modal"                            data-original-title="test" data-bs-target="#exampleModal" ><i class="${icono}"></i></button></div>
                        `

                }
            },
            {
                "data": "status", // Agregar status aquí para acceder a él
                "render": function (data, type, row) {
                     let icono = ""
                     

                    if (data === "1") { 
                        icono = "VISTO";
                    }
                    else{
                        icono = "OCULTO";
                    }
                    return  `<div style="display: flex;justify-content: center;">${icono}
                       </div>
                        `

                }
            }
        ];



        var columnalongitud = [
            { "width": 150, "targets": 0 },
            { "width": 150, "targets": 1 },
            { "width": 150, "targets": 2 }

        ];

        var datos = {
        };
        this.tablaPages = generarTabla2(
            'tablaPages',
            `${urlServer}administracion/A_Pages/getPages`,
            datos,
            columnas,
            columnalongitud,
            this.token
        );

    }


    async updateEstatus(valor) {
        try {
            return sendDataGet(`administracion/A_Pages/updateStatus/${this.id_pages_status}/${valor}`)


        } catch (e) {
            console.log("hh");
        }
    }

}