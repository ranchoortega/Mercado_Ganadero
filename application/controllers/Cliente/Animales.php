<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Animales extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		
	}

	public function Reses()
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
				"template/modulos/user/cliente/Animales/Animales.js",
				"template/modulos/user/cliente/Animales/reses.js",
				"template/assets/js2/jquery.min.js",
				"template/assets/js2/bootstrap.min.js",
				"template/assets/js2/slick.min.js",
				"template/assets/js2/nouislider.min.js",
				"template/assets/js2/jquery.zoom.min.js",
				"template/assets/js2/main.js",
				
			
				
			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/animales');
		$this->load->view('partials/footerAnimal');
	}
	public function Chivos()
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
				"template/modulos/user/cliente/Animales/Animales.js",
				"template/modulos/user/cliente/Animales/chivos.js",
				"template/assets/js2/jquery.min.js",
				"template/assets/js2/bootstrap.min.js",
				"template/assets/js2/slick.min.js",
				"template/assets/js2/nouislider.min.js",
				"template/assets/js2/jquery.zoom.min.js",
				"template/assets/js2/main.js",
				
			
				
			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/animales');
		$this->load->view('partials/footerAnimal');
	}
	public function Cerdos()
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
				"template/modulos/user/cliente/Animales/Animales.js",
				"template/modulos/user/cliente/Animales/cerdos.js",
				"template/assets/js2/jquery.min.js",
				"template/assets/js2/bootstrap.min.js",
				"template/assets/js2/slick.min.js",
				"template/assets/js2/nouislider.min.js",
				"template/assets/js2/jquery.zoom.min.js",
				"template/assets/js2/main.js",
				
			
				
			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/animales');
		$this->load->view('partials/footerAnimal');
	}
	public function Aves()
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
				"template/modulos/user/cliente/Animales/Animales.js",
				"template/modulos/user/cliente/Animales/aves.js",
				"template/assets/js2/jquery.min.js",
				"template/assets/js2/bootstrap.min.js",
				"template/assets/js2/slick.min.js",
				"template/assets/js2/nouislider.min.js",
				"template/assets/js2/jquery.zoom.min.js",
				"template/assets/js2/main.js",
				
			
				
			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/animales');
		$this->load->view('partials/footerAnimal');
	}


   
}
