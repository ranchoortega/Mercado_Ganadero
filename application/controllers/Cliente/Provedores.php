<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Provedores extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$titulo = "Vender Ganado: Bovinos, Caprinos y Porcinos"; // Aquí pones el título que desees

        // Crear el array de datos
        $datos = array();
        $datos['titulo'] = $titulo; // Incluir el título en los datos
	
		$datos['estiloscss'] = plantilla_head(
			array(
			
			)
		);
		$datos['estilosjs'] = plantilla_footer(
			array(
				
				"template/assets/js2/main.js",
				"template/modulos/user/cliente/Proveedores/Proveedores.js",
				"template/modulos/user/cliente/Proveedores/proveedoresMain.js",
				

			)
		);


		$this->load->view('partials/header', $datos);
		$this->load->view('cliente/vender');
		$this->load->view('partials/footer');
	}



}
