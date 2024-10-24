const proveedores = new Proveedores();
$(document).ready(async () => {

	$('#liproveedores').hide();



	if (proveedores.id_usuario != "") {

		$('.divLoginAndCreate').hide();


	} else {
		$('.divCrear').hide();
	}

	const {
		res,
		data
	} = await proveedores.getEstados();
	console.log("eeeeeeeeeeeee");
	console.log(data);

	data.forEach(function (estado) {
		$('#mimunicipio').append(`<option value="${estado.id}">${estado.estado}</option>`);

	});








});

$('#btnFile').on('click', async () => {
	
	if (true) {

		let raza = $('#raza').val();
		let edad = $('#edad').val();
		let genero = $('#genero').val();
		let descripcion = $('#descripcion').val();
		let precio = $('#precio').val();
		let anuncio = $('#anuncio').val();
		let peso = $('#peso').val();
		let desparasitado = $('#desparasitado').val();
		let tipo = $('#tipo').val();

		validarDesparasitado = proveedores.validarCampo(desparasitado, 'msgpdesparasitado', 'Selecciona si, si o no.');
		validarTipo = proveedores.validarCampo(tipo, 'msgtipo', 'Selecciona el tipo de animal.');
		validarRaza = proveedores.validarCampo(raza, 'msgpraza', 'Ingrese la raza.');
		validarEdad = proveedores.validarCampo(edad, 'msgpedad', 'Ingrese la edad');
		validarGenero = proveedores.validarCampo(genero, 'msgpgenero', 'Selecciona un genero');
		validarDescipcion = proveedores.validarCampo(descripcion, 'msgpdescripcion', 'Ingresa una descipcion.');
		validarPrecio = proveedores.validarCampo(precio, 'msgpprecio', 'Ingresa el precio');
		validarAnuncio = proveedores.validarCampo(anuncio, 'msgpanuncio', 'Ingresa el tipo de anuncio');
		validarPeso = proveedores.validarCampo(peso, 'msgpeso', 'Ingresa el peso');

		if (validarRaza && validarEdad && validarGenero && validarDescipcion && validarPrecio && validarAnuncio && validarPeso && validarDesparasitado && validarTipo) {

			var fileInput = $("#newfile")[0];
			let fileVali = fileInput.files.length > 0 ? "si" : "";
			validarFile = proveedores.validarCampo(fileVali, 'msgfile', 'Ingresa una imagen');


			let archivoInput = document.getElementById('newfile');
			if (archivoInput.files.length > 0) {
				let archivo = archivoInput.files[0];
				let extension = archivo.name.split('.').pop().toLowerCase();
				let permitidas = ['png', 'jpg'];
				if (permitidas.indexOf(extension) === -1) {
					MensajeAlerta('warning', '', 'Seleccione una imagen válida (png o jpg)', 'btn btn-primary');
					return false;
				} else {
					var file = fileInput.files[0]; // Obtén el primer archivo seleccionado
					console.log("Antes de setAnimal");
					const {
						res: resFile,
						data: dataFile
					} = await proveedores.setAnimal(raza, edad, genero, descripcion, precio, desparasitado, anuncio, peso, tipo);
					if (resFile.ok) {
						if (dataFile.res) {
					console.log("Despues de setAnimal");

							const {
								res: resAnimal,
								data: dataAnimal
							} = await proveedores.upload(file, dataFile.res);
							if (resAnimal.ok) {
								if (dataAnimal.res) {
									mensaje(dataAnimal.icon, 'CORRECTO', dataAnimal.mensaje);
									limpiarElementos('.input');
								} else {
									mensaje(dataAnimal.icon, 'ERROR', dataAnimal.mensaje);

								}

							}

						} else {
							mensaje(dataFile.icon, 'ERROR', dataFile.mensaje);
						}
					}
				}


			} else {
				MensajeAlerta('warning', '', 'Por favor, suba un archivo (imagen)', 'btn btn-primary');
			}

		} else {

		}

	} else {
		MensajeAlerta('error', '', 'Inicia sesion por favor', 'btn btn-primary');
	}

});




//USER

