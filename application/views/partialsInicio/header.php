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



    <?php foreach ($estiloscss as $estilo): ?>
        <link rel="stylesheet" href="<?php echo base_url() . $estilo; ?>">
    <?php endforeach ?>
    <style>
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

    <link rel="icon" href="<?php echo base_url('template/recursos/img/logo.png'); ?>" type="image/x-icon">

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
                <ul class="header-links pull-left">
                    <li>
                        <a href="#" class="logo">
                            <img src="<?php echo base_url('template/recursos/img/logo.png'); ?>" alt=""
                                style="width: 75px;" class="white-filter">
                        </a>
                    </li>
                    <li><a href="mailto:ranchoortega77@gmail.com?Subject=Mas%20informacion"><i class="fa fa-right-to-bracket bx-sm"></i>Sesion</a></li>
                    <li><a href="https://web.whatsapp.com/send?phone=2214350830&text=sd"><i class="fa fa-dollar-sign bx-sm"></i>Vender</a></li>
                    
                    <li>
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars bx-sm"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                    </li>
                </ul>
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
        