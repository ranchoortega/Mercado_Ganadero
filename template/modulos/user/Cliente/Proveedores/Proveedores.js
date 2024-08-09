class Proveedores {
    constructor() {
        this.id_usuario = $('.user').val();


        this.id_proveedor = "";
        this.url = "";
        this.locatioText = "";
        this.location = { latitude: 0, longitude: 0 };
        this.verificationLocation = false;


    }
    async getLocation() {
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    this.reverseGeocode(latitude, longitude, (address) => {
                        if (address) {
                            const addressText = `${address.road || ''}, ${address.city || ''}, ${address.state || ''}, ${address.country || ''}`;
                            $('#location').val(addressText);
                            this.location = { latitude: latitude, longitude: longitude };
                            return true;
                        } else {
                            $(`.${idMensaje}`).html(mensaje);
                            $('#location').val("No se pudo obtener la dirección");
                            this.location = { latitude: 0, longitude: 0 };
                            return false;
                        }
                    });
                },
                (error) => {
                    $(`.${idMensaje}`).html(`Error: ${error.message}`);
                }
            );
        } else {
            $(`.${idMensaje}`).html("Geolocalización no soportada por el navegador.");
            return false;
        }
    }

    reverseGeocode(lat, lng, callback) {
        const url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&addressdetails=1`;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data && data.address) {
                    callback(data.address);
                } else {
                    callback(null);
                }
            })
            .catch(error => {
                console.error('Error en la geocodificación inversa:', error);
                callback(null);
            });
    }

    async upload(file) {
        const form = new FormData();

        form.append("file", file);
        return sendData(form, "upload/Upload/saveImage")

    }

    validarCampo(valorCampo,idMensaje,mensaje){
        if(valorCampo === ''){
            $(`.${idMensaje}`).html(mensaje);
            return false;
        }else{
            $(`.${idMensaje}`).html('');
            return true;
        }
    }
    lengthCampo(valorCampo,idMensaje,mensaje, number){
        if(valorCampo != number){
            $(`.${idMensaje}`).html(mensaje);
            return false;
        }else{
            $(`.${idMensaje}`).html('');
            return true;
        }
    }
    validarLocation(idMensaje,mensaje){
        if(!this.verificationLocation){
            $(`.${idMensaje}`).html(mensaje);
            return false;
        }else{
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
        form.append("location", JSON.stringify(this.location));

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
    async setAnimal(raza, edad, genero, descripcion, precio, id_file) {
        const form = new FormData();
        form.append("raza", raza);
        form.append("edad", edad);
        form.append("genero", genero);
        form.append("descripcion", descripcion);
        form.append("precio", precio);
        form.append("id_file", id_file);


        return sendData(form, "C_Animales/setAnimales")
    }


}