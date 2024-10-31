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


		$titulo = "Venta de Ganado Bovino / Reses"; // Aquí pones el título que desees

		// Crear el array de datos
		$datos = array();
		$datos['titulo'] = $titulo; // Incluir el título en los datos
		$datos['estiloscss'] = plantilla_head(
			array(
				"template/assets/css/select2.css",

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

				"template/assets/js2/slick.min.js",
				"template/assets/js2/nouislider.min.js",
				"template/assets/js2/jquery.zoom.min.js",
				"template/assets/js2/main.js",
				"template/assets/js/select2/select2.full.min.js",
				"template/assets/js/select2/select2-custom.js",



			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/animales');
		$this->load->view('partials/footer');
	}
	public function Chivos()
	{
		$titulo = "Venta de Ganado Caprino / Chivos, Cabras"; // Aquí pones el título que desees

		// Crear el array de datos
		$datos = array();
		$datos['titulo'] = $titulo; // Incluir el título en los datos

		$datos['estiloscss'] = plantilla_head(
			array(
				"template/assets/css/select2.css",

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

				"template/assets/js2/bootstrap.min.js",
				"template/assets/js2/slick.min.js",
				"template/assets/js2/nouislider.min.js",
				"template/assets/js2/jquery.zoom.min.js",
				"template/assets/js2/main.js",
				"template/assets/js/select2/select2.full.min.js",
				"template/assets/js/select2/select2-custom.js",


			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/animales');
		$this->load->view('partials/footer');

	}
	public function Cerdos()
	{
		$titulo = "Venta de Ganado Porcino / Cerdos"; // Aquí pones el título que desees

		// Crear el array de datos
		$datos = array();
		$datos['titulo'] = $titulo; // Incluir el título en los datos
		$datos['estiloscss'] = plantilla_head(
			array(
				"template/assets/css/select2.css",

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
				"template/assets/js/select2/select2.full.min.js",
				"template/assets/js/select2/select2-custom.js",


			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/animales');
		$this->load->view('partials/footer');

	}
	public function Aves()
	{

		$titulo = "Venta de Ganado Avicola / Aves"; // Aquí pones el título que desees

		// Crear el array de datos
		$datos = array();
		$datos['titulo'] = $titulo; // Incluir el título en los datos
		$datos['estiloscss'] = plantilla_head(
			array(
				"template/assets/css/select2.css",

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
				"template/assets/js/select2/select2.full.min.js",
				"template/assets/js/select2/select2-custom.js",


			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/animales');
		$this->load->view('partials/footer');

	}



}
