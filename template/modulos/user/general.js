 let token = $('.jwt').val();

var setGeneral = async (datos, ruta) => {
	try {
		const response = await fetch(base_url + ruta, {
			method: 'POST', // or 'PUT'
			body: datos, // data can be `string` or {object}!
		});
		const data = await response.json();
		return data;
	} catch (e) {
		console.log(e);
	}
}

var sendData = async (datos, ruta) => {
	try {
		const res = await fetch(`${urlServer}${ruta}`, {
			method: 'POST', // or 'PUT'
			body: datos, // data can be `string` or {object}!
			headers: {
				"token": token
			}
		});
		const data = await res.json();
		return {res, data}; 
	} catch (e) {
		console.log(e);
	}
}
// Aquí puedes definir el ID que deseas enviar
//ADJ_Montos/getMontos?id=${this.idProcesoAdjudicacion}`, {
	

var sendDataGet = async (ruta) => {
	try {
		const res = await fetch(`${urlServer}${ruta}`, {
			method: 'GET', // or 'PUT'
		
			headers: {
				"token": token
			}
		});
		const data = await res.json();
		return {res, data}; 

	} catch (e) {
		console.log(e);
	}
}










var getGeneral = async (datos, ruta) => {
	try {
		const response = await fetch(base_url + ruta, {
			method: 'POST',
			body: datos,
		});
		const data = await response.json();
		if (data) {
			return data;
		} else {
			return false;
		}
	} catch (e) {
		console.log(e);
	}
}

var eliminarCampo = async (datos) => {
	try {
		const response = await fetch(base_url + "Administrador/Informacion/Oficios/SolicitudSuficiencia/eliminarCampo", {
			method: 'POST',
			body: datos,
		});
		const data = await response.json();
		if (data) {
			return data;
		} else {
			return false;
		}
	} catch (e) {
		console.log(e);
	}
}

var mensaje = function (icon, titulo, texto) {
	Swal.fire({
		title: titulo,
		text: texto,
		icon: icon,
		// showCancelButton: true,
		confirmButtonColor: '#3085d6',
		confirmButtonText: 'Ok!'
	})
}

var MensajeAlerta = function (icono, titulo, mensaje, btn) {
	Swal.fire({
		icon: icono,
		title: titulo,
		text: mensaje,
		confirmButtonClass: 'btn ' + btn,
		buttonsStyling: false
	});
}

var mensajeCarga = function (icon, titulo, texto) {
	Swal.fire({
		title: titulo,
		text: texto,
		icon: icon,
		// showCancelButton: true,
		confirmButtonColor: '#3085d6',
		confirmButtonText: 'Ok!'
	}).then((result) => {
		if (result.isConfirmed) {
			location.reload();
		}
	})
}

var setEvidencia = async (datos) => {
	try {
		const response = await fetch('https://documentos.seguimientovotacionespuebla.com/Checklist/setEvidenciaPlataformas', {
			method: 'POST', // or 'PUT'
			body: datos, // data can be `string` or {object}!
		});
		const data = await response.text();
		if (data) {
			return data;
		}
	} catch (e) {
		console.log(e);
	}
}

$(document).on('click', '#btn-cerrar-sesion', function () {
	Swal.fire({
		title: "CERRAR SESIÓN",
		text: "¿SEGURO DESEA CERRAR SESIÓN?",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		confirmButtonText: 'Aceptar'
	}).then(async (result) => {
		if (result.isConfirmed) {
			window.location = base_url + "Login/destruir";
		}
	})
});

var generarTabla = function (contenedor, urlpeticion, datos, columnas, columnalongitud) {
	var tabla = $('.' + contenedor).DataTable({
		language: {
			"processing": "Procesando...",
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No se encontraron resultados",
			"emptyTable": "Ningún dato disponible en esta tabla",
			"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
			"infoFiltered": "(filtrado de un total de _MAX_ registros)",
			"search": "Buscar:",
			"infoThousands": ",",
			"loadingRecords": "Cargando...",
			"paginate": {
				"first": "Primero",
				"last": "Último",
				"next": "Siguiente",
				"previous": "Anterior"
			},
			"aria": {
				"sortAscending": ": Activar para ordenar la columna de manera ascendente",
				"sortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		},
		lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
		fixedColumns: { leftColumns: 1 },
		//dom: 'lBtip',
		buttons: [
			{ text: 'Copiar', extend: 'copyHtml5', exportOptions: { columns: [0, ':visible'] } },
			{ text: 'PDF', extend: 'pdfHtml5', exportOptions: { columns: ':visible' } },
			{ text: 'Imprimir', extend: 'print', exportOptions: { columns: ':visible' } },
			{ text: 'Excel', extend: 'csv', exportOptions: { columns: [0, ':visible'] } }
		],
		"ajax": {
			url: base_url + urlpeticion,
			type: "POST",
			data: datos,
			dataType: 'json'
		},
		"columns": columnas,
		"columnDefs": columnalongitud
	});

	return tabla;
}
var generarTabla2 = function (contenedor, urlpeticion, datos, columnas, columnalongitud, token) {
	var tabla = $('.' + contenedor).DataTable({
		language: {
			"processing": "Procesando...",
			"lengthMenu": "Mostrar _MENU_ registros",
			"zeroRecords": "No se encontraron resultados",
			"emptyTable": "Ningún dato disponible en esta tabla",
			"info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
			"infoFiltered": "(filtrado de un total de _MAX_ registros)",
			"search": "Buscar:",
			"infoThousands": ",",
			"loadingRecords": "Cargando...",
			"paginate": {
				"first": "Primero",
				"last": "Último",
				"next": "Siguiente",
				"previous": "Anterior"
			},
			"aria": {
				"sortAscending": ": Activar para ordenar la columna de manera ascendente",
				"sortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		},
		lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
		fixedColumns: { leftColumns: 1 },
		//dom: 'lBtip',
		buttons: [
			{ text: 'Copiar', extend: 'copyHtml5', exportOptions: { columns: [0, ':visible'] } },
			{ text: 'PDF', extend: 'pdfHtml5', exportOptions: { columns: ':visible' } },
			{ text: 'Imprimir', extend: 'print', exportOptions: { columns: ':visible' } },
			{ text: 'Excel', extend: 'csv', exportOptions: { columns: [0, ':visible'] } }
		],
		"ajax": {
			url: urlpeticion,
			type: "POST",
			data: datos,
			headers: {
				"token": token
			},
			dataType: 'json'
		},
		"columns": columnas,
		"columnDefs": columnalongitud
	});

	return tabla;
}
var mensajeAccion = function (icon, titulo, texto) {
	return Swal.fire({
		title: titulo,
		text: texto,
		icon: icon,
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		confirmButtonText: 'Aceptar'
	});
}

var limpiarElementos = function clearSpecificElements() {
    // Selecciona todos los elementos con la clase 'clearable'
    const elements = document.querySelectorAll('.input');
    elements.forEach(element => {
        if (element.tagName === 'INPUT') {
			element.value = '';
        } else if (element.tagName === 'TEXTAREA') {
            // Limpia el valor de textareas
            element.value = '';
        } else if (element.tagName === 'SELECT') {
            // Restaura el select al primer valor
            element.selectedIndex = "";
        }
    });
}
