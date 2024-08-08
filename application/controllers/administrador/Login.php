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
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
            
            array( "template/modulos/user/general.js",
            "template/modulos/user/Login/Login.js",
            "template/modulos/user/Login/LoginMain.js"
            )
        );
		$this->load->view('generales/head', $datos);
		$this->load->view('administracion');
		$this->load->view('generales/footer');
    }

   
}
