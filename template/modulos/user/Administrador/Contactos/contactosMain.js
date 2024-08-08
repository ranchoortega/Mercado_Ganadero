const contactos = new Contactos();


$(document).ready(async function () {
  
  await contactos.cargarcontactos();


});
$(document).on('click', '#btnVer', function () {
    var data = contactos.tablaContactos.row($(this).parents('tr')).data();
    console.log(data);
 
  });