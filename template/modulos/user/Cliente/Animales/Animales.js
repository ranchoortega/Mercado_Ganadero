class Animales {
	constructor(tipo) {
		this.tipo = tipo;
		console.log(this.tipo);

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

		this.divElement = document.getElementById("icon" + this.tipo);

		if (this.divElement) {
			this.divElement.style.borderBottom = "2px solid #e70000";
		}








	}

	async getAnimales() {
		try {
			return sendDataGet(`C_Animales/getAnimales?tipo=${this.tipo}&page=${this.page}`);
		} catch (e) {
			console.log(e);
		}



	}

	async generalItems() {
		const contenedor = $('#cardAnimales'); // Utiliza jQuery aquí
		contenedor.empty(); // Limpiar el contenido
		console.log(this.data);

		// Cambiamos a una función de flecha para preservar el contexto de 'this'
		this.data.forEach((elemento, i) => {
			const nuevoElemento = $('<div></div>').addClass('col-lg-4 col-md-6 col-12').html(`
                <div class="product">
                    <div class="product-img">
                        <img src="${elemento.url}" alt="">
                        <div class="product-label">
                        ${i < 3 && this.page == 0 ? '<span class="new">NUEVO</span>' : ''}
                        </div>
                    </div>
                    <div class="product-body">
					
                  
                        <h2 class="product-name"><a href="#">${elemento.raza}</a></h3>
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
			const siguienteElemento = this.page == 0 ? '' : $('<li></li>').addClass('page-item').attr('value', this.page + 1).html(`<a class="page-link">Siguiente</a>`)

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
				const {
					res,
					data
				} = await this.getAnimales(); // Espera la respuesta de getAnimales
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

	verificarCantidad(cantidad) {
		try {
			if (cantidad == 0) {

				const divcob = document.getElementById('divcob');
				const contenidoHTML = `
			<div style="height: 27vh; display: flex; align-items: center; justify-content: space-evenly; flex-direction: column;">
				<svg xmlns="http://www.w3.org/2000/svg" width="251" height="154" viewBox="0 0 251 154">
					<g fill="none" fill-rule="evenodd">
						<path fill="#CCC" d="M18 151h233v2H18v-2zm-18 0h13v2H0v-2z"></path>
						<path fill="#DFDFDF" d="M152 133v8.165h-50V133H28v8.165c0 5.52 3.405 11.827 13.647 11.835l168.906-.291C228.179 152.723 226.377 133 226 133h-74z"></path>
						<path fill="#F7D032" d="M153.303 133.42l-24.278.011 24.278.018z"></path>
						<path fill="#FFF" d="M58.513 132.71h139.604V34.572l-139.604.397z"></path>
						<path fill="#BBB" d="M30 147c.735 2.575 5.553 6.276 13.283 6.276L211 153c6.737 0 12.34-3.372 13-6H30z"></path>
						<path stroke="#CCC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M198 132H59"></path>
						<path stroke="#999" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M225 134v7.285c0 4.325-4.247 10.715-13.393 10.715H46.489"></path>
						<path stroke="#CCC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M45 97V28a6 6 0 0 1 6-6h155a6 6 0 0 1 6 6v99"></path>
						<path stroke="#CCC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M198 132.492V37.367c0-1.599-1.397-2.367-3-2.367l-112.35-.11-13.717.094-8.016.016c-1.041 0-1.6.524-1.603 1.567"></path>
						<path stroke="#CCC" stroke-linecap="round" stroke-width="2" d="M113.857 50.642c-7.217 3.53-13.356 9.515-17.051 17.44m-3.464 15.03c-.125 8.971 3.073 17.673 8.959 24.283a34.437 34.437 0 0 0 11.2 8.329c9.825 4.58 20.731 4.139 29.925-.271 7.325-3.513 13.564-9.546 17.302-17.563 2.58-5.533 3.67-11.371 3.436-17.045-.282-6.799-2.468-13.362-6.275-18.882a34.465 34.465 0 0 0-13.857-11.713 34.436 34.436 0 0 0-13.932-3.236c-5.63-.107-11.2 1.16-16.243 3.628"></path>
						<g>
							<path stroke="#CCC" stroke-linecap="square" stroke-width="2" d="M162.369 44.033l-9.286 10.683"></path>
							<path fill="#E6E6E6" d="M177.11 39.194l-4.262 4.902c-2.12 2.44-6.34 2.241-9.423-.438-3.083-2.68-3.866-6.831-1.746-9.27l14.488-16.667 13.418-15.436c2.118-2.436 6.339-2.239 9.422.44 3.082 2.68 3.865 6.833 1.747 9.269"></path>
							<path stroke="#CCC" stroke-linecap="round" stroke-width="2" d="M161.755 35.04c-2.12 2.438-1.657 6.312 1.032 8.649 2.689 2.337 6.589 2.257 8.71-.182l14.487-16.666 13.418-15.436"></path>
						</g>
						<path fill="#CCC" d="M126.321 96.605h4.914v5.136h-4.914v-5.136zm-5.309-28.358c2.009-2.165 4.766-3.247 8.272-3.247 3.243 0 5.84.926 7.79 2.778 1.95 1.852 2.926 4.218 2.926 7.099 0 1.744-.358 3.16-1.074 4.246-.716 1.087-2.16 2.684-4.333 4.79-1.58 1.531-2.605 2.828-3.074 3.89-.47 1.061-.704 2.63-.704 4.703h-4.395c0-2.354.28-4.25.84-5.691.559-1.44 1.785-3.09 3.678-4.95l1.976-1.951a8.174 8.174 0 0 0 1.432-1.754c.658-1.07.987-2.18.987-3.333 0-1.613-.481-3.012-1.444-4.197-.963-1.186-2.556-1.778-4.778-1.778-2.749 0-4.65 1.02-5.704 3.062-.592 1.135-.93 2.773-1.012 4.913H118c0-3.555 1.004-6.415 3.012-8.58z"></path>
					</g>
				</svg>
				<h4>No se han agregado animales</h4>
			</div>
			`;

				// Insertar el contenido HTML en el elemento
				divcob.innerHTML = contenidoHTML;

				return false;

			}

			return true;



		} catch (error) {
			console.log(error);


		}

	}
}
