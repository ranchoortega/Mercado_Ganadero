class Proveedores {
	constructor() {
		this.id_usuario = $('.user').val();


		this.id_proveedor = "";

		this.verificationLocation = false;

		this.ubicacionData = "";
		this.guardarLocation = false;

		this.municipio = "";
		this.estado = "";
		this.pais = "";


	}



	async upload(file, id_descripcion) {
		const form = new FormData();

		form.append("file", file);
		form.append("id_descripcion", id_descripcion);
		return sendData(form, "upload/Upload/saveImage")

	}

	validarCampo(valorCampo, idMensaje, mensaje) {
		if (valorCampo === '') {
			$(`.${idMensaje}`).html(mensaje);
			return false;
		} else {
			$(`.${idMensaje}`).html('');
			return true;
		}
	}
	lengthCampo(valorCampo, idMensaje, mensaje, number) {
		if (valorCampo != number) {
			$(`.${idMensaje}`).html(mensaje);
			return false;
		} else {
			$(`.${idMensaje}`).html('');
			return true;
		}
	}
	validarLocation(idMensaje, mensaje) {
		if (!this.guardarLocation) {
			$(`.${idMensaje}`).html(mensaje);
			return false;
		} else {
			$(`.${idMensaje}`).html('');
			return true;
		}
	}
	//Sesion
	async setProveedor(user, password, name, phone) {
		const form = new FormData();
		form.append("user", user);
		form.append("password", password);
		form.append("name", name);
		form.append("phone", phone);
		form.append("location", JSON.stringify(this.ubicacionData));
		form.append("pais", this.pais);
		form.append("estado", this.estado);
		form.append("municipio", this.municipio);

		return sendData(form, "login/setUsers")
	}
	async guardarSesion(dataUsuario) {
		const form = new FormData();

		form.append('idUsuario', dataUsuario.res);

		const res = await fetch(`${base_url}Login/SaveSesionUser`, {
			method: 'POST',
			body: form
		});
		const data = await res.json();


		data ? window.location.href = `${base_url}administrador/Views` : window.location.href = `${base_url}`;
	}
	async setAnimal(raza, edad, genero, descripcion, precio, desparasitado, anuncio, peso, tipo) {
		const form = new FormData();
		form.append("id_usuario", 4);
		form.append("raza", raza);
		form.append("edad", edad);
		form.append("genero", genero);
		form.append("descripcion", descripcion);
		form.append("precio", precio);
		form.append("desparasitado", desparasitado);
		form.append("anuncio", anuncio);
		form.append("peso", peso);
		form.append("tipo", tipo);

		return sendData(form, "C_Animales/setDescripcio")
	}

	agregarOMoverMarcador(latlng) {
		let marker;
		if (marker) {
			marker.setLatLng(latlng);
		} else {
			marker = L.marker(latlng, {
					draggable: true
				}).addTo(map)
				.bindPopup("Puedes moverme").openPopup();

			// Evento que se dispara cuando el marcador es arrastrado
			marker.on('dragend', (e) => { // Cambiado a función de flecha
				const nuevasCoordenadas = e.target.getLatLng();

				// Llama a la función para obtener la dirección usando geocodificación inversa
				this.obtenerDireccion(nuevasCoordenadas.lat, nuevasCoordenadas.lng);
			});
		}
	}


	obtenerDireccion(lat, lng) {
		const url = `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lng}&addressdetails=1`;

		fetch(url)
			.then(response => response.json())
			.then(data => {
				console.log(data); // Imprime toda la respuesta de Nominatim

				if (data && data.address) {
					// Asegúrate de verificar si los campos existen antes de usarlos
					const {
						state,
						county,
						city,
						town,
						village,
						country,
						country_code
					} = data.address;

					// Almacena los valores relevantes
					this.municipio = county || city || town || village || 'N/A';
					this.estado = state || 'N/A';
					this.pais = country || 'N/A'; // A veces country puede no estar bien definido

					// Muestra la dirección obtenida
					alert(`Estado: ${this.estado}, Municipio: ${this.municipio}, País: ${this.pais}`);


					// Guarda los datos en formato JSON
					this.ubicacionData = {
						latitud: lat,
						longitud: lng
					};

					console.log("Datos de ubicación guardados:", this.ubicacionData); // Muestra el JSON en consola
				} else {
					alert('No se encontró una dirección para esta ubicación.');
				}
			})
			.catch(error => {
				console.error('Error obteniendo la dirección:', error);
				alert('Hubo un problema al obtener la dirección.');
			});
	}
	 getEstados() {
		

		try {
			return sendDataGet(`ubicacion/U_Ubicacion/getEstados`);
		} catch (e) {
			console.log(e);
		}
	}


}
