<!-- Page Header Start-->
 
<div hidden>
    <div class="main-header-right row m-0" style="border-bottom: 0.4px #EBEBEB solid;">
        
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
        
    </div>
</div>
<div >
    <div >
        <div class="main-header-left mb-12" style="
    display: flex;
    justify-content: space-between;
" >
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center"
                    id="sidebar-toggle"></i></div>

                    <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>
                <li class="onhover-dropdown p-0">
                    <button class="btn btn-primary-light" type="button" id="btn-cerrar-sesion">Cerrar
                        sesión</a></button>
                </li>
            </ul>
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
            <?php if ($this->session->userdata('rol') == "") { ?>
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
                                        
                                                <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Funcionario/Tesoreria/Ingresos"><i
                                                            data-feather="dollar-sign"></i><span>Ocultar y Mostrar</span></a></li>
                                                <li><a class="nav-link menu-title link-nav" href="<?php echo base_url() ?>Funcionario/Tesoreria/Egresos"><i
                                                            data-feather="trending-down"></i><span>Informacion General</span></a></li>
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
                            
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            <?php } else { ?>
                
            <?php } ?>
        </nav>
    </header>

    <!-- Page Sidebar Ends-->