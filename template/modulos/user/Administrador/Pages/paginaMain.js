const paginas = new Paginas();


$(document).ready(async function () {

    await paginas.cargarPage();


});

$(document).on('click', '#btnVer', function () {
    var data = paginas.tablaPages.row($(this).parents('tr')).data();
    let respuestn =  data.status == "1"?"OCULTAR":"MOSTRAR";
    let valor =  data.status == "1"?"0":"1";
    paginas.id_pages_status = data.id_pages_status;
    mensajeAccion('warning',respuestn, `¿DESEAS ${respuestn} ESTA SECCION?`).then(async (result) => {
        if (result.isConfirmed) {
            const { res, data } = await paginas.updateEstatus(valor);
            console.log(res);
            if (res.ok) {
                
            
                
                MensajeAlerta(data.icon, respuestn, data.mensaje, 'btn btn-primary');

                
                await paginas.cargarPage();

                paginas.id_pages_status = "";
            }
            else{
                MensajeAlerta(data.icon, respuestn, data.mensaje, 'btn btn-primary');
            }
           
           

        }
    })


});

