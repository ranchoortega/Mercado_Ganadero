<!-- Page Header Start-->
<div class="page-main-header">
    <div class="main-header-right row m-0" style="border-bottom: 0.4px #EBEBEB solid;">
        <div class="nav-left col pull-left left-menu p-0" >
            <ul class="nav-menus">
                <li class="onhover-dropdown m-3 p-0">
                    <div class="text-lg font-weight-bold text-success text-uppercase mb-1">
                        <h6>Plataforma obras publicas</h6>     
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <input type="hidden" class="jwt" value="<?= $this->session->userdata('token') ?>">
                <input type="hidden" class="user" value="<?= $this->session->userdata('usuario') ?>">
                <input type="hidden" class="idadministracion" value="<?= $this->session->userdata('administracion') ?>">
                <input type="hidden" class="idunidadresponsable" value="<?= $this->session->userdata('unidadResponsable') ?>">
                <input type="hidden" class="idusuarioobras" value="<?= $this->session->userdata('obras') ?>" >
                <li><a class="text-dark" href="#" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button" id="btn-cerrar-sesion"><a href="<?php echo base_url()?>Login/destruir">Cerrar sesión</a></button>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
</div>
<div class="page-main-header">
    <div class="main-header-right row m-0">
        <div class="main-header-left">
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                    id="sidebar-toggle"></i></div>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button" id="btn-cerrar-sesion">Cerrar
                        sesión</a></button>
                </li>
            </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
    </div>
    <div style="margin-top: 12rem; margin-left: 76%; position:absolute;">
        <div class="alert alert-warning alert-dismissible fade hidden" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

