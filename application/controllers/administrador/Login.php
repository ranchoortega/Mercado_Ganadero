<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('usuario')) {
			header('Location: ' . base_url() . 'welcome');
		}
	}

	public function index()
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head(
			array(


				"template/assets/css/select2.css",
	
			

			)
		);
		$datos['estilosjs'] = plantilla_footer(
			array(
				

				"template/modulos/user/Login/Login.js",
				"template/modulos/user/Login/LoginMain.js",
		
				"template/assets/js2/main.js",
				"template/assets/js/select2/select2.full.min.js",
				"template/assets/js/select2/select2-custom.js",




			)
		);
		$this->load->view('partials/header', $datos);
		$this->load->view('login');
		$this->load->view('partials/footer');

	}


}
