const login = new Login();
$(document).ready(async () => {


	$('#liproveedores').hide();


	if (login.id_usuario != "") {

		$('.divLoginAndCreate').hide();


	} else {
		$('.divCrear').hide();
	}
	const {
		res,
		data
	} = await getEstados();
	console.log("eeeeeeeeeeeee");
	console.log(data);
	$('#mimunicipio').append(`<option value="null">Selecciona un estado</option>`);
	data.forEach(function (estado) {
		$('#mimunicipio').append(`<option value="${estado.id}">${estado.estado}</option>`);

	});




});
$('#mimunicipio').change(async function() {
	// Obtener el valor seleccionado
	let valorSeleccionado = $(this).val();
	

	const{res,data}= await getEstado_Municipio(valorSeleccionado);
	$('#estado-municipio').empty();

	
	data.forEach(function (estado) {
		$('#estado-municipio').append(`<option value="${estado.id}">${estado.municipio}</option>`);

	});

	
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
				login.obtenerDireccion(position.coords.latitude, position.coords.longitude)

				console.log(login.ubicacionData);

				// Centra el mapa en la ubicación del usuario
				map.setView(userLocation, 13);

				// Agrega o mueve el marcador a la nueva ubicación
				login.agregarOMoverMarcador(userLocation);
				login.guardarLocation = true;



			}, () => {
				alert('Error obteniendo la ubicación. Solo agrege el Estado y su municipio');
				login.guardarLocation = true;

			});
		} else {
			alert('Tu navegador no soporta geolocalización. Solo agrege el Estado y su municipio');
			login.guardarLocation = true;

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

		validarDesparasitado = login.validarCampo(desparasitado, 'msgpdesparasitado', 'Selecciona si, si o no.');
		validarTipo = login.validarCampo(tipo, 'msgtipo', 'Selecciona el tipo de animal.');
		validarRaza = login.validarCampo(raza, 'msgpraza', 'Ingrese la raza.');
		validarEdad = login.validarCampo(edad, 'msgpedad', 'Ingrese la edad');
		validarGenero = login.validarCampo(genero, 'msgpgenero', 'Selecciona un genero');
		validarDescipcion = login.validarCampo(descripcion, 'msgpdescripcion', 'Ingresa una descipcion.');
		validarPrecio = login.validarCampo(precio, 'msgpprecio', 'Ingresa el precio');
		validarAnuncio = login.validarCampo(anuncio, 'msgpanuncio', 'Ingresa el tipo de anuncio');
		validarPeso = login.validarCampo(peso, 'msgpeso', 'Ingresa el peso');

		if (validarRaza && validarEdad && validarGenero && validarDescipcion && validarPrecio && validarAnuncio && validarPeso && validarDesparasitado && validarTipo) {

			var fileInput = $("#newfile")[0];
			let fileVali = fileInput.files.length > 0 ? "si" : "";
			validarFile = login.validarCampo(fileVali, 'msgfile', 'Ingresa una imagen');


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
					} = await login.setAnimal(raza, edad, genero, descripcion, precio, desparasitado, anuncio, peso, tipo);
					if (resFile.ok) {
						if (dataFile.res) {
							const {
								res: resAnimal,
								data: dataAnimal
							} = await login.upload(file, dataFile.res);
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



$('.btnViewCreate').on('click', () => {
	$('.divCrear').show();
	$(".divLogin").hide();

});
$('.btnViewLogin').on('click', () => {
	$('.divCrear').hide();
	$(".divLogin").show();

});
$('.guardarLocation').on('click', () => {
	let estado = $('#mimunicipio').val();
	let municipio = $('#estado-municipio').val();
	console.log(estado);
	console.log(municipio);
	
	validarEstado = login.validarCampo(estado, 'msgpmimunicipio', 'Seleccione un estado.');
	validarMunicipio = login.validarCampo(municipio, 'msgpestado-municipio', 'Seleccione un municipio.');
	validarLocation = login.validarCampo(login.guardarLocation, 'msgpbtnlocation', 'Has clic en el boton, por favor');

console.log(login.guardarLocation);



	if (validarLocation && validarEstado && validarMunicipio) {
		login.idEstado = municipio;
		login.aguardado = true;
		
	}

});

//USER

$('#create').on('click', async () => {

	let user = $('#user').val();
	let password = $('#password').val();
	let name = $('#name').val();
	let phone = $('#phone').val();
	validarUser = login.validarCampo(user, 'msguser', 'El usuario es obligatorio.');
	validarName = login.validarCampo(name, 'msgpname', 'El nombre es obligatorio.');
	validarPhone = login.validarCampo(phone, 'msgphone', 'El telefono es obligatorio.');
	validarPassword = login.validarCampo(password, 'msgpassword', 'La contraseña es obligatoria');
	validarLocation = login.validarLocation('msglocation', 'Haz clic en buscar')


	if (validarUser && validarName && validarPhone && validarPassword && validarLocation) {
		validarLengthPhone = login.lengthCampo(phone.length, 'msgphone', 'Ingrese 10 dígitos', 10);
		validarLengthPassword = login.lengthCampo(password.length, 'msgpassword', 'Ingrese 8 caracteres', 8);
		validarLengthUser = login.lengthCampo(user.length, 'msguser', 'Ingrese 8 caracteres', 8);

		if (validarLengthPhone && validarLengthPassword && validarLengthUser) {
			const {
				res,
				data
			} = await login.setProveedor(user, password, name, phone)
			if (res.ok) {
				if (data.res) {
					$('#user').val('');
					$('#password').val('');
					$('#name').val('');
					$('#phone').val('');

					mensaje(data.icon, 'CORRECTO', data.mensaje);
					await login.guardarSesion(data);
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

document.getElementById('btnLogin').addEventListener('click', async () => {
    let usuario = document.getElementById('usuario').value;
    let pass = document.getElementById('contrasena').value;
    let { res, data } = await login.iniciarSesion(usuario, pass);
    if (res?.status != 200) {
        MensajeAlerta('error', '', data.mensaje, 'btn-danger');
        return false;
    }
    if (data.activo < 1) {
        MensajeAlerta('error', '', 'Usuario inactivo', 'btn-danger')
        return false;
    }

	console.log(data);
	
    login.guardarSesion(data);
});
document.addEventListener("keydown", async (e) => {
    if (e.key == "Enter") {
        let usuario = document.getElementById('usuario').value;
        let pass = document.getElementById('contrasena').value;
        let { res, data } = await login.iniciarSesion(usuario, pass);
        if (res?.status != 200) {
            MensajeAlerta('error', '', data.mensaje, 'btn-danger');
            return false;
        }
        if (data.activo < 1) {
            MensajeAlerta('error', '', 'Usuario inactivo', 'btn-danger')
            return false;
        }

        login.guardarSesion(data);
    }
})