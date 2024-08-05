<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Solicitudes extends CI_Controller
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
				"template/modulos/user/tesoreria/solicitudes.js"
			)
		);
		$datos['municipio'] = $this->session->userdata('municipio');
		$datos['usuario'] = $this->session->userdata('usuario');

		$this->load->view('partials/header', $datos);
		// $this->load->view('partials/sidebar');
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/solicitudes');
		$this->load->view('partials/footer');
	}

	public function respuesta($id_requisicion)
	{
		$dtz = new DateTimeZone("America/Mexico_City");
		$dt = new DateTime("now", $dtz);
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/tesoreria/respuesta.js"
			)
		);
		$datos['fecha'] = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d");
		$datos['area'] = $this->session->userdata('obras');
		$datos['municipio'] = $this->session->userdata('municipio');
		$datos['usuario'] = $this->session->userdata('usuario');
		$datos['requisicion'] = $id_requisicion;

		$this->load->view('partials/header', $datos);
		// $this->load->view('partials/sidebar');
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/respuesta');
		$this->load->view('partials/footer');
	}

	public function getRequisiciones()
	{
		if ($this->input->post()) {
			$draw = $this->input->post('draw');
			$inicio = $this->input->post('start');
			$filas = $this->input->post('length');

			$id = $this->input->post('id');
			$idUsuario = $this->input->post('idUsuario');

			$total = $this->RequisicionesModel->getRequisicionesUsuario(false, $inicio, $filas, $id, $idUsuario);
			$datos = $this->RequisicionesModel->getRequisicionesUsuario(true, $inicio, $filas, $id, $idUsuario);

			$resultado = array(
				"draw" => $draw,
				"recordsTotal" => $total,
				"recordsFiltered" => $total,
				"data" => $datos
			);

			echo json_encode($resultado);
		}
	}

	public function getRequisicion()
	{
		if ($this->input->post()) {
			$id = trim($this->input->post("idRequisicion"));
			$requisicion = [];
			$requisicion = $this->RequisicionesModel->getRequisicion($id);
			echo json_encode($requisicion);
		}
	}

	public function getTipos()
	{
		$tiposRequisicion = [];
		$tiposRequisicion = $this->RequisicionesModel->getTipoRequisicion();
		echo json_encode($tiposRequisicion);
	}

	public function getTipo()
	{
		if ($this->input->post()) {
			$id_tipo = trim($this->input->post("id_tipo"));
			$tiposRequisicion = [];
			$tiposRequisicion = $this->RequisicionesModel->getTipo($id_tipo);
			echo json_encode($tiposRequisicion);
		}
	}

}