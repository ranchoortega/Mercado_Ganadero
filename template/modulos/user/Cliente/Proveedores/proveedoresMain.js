const proveedores = new Proveedores();
$(document).ready(() => {

	$('#liproveedores').hide();



	console.log(proveedores.id_usuario);
	if (proveedores.id_usuario != "") {

		$('.divLoginAndCreate').hide();


	} else {
		$('.divCrear').hide();
	}






});
$('#exampleModalCenter').on('shown.bs.modal', function () {
	setTimeout(function () {
		map.invalidateSize(); // Redibuja el mapa cuando el modal se muestra
	}, 300); // 300 ms de retraso para asegurarse de que el modal esté completamente visible

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '© OpenStreetMap contributors'
	}).addTo(map);

	 // Variable para el marcador

	// Función para agregar o mover el marcador con opción de arrastre


	// Función para hacer la geocodificación inversa usando Nominatim



	// Evento para mostrar la ubicación del usuario
	document.getElementById('localizar').addEventListener('click', () => {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition((position) => {
				const userLocation = [position.coords.latitude, position.coords.longitude];
                proveedores.obtenerDireccion(position.coords.latitude, position.coords.longitude)

                console.log(proveedores.ubicacionData);
                
				// Centra el mapa en la ubicación del usuario
				map.setView(userLocation, 13);

				// Agrega o mueve el marcador a la nueva ubicación
				proveedores.agregarOMoverMarcador(userLocation);
                

			}, () => {
				alert('Error obteniendo la ubicación.');
			});
		} else {
			alert('Tu navegador no soporta geolocalización.');
		}
	});

	// Redibujar el mapa al abrir el modal
	// Redibujar el mapa al abrir el modal con un pequeño retraso


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
					const {
						res: resFile,
						data: dataFile
					} = await proveedores.setAnimal(raza, edad, genero, descripcion, precio, desparasitado, anuncio, peso, tipo);
					if (resFile.ok) {
						if (dataFile.res) {
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


$('.btnLocation').on('click', async () => {


});
$('.btnViewCreate').on('click', () => {
	$('.divCrear').show();
	$(".divLogin").hide();

});
$('.btnViewLogin').on('click', () => {
	$('.divCrear').hide();
	$(".divLogin").show();

});
$('.guardarLocation').on('click', () => {
	proveedores.guardarLocation = true;

});

//USER

$('#create').on('click', async () => {

	let user = $('#user').val();
	let password = $('#password').val();
	let name = $('#name').val();
	let phone = $('#phone').val();
	validarUser = proveedores.validarCampo(user, 'msguser', 'El usuario es obligatorio.');
	validarName = proveedores.validarCampo(name, 'msgpname', 'El nombre es obligatorio.');
	validarPhone = proveedores.validarCampo(phone, 'msgphone', 'El telefono es obligatorio.');
	validarPassword = proveedores.validarCampo(password, 'msgpassword', 'La contraseña es obligatoria');
	validarLocation = proveedores.validarLocation('msglocation', 'Haz clic en buscar')


	if (validarUser && validarName && validarPhone && validarPassword && validarLocation) {
		validarLengthPhone = proveedores.lengthCampo(phone.length, 'msgphone', 'Ingrese 10 dígitos', 10);
		validarLengthPassword = proveedores.lengthCampo(password.length, 'msgpassword', 'Ingrese 8 caracteres', 8);
		validarLengthUser = proveedores.lengthCampo(user.length, 'msguser', 'Ingrese 8 caracteres', 8);

		if (validarLengthPhone && validarLengthPassword && validarLengthUser) {
			const {
				res,
				data
			} = await proveedores.setProveedor(user, password, name, phone)
			if (res.ok) {
				if (data.res) {
					$('#user').val('');
					$('#password').val('');
					$('#name').val('');
					$('#phone').val('');

					mensaje(data.icon, 'CORRECTO', data.mensaje);
					await proveedores.guardarSesion(data);
					location.reload();
					return false;
				} else {
					mensaje(data.icon, 'Usuario', data.mensaje);
					return false;
				}

			}
			MensajeAlerta('error', '', 'Error al guardar la informacion, intentelo mas tarde', 'btn btn-primary');

		} else {
			MensajeAlerta('error', '', 'Ingrese toda la informacion requerida', 'btn btn-danger');
			return false;
		}


	} else {
		MensajeAlerta('error', '', 'Ingrese toda la informacion', 'btn btn-danger');
		return false;
	}



});
