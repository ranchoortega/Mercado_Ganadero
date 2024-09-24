class Animales {
	constructor(tipo) {
		this.tipo = tipo;
		this.paginationContainer = $('#pagesNav'); // Utiliza jQuery aquí


		this.verification = false;
		this.data = "";
		this.page = 0;

		this.typeDis = $('#whapsapweb').val() ? $('#whapsapweb').val() : $('#whapPhone2').val();
		this.webValida = $('#whapsapweb').val() ? true : false;


		this.totalPage = 0;
     








		// Configura el manejador de eventos para los clics en la paginación
		this.paginationContainer.on('click', 'li.page-item', (event) => {
			this.handlePageClick(event);
		});
	}

	async getAnimales() {
		try {
			return sendDataGet(`C_Animales/getAnimales?tipo=${this.tipo}&page=${this.page}`);
		} catch (e) {
			console.log(e);
		}
	}

	async numberAnimals() {
		try {

			return sendDataGet(`C_Animales/getNumber?tipo=${this.tipo}`);
		} catch (error) {
			console.log(e);
		}
	}

	async generalItems() {
		const contenedor = $('#cardAnimales'); // Utiliza jQuery aquí
		contenedor.empty(); // Limpiar el contenido
		console.log(this.data);

		// Cambiamos a una función de flecha para preservar el contexto de 'this'
		this.data.forEach((elemento, i) => {
			const nuevoElemento = $('<div></div>').addClass('col-md-4 col-xs-6').html(`
                <div class="product">
                    <div class="product-img">
                        <img src="${elemento.url}" alt="">
                        <div class="product-label">
                        ${i < 3 && this.page == 0 ? '<span class="new">NUEVO</span>' : ''}
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">${elemento.edad} años</p>
                        <h3 class="product-name"><a href="#">${elemento.raza}</a></h3>
                        <h4 class="product-price">$${elemento.precio}</h4>
                        <div class="product-btns">
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-phone"></i><a href="${this.createUrl(elemento.phone, elemento.raza, elemento.descripcion)}"  target="_blank">Contactanos</a></button>
                    </div>
                </div>`);
			contenedor.append(nuevoElemento);
		});

		if (!this.verification) {
			this.generarPages();
			const siguienteElemento = $('<li></li>').addClass('page-item').attr('value', this.page+1).html(`<a class="page-link">Siguiente</a>`);
			this.paginationContainer.append(siguienteElemento);
			this.verification = true;
		}
	}


	async generarPages() {
		try {
			let resultado = this.totalPage / 9;
            console.log(this.totalPage);
            

			// Redondear hacia arriba
			let resultadoRedondeado = Math.ceil(resultado);
			console.log(resultadoRedondeado); // Muestra el número de páginas a crear

			// Aquí creamos el número de páginas correspondiente
			for (let index = 0; index < resultadoRedondeado; index++) {
				const paginaElemento = $('<li></li>')
					.addClass('page-item')
					.attr('value', index)
					.html(`<a href="#" class="page-link">${index + 1}</a>`);
				this.paginationContainer.append(paginaElemento);
			}
		} catch (e) {
			console.error('Error al generar páginas:', e);
		}
	}


	async handlePageClick(event) {
        const $target = $(event.currentTarget);
        this.page = parseInt($target.attr('value'));
        console.log(this.page);
    
        if (!isNaN(this.page)) {
            try {
                const { res, data } = await this.getAnimales(); // Espera la respuesta de getAnimales
                this.data = data; // Asigna los datos obtenidos
                console.log(this.data);
                
                // Actualiza la visualización con los datos de la página seleccionada.
                this.generalItems();
            } catch (error) {
                console.error('Error al obtener animales:', error);
            }
        }
    }
    
	createUrl(phone, raza, descripcion) {
		let mensaje = encodeURIComponent(`Raza: ${raza} Descripción: ${descripcion}`);


		return this.webValida ? `${this.typeDis}send?phone=+52${phone}&text=${mensaje}` : `${this.typeDis}${phone}?text=${mensaje}`
	}
}
