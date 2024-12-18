<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proveedores extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		if (!$this->session->userdata('usuario')) {
			header('Location: ' . base_url());
		}
	}

	public function index()
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/Administrador/Proveedores/Proveedores.js",
				"template/modulos/user/Administrador/Proveedores/proveedoresMain.js"
			
			)
		);
		$datos['municipio'] = $this->session->userdata('municipio');
		$this->load->view('administradorView/header', $datos);
		$this->load->view('administradorView/navbar');
		$this->load->view('administracionGranja/proveedores');
		$this->load->view('administradorView/footer');
	}

	

	

}