<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ingresos extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$dtz = new DateTimeZone("America/Mexico_City");
		$dt = new DateTime("now", $dtz);
		$datos = array();
		$datos['estiloscss'] = plantilla_head(
			array(
				"template/assets/css/select2.css",
				"template/assets/css/themify.css",
				"template/assets/css/flag-icon.css",
				"template/assets/css/feather-icon.css",
				"template/assets/css/calendar.css",
				"template/assets/css/bootstrap.css",
				"template/assets/css/style.css",
				"template/assets/css/color-1.css",
				"template/assets/css/responsive.css"
			)
		);
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/assets/js/select2/select2.full.min.js",
				"template/assets/js/select2/select2-custom.js",
				"template/assets/js/touchspin/touchspin.js",
				"template/assets/js/touchspin/input-groups.min.js",
				"template/assets/js/script.js",
				"template/assets/js/theme-customizer/customizer.js",
				//"template/modulos/user/tesoreria/ingresos.js",
				
				"template/modulos/user/tesoreria/ingresos/Ingresos.js",
				"template/modulos/user/tesoreria/ingresos/IngresosMain.js",


			)
		);

		$datos['fecha'] = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d");
		$datos['area'] = $this->session->userdata('obras');
		$datos['municipio'] = $this->session->userdata('municipio');

		$this->load->view('partials/header', $datos);
		// $this->load->view('partials/sidebar');
		
		$this->load->view('animales');
		$this->load->view('partials/footer');
	}

	public function getCategorias()
	{
		$tipo = "ingresos";
		$categorias = [];
		$categorias =  $this->IngresosModel->getCategorias($tipo);
		echo json_encode($categorias);
	}

	public function getSubCategorias()
	{
		if ($this->input->post()) {
			$id = trim($this->input->post("idCategoria"));
			$subCategorias = [];
			$subCategorias =  $this->IngresosModel->getSubCategorias($id);
			echo json_encode($subCategorias);
		}
	}

	public function getIngresos()
	{
		if ($this->input->post()) {
			$draw = $this->input->post('draw');
			$inicio = $this->input->post('start');
			$filas = $this->input->post('length');

			$id = $this->input->post('id');
			$idMunicipio = $this->input->post('idMunicipio');

			$total = $this->IngresosModel->getIngresos(false, $inicio, $filas, $id, $idMunicipio);
			$datos = $this->IngresosModel->getIngresos(true, $inicio, $filas, $id, $idMunicipio);

			$resultado = array(
				"draw" => $draw,
				"recordsTotal" => $total,
				"recordsFiltered" => $total,
				"data" => $datos
			);

			echo json_encode($resultado);
		}
	}

	public function getIngreso()
	{
		if ($this->input->post()) {
			$id = trim($this->input->post("idIngreso"));
			$ingreso = [];
			$ingreso =  $this->IngresosModel->getIngreso($id);
			echo json_encode($ingreso);
		}
	}

	public function setIngreso()
	{
		if ($this->input->post()) {
			$dtz = new DateTimeZone("America/Mexico_City");
			$dt = new DateTime("now", $dtz);
			$id = trim($this->input->post("idIngreso"));
			$idCategoria = trim($this->input->post("categoria"));
			$idSubcategoria = trim($this->input->post("subCategoria"));
			$idMunicipio = $this->session->userdata('municipio');
			$numeroRecibo = trim($this->input->post("numero_recibo"));
			$concepto = trim($this->input->post("concepto"));
			$fecha = trim($this->input->post("fecha"));
			$monto = trim($this->input->post("monto"));
			$ejercicio = trim($this->input->post("ejercicio"));
			$ruta = trim($this->input->post("ruta"));
			$fecha_registro = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$idIngreso = [];
			if ($id) {
				$idIngreso =  $this->IngresosModel->updateIngresoCompleto($id, $idCategoria, $idSubcategoria, $idMunicipio, $numeroRecibo, $concepto, $fecha, $monto, $ejercicio, $ruta, $fecha_registro);
			} else {
			    $fecha_hora_actual = date("Y-m-d H:i:s"); 
			    $this->IngresosModel->setRegistroUsuario($this->session->userdata('usuario'),$fecha_hora_actual);
				$idIngreso =  $this->IngresosModel->setIngreso($idCategoria, $idSubcategoria, $idMunicipio, $numeroRecibo, $concepto, $fecha, $monto, $ejercicio, $ruta, $fecha_registro);
			}
			echo json_encode($idIngreso);
		}
	}

	public function deleteIngreso()
	{
		if ($this->input->post()) {
			$dtz = new DateTimeZone("America/Mexico_City");
			$dt = new DateTime("now", $dtz);
			$id = trim($this->input->post("idIngreso"));
			$status = trim($this->input->post("status"));
			$fecha_actualizar = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$update = [];
			$update =  $this->IngresosModel->updateIngreso($id, $status, $fecha_actualizar);
			echo json_encode($update);
		}
	}
	public function legajos($idegresos, $tipo)
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/tesoreria/legajo/legajos.js",
				"template/modulos/user/tesoreria/legajo/legajosMain.js"
			)
		);
		$datos['idegresos'] = $idegresos;
		$datos['tipo'] = $tipo;

		$datos['municipio'] = $this->session->userdata('municipio');
		$this->load->view('partials/header', $datos);
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/legajos');
		$this->load->view('partials/footer');
	}
	public function polizas($idLegajo, $tipo)
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/tesoreria/polizas/polizas.js",
				"template/modulos/user/tesoreria/polizas/polizasMain.js"
			)
		);
		$datos['idLegajo'] = $idLegajo;
		$datos['tipo'] = $tipo;

		$datos['municipio'] = $this->session->userdata('municipio');
		$this->load->view('partials/header', $datos);
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/polizas');
		$this->load->view('partials/footer');
	}
	public function documentos($idPoliza, $tipo)
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/tesoreria/documentos/documentos.js",
				"template/modulos/user/tesoreria/documentos/documentosMain.js"
			)
		);
		$datos['idPoliza'] = $idPoliza;
		$datos['tipo'] = $tipo;
		
		$datos['municipio'] = $this->session->userdata('municipio');
		$this->load->view('partials/header', $datos);
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/documentos');
		$this->load->view('partials/footer');
	}
	public function detallesdeldocumento($idDocumento)
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/tesoreria/detallesDoc/detallesdocumento.js",
				"template/modulos/user/tesoreria/detallesDoc/detallesdocumentoMain.js"
			)
		);
		$datos['idDocumento'] = $idDocumento;
		$datos['municipio'] = $this->session->userdata('municipio');
		$this->load->view('partials/header', $datos);
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/detallesdocumento');
		$this->load->view('partials/footer');
	}


}
