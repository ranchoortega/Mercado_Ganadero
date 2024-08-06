<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
	
		$datos = array();
		$datos['estiloscss'] = plantilla_head(
			array(
				"template/assets/cssInicio/bootstrap.min.css",
				"template/assets/cssInicio/slick.css",
				"template/assets/cssInicio/slick-theme.css",
				"template/assets/cssInicio/nouislider.min.css",
				"template/assets/cssInicio/font-awesome.min.css",
				"template/assets/cssInicio/style.css",
			)
		);
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/assets/js2/jquery.min.js",
				"template/assets/js2/bootstrap.min.js",
				"template/assets/js2/slick.min.js",
				"template/assets/js2/nouislider.min.js",
				"template/assets/js2/jquery.zoom.min.js",
				"template/assets/js2/main.js",
				

			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('welcome_message');
		$this->load->view('partials/footer');
	}


   
}
