<style>
     .breadcrumb-item {
        flex: 1;
        /* Todos los elementos se repartirán de manera uniforme */
            text-align: center;
            padding: 10px;
            white-space: nowrap;
            /* Evita que el texto se corte en varias líneas */
        }

        .breadcrumb-item a {
            text-decoration: none;
            color: inherit;
        }

        .breadcrumb-item::before {
            content: none !important;
            /* Asegura que se aplique este estilo sobre cualquier otro */
            padding-right: 0 !important;
        }


        /* Opcionalmente, puedes ajustar la fuente o el espaciado en pantallas más pequeñas */
        @media (max-width: 576px) {
            .breadcrumb-item {
                padding: 5px;
                /* Reduce el espaciado en pantallas muy pequeñas */
            }
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        .container h1 {
            padding-top: 50px;
            color: #333;
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
        }

        .container ol {
            text-align: justify;
        }

        .container ol h2 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .container ol li {
            margin-bottom: 20px;
        }

    </style>

<section class="page-body">

    <div id="breadcrumb" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between flex-nowrap">
                        <div class="breadcrumb-item">
                            <a href="<?php echo base_url() ?>Welcome"><i class="icofont-home icofont-2x"></i></a>
                        </div>
                        <div class="breadcrumb-item" id="iconReses">
                            <a href="<?php echo base_url() ?>Cliente/Animales/Reses"><i
                                    class="icofont-cow icofont-2x"></i></a>
                        </div>
                        <div class="breadcrumb-item" id="iconChivos">
                            <a href="<?php echo base_url() ?>Cliente/Animales/Chivos"><i
                                    class="icofont-giraffe-head-1 icofont-2x"></i></a>
                        </div>
                        <div class="breadcrumb-item" id="iconCerdos">
                            <a href="<?php echo base_url() ?>Cliente/Animales/Cerdos"><i
                                    class="icofont-pig-face icofont-2x"></i></a>
                        </div>
                        <div class="breadcrumb-item" id="iconAves">
                            <a href="<?php echo base_url() ?>Cliente/Animales/Aves"><i
                                    class="icofont-rooster icofont-2x"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>

    
        <div class="container">
            <div class="row">
                <h1>Términos de Uso</h1>
                <ol>
                    <li>
                        <h2>Aceptación de los Términos</h2>
                        Al utilizar la aplicación web y móvil ("Aplicación"), aceptas cumplir con estos términos de uso y todas las leyes y regulaciones aplicables. Si no estás de acuerdo con alguno de estos términos, no podrás utilizar nuestra plataforma.
                    </li>
                    <li>
                        <h2>Descripción del Servicio</h2>
                        Nuestra Aplicación proporciona un catálogo en línea donde los ganaderos pueden publicar y gestionar información sobre su ganado para la compra, venta o exhibición. El acceso a la Aplicación puede estar sujeto a la creación de una cuenta y la aceptación de estos términos.
                    </li>
                    <li>
                        <h2>Registro y Cuentas de Usuario</h2>
                        Para acceder a las funciones de la Aplicación, deberás crear una cuenta proporcionando información veraz y completa. Eres responsable de mantener la confidencialidad de tus credenciales y de todas las actividades que ocurran bajo tu cuenta.
                    </li>
                    <li>
                        <h2>Responsabilidad del Usuario</h2>
                        Los usuarios son responsables del contenido que suban, incluyendo imágenes, descripciones y cualquier otra información relacionada con su ganado.
                        Está prohibido subir contenido que sea falso, engañoso, ofensivo, ilegal o que infrinja derechos de terceros.
                        No se permite el uso de la plataforma para actividades fraudulentas o ilegales.
                    </li>
                    <li>
                        <h2>Propiedad Intelectual</h2>
                        Todos los derechos de propiedad intelectual relacionados con la Aplicación (incluyendo software, diseño, logotipos y contenido no proporcionado por los usuarios) son propiedad exclusiva de [Nombre de la Empresa]. No está permitido copiar, modificar, distribuir ni hacer un uso indebido de los mismos sin permiso expreso.
                    </li>
                    <li>
                        <h2>Limitación de Responsabilidad</h2>
                        La Aplicación se proporciona "tal cual" sin garantías de ningún tipo, expresas o implícitas. No garantizamos la precisión, fiabilidad o disponibilidad del servicio. En ningún caso [Nombre de la Empresa] será responsable por daños directos, indirectos, incidentales o consecuentes derivados del uso o la imposibilidad de uso de la Aplicación.
                    </li>
                    <li>
                        <h2>Modificación de los Términos</h2>
                        Nos reservamos el derecho de modificar estos términos en cualquier momento. Las modificaciones entrarán en vigor a partir de su publicación en la Aplicación. Al continuar utilizando el servicio después de las modificaciones, aceptas los nuevos términos.
                    </li>
                    <li>
                        <h2>Terminación del Servicio</h2>
                        Podemos suspender o cancelar tu cuenta y el acceso a la Aplicación en cualquier momento, sin previo aviso, si se sospecha que has violado estos términos o por cualquier otra razón que consideremos apropiada.
                    </li>
                </ol>
            </div>
        </div>
</section>

