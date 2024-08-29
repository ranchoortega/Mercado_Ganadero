class Animales {
    constructor(tipo) {
        this.tipo = tipo;
        this.paginationContainer = $('#pagesNav'); // Utiliza jQuery aquí

        this.pages = 9;
        this.currentPage = 1;
        this.itemsPerPage = 9;

        this.firstPage = 0;
        this.secondPage = 8;

        this.verification = false;
        this.data = "";

        this.typeDis =   $('#whapsapweb').val()?$('#whapsapweb').val():$('#whapPhone2').val();
        this.webValida =   $('#whapsapweb').val()?true:false;
        
        console.log(this.typeDis);
        
        

        // Configura el manejador de eventos para los clics en la paginación
        this.paginationContainer.on('click', 'li.page-item', (event) => {
            this.handlePageClick(event);
        });
    }

    async getAnimales() {
        try {
            return sendDataGet(`C_Animales/getAnimales/${this.tipo}`);
        } catch (e) {
            console.log(e);
        }
    }

    async generalItems() {
        let startIndex = (this.currentPage - 1) * this.itemsPerPage;
        const contenedor = $('#cardAnimales'); // Utiliza jQuery aquí
        contenedor.empty(); // Limpiar el contenido

        for (; startIndex < this.pages; startIndex++) {
            if (startIndex >= this.data.length) break;
            const data = this.data[startIndex];
            const nuevoElemento = $('<div></div>').addClass('col-md-4 col-xs-6').html(`
                <div class="product">
                    <div class="product-img">
                        <img src="${data.url}" alt="">
                        <div class="product-label">
                        ${startIndex < 2 ? '<span class="new">NEW</span>' : ''}
                        </div>
                    </div>
                    <div class="product-body">
                        <p class="product-category">${data.edad} años</p>
                        <h3 class="product-name"><a href="#">${data.raza}</a></h3>
                        <h4 class="product-price">$${data.precio}</h4>
                        <div class="product-btns">
                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-phone"></i><a href="${this.createUrl(data.phone, data.raza, data.descripcion)}"  target="_blank">Contactanos</a></button>
                    </div>
                </div>`);
            contenedor.append(nuevoElemento);
        }

        if (!this.verification) {
            this.generarPages();
            const siguienteElemento = $('<li></li>').addClass('page-item').attr('value', this.currentPage ).html(`<a class="page-link">Siguiente</a>`);
            this.paginationContainer.append(siguienteElemento);
            this.verification = true;
        }


    }

    async generarPages() {
        try {
            this.verification = true;
            for (let index = 0; index < this.data.length; index++) {
                if (index > this.pages - 1) {
                    let next = this.currentPage
                    this.currentPage += 1;
                    this.pages += 9;
                    const paginaElemento = $('<li></li>').addClass('page-item').attr('value', next+1).html(`<a href="#" class="page-link">${this.currentPage}</a>`);
                    this.paginationContainer.append(paginaElemento);
                }
            }
        } catch (e) {
            console.error('Error al generar páginas:', e);
        }
    }

    handlePageClick(event) {
        const $target = $(event.currentTarget);
        const page = parseInt($target.attr('value'));
        console.log(page);
        
        if (!isNaN(page)) {
            this.currentPage = page;
            this.pages = page*9;
            // Aquí deberías actualizar la visualización con los datos de la página seleccionada.
            this.generalItems();
        }
    }

    createUrl(phone, raza, descripcion){
        let mensaje = encodeURIComponent(`Raza: ${raza} Descripción: ${descripcion}`);
        console.log(this.webValida?`${this.typeDis}send?phone=+52${phone}&text=${mensaje}`:`${this.typeDis}${phone}?text=${mensaje}`);
    
        return this.webValida?`${this.typeDis}send?phone=+52${phone}&text=${mensaje}`:`${this.typeDis}${phone}?text=${mensaje}`
    }
}
