<!DOCTYPE html>
<html class="loading" lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="G&G">
    <meta name="keywords" content="">
    <meta name="author" content="G&G">
    <title>
        <?php if (isset($titulo)): ?>
            <?php echo $titulo ?>
        <?php else: ?>
            GRANJA ORTEGA
        <?php endif ?>
    </title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <?php foreach ($estiloscss as $estilo): ?>
        <link rel="stylesheet" href="<?php echo base_url() . $estilo; ?>">
    <?php endforeach ?>

    <style>
        .category-menu {
            position: relative;
            display: inline-block;
        }

        .category-button {
        
    
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .category-button:focus {
            outline: 2px solid black;
            /* Contorno negro al hacer clic */
        }

        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            background-color: black;
            /* Color de fondo negro */
            color: white;
            border: 1px solid #ddd;
            width: 200px;
            top: 40px;
            left: 0;
            z-index: 1000;
        }

        .category-list li {
            padding: 10px;
        }

        .category-list li:hover {
            background-color: #333;
            cursor: pointer;
        }

        .category-list[hidden] {
            display: none;
        }

        #WindowLoad {
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 3200;
            filter: alpha(opacity=65);
            -moz-opacity: 65;
            opacity: 0.65;
            background: #999;
        }

        #loader-overlay {
            display: none;
            position: fixed;

            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        #loader {
            border: 8px solid #f3f3f3;
            border-top: 8px solid #2b786a;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: spin 2s linear infinite;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #2b786a;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <link rel="icon" href="<?php echo base_url('template/recursos/logos/logo.svg'); ?>" type="image/x-icon">


</head>

<body>

    <div class="loader-wrapper" id="spinnergeneral">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <div id="loader-overlay">
        <div id="loader"></div>
    </div>

    <!-- Loader ends-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div id="top-header">
            <div class="container">
                <div class="col-md-12">
                    <ul class="header-links pull-left col-md-6">
                        <li>
                            <a href="#" class="logo">
                                <img src="<?php echo base_url('template/recursos/img/logo.png'); ?>" alt=""
                                    style="width: 75px;" class="white-filter">
                            </a>
                        </li>



                    </ul>
                    <ul class="header-links col-md-6"
                        style="    display: flex;  height: 75px; align-items: center; justify-content: flex-end">



                        <li><a href="https://web.whatsapp.com/send?phone=2214350830&text=sd"><i
                                    class="fa fa-dollar-sign bx-sm"></i>Vender</a></li>
                        <li>
                            <div class="menu-toggle">
                                <a id="menuIcon" href="#">
                                    <i class="fa fa-bars bx-sm"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <input type="text" id="whapsapweb" hidden>
                <input type="text" id="whapPhone2" hidden>

                <script>
                    function detectDeviceType() {
                        const userAgent = navigator.userAgent || navigator.vendor || window.opera;

                        // Detectar si el dispositivo es móvil
                        const isMobile = /android|iPad|iPhone|iPod/.test(userAgent) && !window.MSStream;

                        // Actualizar el enlace de WhatsApp en función del dispositivo
                        const whatsappLink = isMobile
                            ? 'https://wa.me/+522431083861?text=sd'
                            : 'https://web.whatsapp.com/send?phone=+522431083861&text=sd';

                        const whatsappLink2 = isMobile
                            ? ''
                            : 'https://web.whatsapp.com/';
                        const whatsappLink3 = isMobile
                            ? 'https://wa.me/'
                            : '';


                        // Actualizar el href del enlace
                        document.getElementById('whapPhone').href = whatsappLink;
                        document.getElementById('whapsapweb').value = whatsappLink2;
                        document.getElementById('whapPhone2').value = whatsappLink3;
                    }

                    // Llamar a la función para actualizar el enlace
                    detectDeviceType();
                </script>
            </div>
        </div>
        <div hidden>
            <div class="main-header-right row m-0" style="border-bottom: 0.4px #EBEBEB solid;">

                <div class="nav-right col pull-right right-menu p-0">
                    <ul class="nav-menus">
                        <input type="hidden" class="jwt" value="<?= $this->session->userdata('token') ?>">
                        <input type="hidden" class="user" value="<?= $this->session->userdata('usuario') ?>">
                    </ul>
                </div>

            </div>
        </div>
        <nav id="navigation">
            <!-- container -->
            <div class="container viewCliente">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <input id="puto" type="text" value="<?php echo base_url() ?>" hidden>
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav col-md-6">
                        <li><a href="<?php echo base_url() ?>Welcome"><i class="fa-solid fa-circle-info bx-sm"></i>Ayuda</a></li>
                       
                    </ul>

                    <ul class="main-nav nav navbar-nav col-md-6 navarlogin">
                        <li id="liLogin"><a href="<?php echo base_url() ?>Login"><i
                                    class="fa fa-right-to-bracket bx-sm"></i>Iniciar sesion o crear cuenta</a></li>
                        <li id="liUser" style="display: none;">
                            <a href="#" id="userLink">Usuario</a>
                            <ul id="logoutButton" style="display: none;">
                                <li><a href="#" id="btn-cerrar-sesion">Cerrar Sesión</a></li>
                            </ul>

                        </li>
                    </ul>
                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->
            </div>
            <!-- /container -->
        </nav>
        <script>
              document.querySelector('.category-button').addEventListener('click', function() {
      const list = document.querySelector('.category-list');
      list.hidden = !list.hidden; // Alterna la visibilidad de la lista
    });

            document.addEventListener('DOMContentLoaded', function () {
                var userInput = document.querySelector('.user');
                var liLogin = document.getElementById('liLogin');
                var liUser = document.getElementById('liUser');

                // Función para actualizar la visibilidad de los elementos
                function updateVisibility() {
                    if (userInput.value.trim() !== "") {
                        liLogin.style.display = 'none';
                        liUser.style.display = 'block';
                    } else {
                        liUser.style.display = 'none';
                        liLogin.style.display = 'block';
                    }
                }

                // Inicializa el estado al cargar la página
                updateVisibility();

                // Actualiza el estado cuando el valor del input cambie
                userInput.addEventListener('input', updateVisibility);
            });

            var userLink = document.getElementById('userLink');
            var logoutButton = document.getElementById('logoutButton');

            userLink.addEventListener('click', function (event) {
                event.preventDefault(); // Previene el comportamiento predeterminado del enlace
                if (logoutButton.style.display === 'none') {
                    logoutButton.style.display = 'block';
                } else {
                    logoutButton.style.display = 'none';
                }
            });

          

        </script>