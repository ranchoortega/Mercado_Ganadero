<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Views extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		
		
	}

	public function index()
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/tesoreria/egresos/egresos.js",
				"template/modulos/user/tesoreria/egresos/egresosMain.js"
			)
		);
		$datos['municipio'] = $this->session->userdata('municipio');
		$this->load->view('administradorView/header', $datos);
		$this->load->view('administradorView/navbar');
		$this->load->view('administracionGranja/informacion');
		$this->load->view('administradorView/footer');
	}

	

	

}