</div>
<!-- Page Header Ends-->
<!-- Page Body Start-->
<div class="page-body-wrapper sidebar-icon">
    <!-- Page Sidebar Start-->
    <header class="main-nav">
        <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i
                    data-feather="settings"></i></a><img class="img-90 rounded-circle"
                src="<?php echo base_url() ?>template/assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary"></span></div>
            <a href="<?php echo base_url() ?>">
                <h6 class="mt-3 f-14 f-w-600">BIENVENIDO/DOÑA INES <br>
                    <?= mb_strtoupper($this->session->userdata('nombreUsuario')) ?>
                </h6>
            </a>
            <!-- <p class="mb-0 font-roboto">Cabildo</p> -->
        </div>
        <nav>
            <?php if ($this->session->userdata('rol') == "admin") { ?>
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                        aria-hidden="true"></i></div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>General</h6>
                                </div>
                            </li>
                            <?php if (mb_strtoupper($this->session->userdata('nombreUsuario')) == 'ADMINISTRADOR CONSULTORIA G&G') { ?>
                                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                            data-feather="folder"></i><span>DRIVE</span></a>
                                    <ul class="nav-submenu menu-content">
                                        <li><a href="<?php echo base_url() ?>Documentacion/documentacion/tiposdocumentos"><i
                                                    data-feather="list"></i><span>Tipos de documentos</span></a></li>
                                        <li><a href="<?php echo base_url() ?>Administradordocumentacion/Documentacion"><i
                                                    data-feather="file-text"></i><span>Documentación de la
                                                    consultoria</span></a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>UNIDADES RESPONSABLES</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>UnidadesController/municipio"><i
                                                data-feather="file-text"></i><span>Usuarios</span></a></li>
                                </ul>
                            </li>
                            <!--nuevo entrega a recepción-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>PLANEACIÓN DE LAS ACTIVIDADES</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Ejes
                                                Estratégicos/Rectores</span></a></li>
                                    <li><a href="<?php echo base_url() ?>Administrador/FichasTecnicas/Programas"><i
                                                data-feather="list"></i><span>Carga de Programa Presupuestario
                                                (Pp)</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Carga del
                                                Presupuesto Asignado al PP</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Carga de
                                                información Reporte de Actividades</span></a></li>
                                </ul>
                            </li>
                            <!--fin entrega recepción-->
                            <!--otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>SEGUIMIENTO / DESEMPEÑO</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>Administrador/Reportes/Mensual/Actividades"><i
                                                data-feather="list"></i><span>Reporte de Actividades</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Seguimiento de
                                                metas/indicadores</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Seguimiento del
                                                ejercicio del gasto del Pp</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <!--otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>EVALUACIÓN</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Evaluación del
                                                Programa Presupuestario</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Evaluación del
                                                PDM</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <!--otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>INFORME DE RESULTADOS</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>Administrador/Reportes/Trimestral/Documento"><i
                                                data-feather="list"></i><span>Generación de reporte trimestral</span></a>
                                    </li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Generación de
                                                cédula de observaciones</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Informe de
                                                Resultados de Evaluación del Pp</span></a></li>

                                </ul>
                            </li>
                            <!--fin otro-->
                            <!--otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>NORMATIVIDAD MUNICIPAL</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Manual de
                                                procedimientos</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Código de
                                                ética</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Código de
                                                conducta</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Reglamento
                                                interno del Gobierno Municipal</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Reglamentos
                                                interiores de las UA</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Reglamentos
                                                operativos/reguladores</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i
                                                data-feather="list"></i><span>Acuerdos</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i
                                                data-feather="list"></i><span>Lineamientos</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <!--otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>OTROS DOCUMENTOS</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>"><i
                                                data-feather="list"></i><span>Memorándum</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i
                                                data-feather="list"></i><span>Oficio</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <!--otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>INAFED</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>Administrador/INAFED/Nuevo"><i
                                                data-feather="list"></i><span>Crear INAFED</span></a></li>
                                    <li><a href="<?php echo base_url() ?>Administrador/INAFED/Nuevo/municipio"><i
                                                data-feather="list"></i><span>Asignar INAFED</span></a></li>
                                    <li><a href="<?php echo base_url() ?>"><i data-feather="list"></i><span>Ver
                                                resultados</span></a></li>

                                </ul>
                            </li>

                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>INFORMACIÓN</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a
                                            href="<?php echo base_url() ?>Administrador/Informacion/Obras/Analitico/municipio"><i
                                                data-feather="list"></i><span>Obra Pública</span></a></li>
                                    <li><a
                                            href="<?php echo base_url() ?>Administrador/Informacion/Secretaria/Actas/municipio"><i
                                                data-feather="list"></i><span>Secretaría General</span></a></li>
                                    <li><a
                                            href="<?php echo base_url() ?>Administrador/Informacion/Tesoreria/Ingresos/municipio"><i
                                                data-feather="list"></i><span>Tesoreria</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>CUESTIONARIOS</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>Administrador/Cuestionarios/Cuestionario"><i
                                                data-feather="list"></i><span>Cuestionarios</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <!--fin otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>TRAMITES Y SERVICIOS</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>Tramites/Constancias/crearconstancias"><i
                                                data-feather="list"></i><span>Crear constancias</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <!--fin otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>INVENTARIO</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>Inventario/Informacion/municipios"><i
                                                data-feather="list"></i><span>Inventarios</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <!--fin otro-->
                            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                        data-feather="folder"></i><span>DOCUMENTACIÓN</span></a>
                                <ul class="nav-submenu menu-content">
                                    <li><a href="<?php echo base_url() ?>Documentacion/documentacion/formulariodocumentos"><i
                                                data-feather="list"></i><span>Subir documentos</span></a></li>
                                </ul>
                            </li>
                            <!--fin otro-->
                            <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Internos"><i
                                        data-feather="users"></i><span>USUARIOS INTERNOS</span></a></li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            <?php } else { ?>
                <div class="main-navbar">
                    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                    <div id="mainnav">
                        <ul class="nav-menu custom-scrollbar">
                            <li class="back-btn">
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                        aria-hidden="true"></i></div>
                            </li>
                            <li class="sidebar-main-title">
                                <div>
                                    <h6>MENU</h6>
                                </div>
                            </li>
                            <?php if ($this->session->userdata('obras') == 5) { ?>
                                <li><a class="nav-link menu-title link-nav"
                                        href="<?php echo base_url() ?>InicioController/actas"><i
                                            data-feather="list"></i><span>ACTAS CABILDO</span></a></li>
                                <!--fin otro-->
                                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i
                                            data-feather="folder"></i><span>TRAMITES</span></a>
                                    <ul class="nav-submenu menu-content">
                                        <li><a href="<?php echo base_url() ?>Tramites/Constancias/tramitesservicios"><i
                                                    data-feather="list"></i><span>Tramites y servicios</span></a></li>
                                        <li><a href="<?php echo base_url() ?>Tramites/Constancias/tramitesproceso"><i
                                                    data-feather="list"></i><span>Tramites en proceso</span></a></li>
                                        <li><a href="<?php echo base_url() ?>Tramites/Constancias/tramitesterminados"><i
                                                    data-feather="list"></i><span>Tramites terminados</span></a></li>
                                    </ul>
                                </li>
                                <!--fin otro-->
                            <?php } else if ($this->session->userdata('obras') == 4) { ?>
                                    <li><a class="nav-link menu-title link-nav"
                                            href="<?php echo base_url() ?>Funcionario/Obras/Analitico"><i
                                                data-feather="list"></i><span>ANALITICO OBRAS</span></a></li>
                            <?php } else if ($this->session->userdata('obras') == "") { ?>
                                        
                                                <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Funcionario/Tesoreria/Ingresos"><i
                                                            data-feather="dollar-sign"></i><span>INGRESOS</span></a></li>
                                                <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Funcionario/Tesoreria/Egresos"><i
                                                            data-feather="trending-down"></i><span>EGRESOS</span></a></li>
                                                <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Funcionario/Tesoreria/Egresos/polizassiregistro"><i
                                                            data-feather="trending-down"></i><span>EGRESOS SIN REGISTRO</span></a></li>
                                                <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Funcionario/Tesoreria/Presupuesto/Egresos/ver/<?= $this->session->userdata('municipio') ?>"><i
                                                            data-feather="list"></i><span>PRESUPUESTO EGRESOS</span></a></li>
                                       
                                        <!-- <li><a class="nav-link menu-title link-nav"
                                                href="<?php echo base_url() ?>Funcionario/Tesoreria/Ingresos"><i
                                                    data-feather="dollar-sign"></i><span>INGRESOS</span></a></li>
                                        <li><a class="nav-link menu-title link-nav"
                                                href="<?php echo base_url() ?>Funcionario/Tesoreria/Egresos"><i
                                                    data-feather="trending-down"></i><span>EGRESOS</span></a></li> -->
                            <?php } else if ($this->session->userdata('obras') == 9) { ?>
                                            <li><a class="nav-link menu-title link-nav"
                                                    href="<?php echo base_url() ?>Inventario/Informacion/inventarios/<?= $this->session->userdata('municipio') ?>"><i
                                                        data-feather="list"></i><span>INVENTARIOS DEL MUNICIPIO</span></a></li>
                                            <li><a class="nav-link menu-title link-nav"
                                                    href="<?php echo base_url() ?>Expediente/Informacion/usuarios/<?= $this->session->userdata('municipio') ?>"><i
                                                        data-feather="list"></i><span>EXPEDIENTES DE USUARIOS</span></a></li>
                            <?php } ?> 
                            <?php
                            if ($this->session->userdata('usuario') == 572) { ?>
                                <li><a class="nav-link menu-title link-nav"
                                        href="<?php echo base_url() ?>Funcionario/Reportes/Sosapama/inicio"><i
                                            data-feather="list"></i><span>REPORTES</span></a></li>
                            <?php } ?>   
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            <?php } ?>
        </nav>
    </header>

    <!-- Page Sidebar Ends-->