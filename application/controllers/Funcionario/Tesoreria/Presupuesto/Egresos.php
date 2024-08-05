<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Egresos extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('usuario')) {
			header('Location: ' . base_url());
		}
	}

	public function ver($id_municipio)
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head(
			array(
				"template/assets/css/jsgrid.css"
			)
		);
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/assets/js/jsgrid/jsgrid.min.js",
				"template/assets/js/jsgrid/griddata.js",
				"template/assets/js/jsgrid/jsgrid.js",
				"template/modulos/user/tesoreria/presupuestoEgresos/presupuestoegresos.js",

				"template/modulos/user/tesoreria/presupuestoEgresos/presupuestoegresosMain.js"
			)
		);
		$datos['municipio'] = $id_municipio;
		$this->load->view('partials/header', $datos);
		// $this->load->view('partials/sidebar');
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/egresos/index');
		$this->load->view('partials/footer');
	}

	public function setEgreso()
	{
		if ($this->input->post()) {
			$dtz = new DateTimeZone("America/Mexico_City");
			$dt = new DateTime("now", $dtz);
			$anio = trim($this->input->post("anio"));
			$numero = trim($this->input->post("numero"));
			$municipio = trim($this->input->post("municipio"));
			$fondos = trim($this->input->post("fondos"));
			$fecha_registro = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$id = [];
			$id = $this->EgresosModel->setPresupuestoEgreso($anio, $numero, $municipio,$fondos, $fecha_registro);
			echo json_encode($id);
		}
	}

	public function updateEgreso()
	{
		if ($this->input->post()) {
			$id = trim($this->input->post("id"));
			$fondos = trim($this->input->post("fondos"));

			$rest = [];
			$rest = $this->EgresosModel->updatePresupuestoEgreso($id, $fondos);
			echo json_encode($rest);
		}
	}

	public function getClasificadores()
	{
		$clasificadores = [];
		$clasificadores = $this->EgresosModel->getClasificadores();
		echo json_encode($clasificadores);
	}

	public function getClasificador()
	{
		if ($this->input->post()) {
			$id = trim($this->input->post("id"));
			$clasificador = [];
			$clasificador = $this->EgresosModel->getClasificador($id);
			echo json_encode($clasificador);
		}
	}

	public function getPresupuestos()
	{
		if ($this->input->post()) {
			$municipio = trim($this->input->post("municipio"));
			$clasificadores = [];
			$clasificadores = $this->EgresosModel->getPresupuestosEgresos($municipio);
			echo json_encode($clasificadores);
		}
	}

	public function getPresupuesto()
	{
		if ($this->input->post()) {
			$id = trim($this->input->post("id"));
			$presupuesto = [];
			$presupuesto = $this->EgresosModel->getPresupuesto($id);
			echo json_encode($presupuesto);
		}
	}

	public function deletePresupuesto()
	{
		if ($this->input->post()) {
			$id = trim($this->input->post("id"));
			$res = [];
			$res = $this->EgresosModel->deletePresupuesto($id);
			echo json_encode($res);
		}
	}
}