<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->userdata('usuario')) {
            header('Location: ' . base_url() . 'BienvenidoAdmin');
        }
    }

    public function index()
    {
        $datos = array();
		$datos['estiloscss'] = plantilla_head(
			array(
				"template/assets/cssInicio/bootstrap.min.css",
			
				"template/assets/cssInicio/style.css",
			)
		);
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/assets/js2/jquery.min.js",
				"template/assets/js2/bootstrap.min.js",
	
				"template/modulos/user/Login/Login.js",
				"template/modulos/user/Login/LoginMain.js",
				"template/modulos/user/cliente/Proveedores/Proveedores.js",
				"template/modulos/user/cliente/Proveedores/proveedoresMain.js",
				

			)
		);
		$this->load->view('generales/head', $datos);
		$this->load->view('administracion');
		$this->load->view('partials/footer');
    }

   
}
