class Welcome {
    constructor() {
        this.token = $('.jwt').val();
        this.idusuario = $('.user').val();
        console.log(this.idusuario);
        this.dataRecomendados = [];
        this.dataRecientes = [];
    }

    async getAnimalesNuevos() {
        try {
            const response = await sendDataGet(`C_Animales/getAnimalesRecomendados`);
            console.log("Datos obtenidos (Recomendados):", response);

            if (response && response.data && response.data.data && Array.isArray(response.data.data)) {
                this.dataRecomendados = response.data.data; 
                this.generalItems('#animalesRecomendados', this.dataRecomendados); 
            } else {
                console.log('No se encontraron animales recomendados.');
                this.mostrarMensajeSinAnimales('#animalesRecomendados');
            }
        } catch (e) {
            console.error('Error al obtener animales recomendados:', e);
            this.mostrarMensajeSinAnimales('#animalesRecomendados');
        }
    }

    async getAnimalesRecientes() {
        try {
            const response = await sendDataGet(`C_Animales/getAnimalesAgregados`);
            console.log("Datos obtenidos (Recientes):", response);
            if (response && response.data && response.data.data && Array.isArray(response.data.data)) {
                this.dataRecientes = response.data.data; 
                this.generalItemsNuevos('#animalesRecientes', this.dataRecientes); 
            } else {
                console.log('No se encontraron animales recientes.');
                this.mostrarMensajeSinAnimales('#animalesRecientes');
            }
        } catch (e) {
            console.error('Error al obtener animales recientes:', e);
            this.mostrarMensajeSinAnimales('#animalesRecientes');
        }
    }

    createAnimalCard(elemento, i) {
        return $(`
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="${elemento.url || 'default_image_url.jpg'}" alt="">
                        <div class="product-label">
                           <span class="new">RECOMENDADO</span>
                        </div>
                    </div>
                    <div class="product-body">
                        <h2 class="product-name"><a href="#">${elemento.raza}</a></h2>
                        <div class="row">
                            <div class="col-4">
                                <div class="product-body">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <a class="product-category">${elemento.edad} meses</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="product-body">
                                    <i class="fa-solid fa-venus-mars"></i>
                                    <a class="product-category">${elemento.genero}</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="product-body">
                                    <i class="fa-solid fa-venus-mars"></i>
                                    <a class="product-category">${elemento.anuncio}</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="product-price">$${elemento.precio}</h4>
                        <div class="product-btns">
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rápida</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                            <i class="fa fa-phone"></i>
                            <a href="${this.createUrl(elemento.phone, elemento.raza, elemento.descripcion)}" target="_blank">Contáctanos</a>
                        </button>
                    </div>
                </div>
            </div>
        `);
    }

    generalItems(contenedorSelector, data) {
        console.log("Generando tarjetas con datos:", data);
        const contenedor = $(contenedorSelector);
        contenedor.empty();

        if (!Array.isArray(data) || data.length === 0) {
            contenedor.append('<p>No hay animales disponibles.</p>');
            return;
        }

        data.forEach((elemento, i) => {
            const nuevoElemento = this.createAnimalCard(elemento, i);
            contenedor.append(nuevoElemento);
        });
    }



    mostrarMensajeSinAnimales(contenedorSelector) {
        const contenedor = $(contenedorSelector);
        contenedor.empty();
        contenedor.append('<p>No hay animales disponibles en este momento.</p>');
    }

    createUrl(phone, raza, descripcion) {
        let mensaje = encodeURIComponent(`Raza: ${raza} Descripción: ${descripcion}`);
        return `https://api.whatsapp.com/send?phone=${phone}&text=${mensaje}`; 
    }






    createAnimalCardNuevo(elemento, i) {
        return $(`
            <div class="col-md-3 col-xs-6">
                <div class="product">
                    <div class="product-img">
                        <img src="${elemento.url || 'default_image_url.jpg'}" alt="">
                        <div class="product-label">
                        <span class="new">NUEVO</span>
                        </div>
                    </div>
                    <div class="product-body">
                        <h2 class="product-name"><a href="#">${elemento.raza}</a></h2>
                        <div class="row">
                            <div class="col-4">
                                <div class="product-body">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <a class="product-category">${elemento.edad} meses</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="product-body">
                                    <i class="fa-solid fa-venus-mars"></i>
                                    <a class="product-category">${elemento.genero}</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="product-body">
                                    <i class="fa-solid fa-venus-mars"></i>
                                    <a class="product-category">${elemento.anuncio}</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="product-price">$${elemento.precio}</h4>
                        <div class="product-btns">
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">vista rápida</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn">
                            <i class="fa fa-phone"></i>
                            <a href="${this.createUrl(elemento.phone, elemento.raza, elemento.descripcion)}" target="_blank">Contáctanos</a>
                        </button>
                    </div>
                </div>
            </div>
        `);
    }



    
    generalItemsNuevos(contenedorSelector, data) {
        console.log("Generando tarjetas con datos:", data);
        const contenedor = $(contenedorSelector);
        contenedor.empty();

        if (!Array.isArray(data) || data.length === 0) {
            contenedor.append('<p>No hay animales disponibles.</p>');
            return;
        }

        data.forEach((elemento, i) => {
            const nuevoElemento = this.createAnimalCardNuevo(elemento, i);
            contenedor.append(nuevoElemento);
        });
    }
}


