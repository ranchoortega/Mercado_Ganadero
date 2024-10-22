<style>
    /* Estilo para el header */
    html,
    body {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    /* Estilo para el header */
    #header {
        position: relative;
        width: 100%;
        height: 33vh;
        /* 100% de la altura de la ventana del navegador */
        overflow: hidden;
        /* Oculta el contenido que sobresalga */
        display: flex;
        align-items: center;
        /* Centra verticalmente el contenido */
        justify-content: center;
        /* Centra horizontalmente el contenido */
    }

    .header-search select option {
        color: #000000;

        /* Cambia el color del texto en los option */
        background-color: #ffffff;
        /* Cambia el color de fondo del option (opcional) */
    }

    /* Estilo para el video */
    #header video {
        position: absolute;
        /* Posiciona el video en relación con el contenedor */
        top: 0;
        left: 0;
        width: 100%;
        /* Ocupa todo el ancho del contenedor */
        height: 100%;
        /* Opcional: Si deseas que el video también ocupe toda la altura del contenedor */
        object-fit: cover;
        /* Mantiene la relación de aspecto y recorta el video si es necesario */
        z-index: 1;
        /* Asegura que el video esté debajo del contenido */
    }

    /* Estilo para la superposición oscura */
    #header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Color negro con opacidad del 50% */
        z-index: 2;
        /* Asegura que la superposición esté encima del video */
    }

    /* Estilo para el contenedor de búsqueda */
    .header-search {
        position: relative;
        z-index: 2;
        /* Asegura que esté encima del video */
        padding: 20px;
        /* Añade algo de espacio alrededor del contenedor */
    }

    /* Estilo para el select */
    .header-search select {
        position: relative;
        z-index: 3;
        /* Asegura que el select esté encima del video */
    }

    /* Estilo para el botón de búsqueda */
    .search-btn {
        position: relative;
        z-index: 3;
        /* Asegura que el botón esté encima del video */
    }
    .header-search .input {
    background-color: rgba(255, 255, 255, 0);
    color: #efefef;
    font-weight: 900;
    border-radius: 18px;
    padding: 10px 20px; /* Ajusta el relleno para hacer los botones más pequeños */
    max-width: 150px; /* Fija un ancho máximo para los botones */
    text-align: center; /* Centra el texto dentro de los botones */
    margin: 0 10px; /* Añade un espacio entre los botones */
    white-space: nowrap; /* Evita que el texto dentro de los botones se parta en varias líneas */
    border: 2px solid white; /* Añade un borde para mayor visibilidad */
}

