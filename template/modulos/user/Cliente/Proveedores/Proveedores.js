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

	//Sesion

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

	


}