/* Ajustes para la distribución de los botones */
.header-search form {
    display: flex;
    justify-content: center; /* Centra los botones en el contenedor */
    gap: 10px; /* Espacio entre los botones */
}
</style>
<div class="page-body">

    <header>
        <!-- TOP HEADER -->

        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- SEARCH BAR -->
                    <div class="col-md-12">
                        <div style=" display: flex; justify-content: space-evenly;">
                            <h1 dir="auto"  class="responsive-text" style="color: #ffffff; --lineHeightDesktop: 1.3; --fontSizeDesktop: 80px;position: relative;   z-index: 3;">Tu Mercado Ganadero</h1>
                        </div>

                        <div class="header-search text-center">
                            <form style="display:flex;">
                                <button class="input"  >
                                    <a href="" style="color: #ffffff">Vender</a>

                                </button>
                                <button class="input" >
                                    <a href="" style="color: #ffffff">Registrate</a>

                                </button>
                               

                            </form>
                        
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->

            <video autoplay loop muted>
                <source src="<?php echo base_url('template/recursos/video/campoIndice.mp4'); ?>" type="video/mp4">
                Tu navegador no soporta el elemento <code>video</code>.
            </video>
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->
    <nav id="navigation" >
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <input id="puto" type="text" value="<?php echo base_url() ?>" hidden>
                    <!-- NAV -->
                   

                    <ul class="main-nav nav navbar-nav col-md-6">
                        <li id="liLogin"><a href="<?php echo base_url() ?>Login"><i
                                    class="fa fa-right-to-bracket bx-sm"></i>Iniciar sesion o crear cuenta</a></li>
                        <li id="liUser" style="display: none;">
                            <a href="#" id="userLink">Usuario</a>
                            <ul id="logoutButton" style="display: none;">
                                <li><a href="#" id="btn-cerrar-sesion">Cerrar Sesión</a></li>
                            </ul>

                        </li>
                        <li><a href="<?php echo base_url() ?>Cliente/Provedores"><i
                        class="fa fa-dollar-sign bx-sm"></i>Vender</a></li></a></li>
                    </ul>
                    <ul class="main-nav nav navbar-nav col-md-6 navarlogin" >
               
                        <li><a href="<?php echo base_url() ?>Welcome"><i class="fa-solid fa-circle-info bx-sm"></i>Ayuda</a></li>
                       
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
    <!-- NAVIGATION -->

    <!-- /NAVIGATION -->

    <section id="s">


        <!-- SECTION -->
        <div class="section">
            <!-- container -->
             
            <div class="container">
                <!-- row -->
              
                <div class="row">
                    <div class="col-md-12">

                        <div class="section-title">
                            <h3 class="title">Animales </h3>
                            <!--
                                <div class="section-nav">
                                    <ul class="section-tab-nav tab-nav">
                                        <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                                        <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                                        <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                                        <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                                    </ul>
                                </div>-->
                        </div>
                    </div>
                    <!-- shop -->
                    <div class="col-md-4 col-xs-6" id="viewDivReses">
                        <div class="shop">
                            <div class="shop-img">
                                <img src=" <?php echo base_url('template/recursos/img/bovinosImg.jpeg'); ?>" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Reses</h3>
                                <a href="<?php echo base_url() ?>Cliente/Animales/Reses" class="cta-btn">Ver ahora <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->

                    <!-- shop -->
                    <div class="col-md-4 col-xs-6" id="viewDivChivos">
                        <div class="shop">
                            <div class="shop-img">
                                <img src=" <?php echo base_url('template/recursos/img/caprinosImg.jpg'); ?>" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Chivos</h3>
                                <a href="<?php echo base_url() ?>Cliente/Animales/CHivos" class="cta-btn">Ver ahora <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6" id="viewDivAves">
                        <div class="shop">
                            <div class="shop-img">
                                <img src=" <?php echo base_url('template/recursos/img/aves.jpg'); ?>" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Aves</h3>
                                <a href="<?php echo base_url() ?>Cliente/Animales/Aves" class="cta-btn">Ver ahora <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6" id="viewDivCerdos">
                        <div class="shop">
                            <div class="shop-img">
                                <img src=" <?php echo base_url('template/recursos/img/porcino.jpg'); ?>" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Cerdos</h3>
                                <a href="<?php echo base_url() ?>Cliente/Animales/Cerdos" class="cta-btn">Ver ahora <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->


                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">

                    <!-- section title -->
                    <div class="col-md-12">

                        <div class="section-title">
                            <h3 class="title">Animales Recientes</h3>
                            <!--
                                <div class="section-nav">
                                    <ul class="section-tab-nav tab-nav">
                                        <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                                        <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                                        <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                                        <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                                    </ul>
                                </div>-->
                        </div>
                    </div>
                    <!-- /section title -->

                    <!-- Products tab & slick -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <!-- tab -->
                                <div id="tab1" class="tab-pane active">
                                    <div class="products-slick" data-nav="#slick-nav-1">
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src=" <?php echo base_url('template/recursos/img/product01.png'); ?>"
                                                    alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del
                                                        class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                            class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                            class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                            class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src=" <?php echo base_url('template/recursos/img/product02.png'); ?>"
                                                    alt="">
                                                <div class="product-label">
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del
                                                        class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                            class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                            class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                            class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src=" <?php echo base_url('template/recursos/img/product03.png'); ?>"
                                                    alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del
                                                        class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                            class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                            class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                            class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src=" <?php echo base_url('template/recursos/img/product04.png'); ?>"
                                                    alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del
                                                        class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                            class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                            class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                            class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->

                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src=" <?php echo base_url('template/recursos/img/product05.png'); ?>"
                                                    alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del
                                                        class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                            class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                            class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span
                                                            class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add
                                                    to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    </div>
                                    <div id="slick-nav-1" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
    </section>



    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">

    </div>
    <!-- /container -->

    <!-- /HOT DEAL SECTION -->



    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
           
            <div class="row">

           
                
                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-3" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-3">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product07.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product08.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>

                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product09.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product01.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product02.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product03.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-4" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-4">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product04.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product05.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product06.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product07.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product08.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product09.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
                    </div>
                </div>

                <div class="clearfix visible-sm visible-xs"></div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-5" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-5">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product01.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product02.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product03.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product04.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product05.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src=" <?php echo base_url('template/recursos/img/product06.png'); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                </div>
                            </div>
                            <!-- product widget -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- NEWSLETTER -->

    <!-- /NEWSLETTER -->


</div>