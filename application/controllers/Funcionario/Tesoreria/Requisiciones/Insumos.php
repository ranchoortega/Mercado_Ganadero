<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insumos extends CI_Controller
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
		$dtz = new DateTimeZone("America/Mexico_City");
		$dt = new DateTime("now", $dtz);
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/tesoreria/insumosM.js"
			)
		);
		$datos['fecha'] = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d");
		$datos['area'] = $this->session->userdata('obras');
		$datos['municipio'] = $this->session->userdata('municipio');
		$datos['usuario'] = $this->session->userdata('usuario');

		$this->load->view('partials/header', $datos);
		// $this->load->view('partials/sidebar');
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/insumos');
		$this->load->view('partials/footer');
	}

	public function setInsumo()
	{
		if ($this->input->post()) {
			$dtz = new DateTimeZone("America/Mexico_City");
			$dt = new DateTime("now", $dtz);
			$idMunicipio = trim($this->input->post("idMunicipio"));
			$idUsuario = trim($this->input->post("idUsuario"));
			$tipoSolicitud = trim($this->input->post("tipoSolicitud"));
			$fechaPedido = trim($this->input->post("fechaPedido"));
			$programa = trim($this->input->post("programa"));
			$componente = trim($this->input->post("componente"));
			$actividad = trim($this->input->post("actividad"));
			$meta = trim($this->input->post("meta"));
			$oficio = trim($this->input->post("oficio"));
			$fecha_expedicion = trim($this->input->post("fecha_expedicion"));
			$info = trim($this->input->post("info"));
			$tipo_gasto = "insumos";

			$fecha_registro = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$id = [];

			$id =  $this->RequisicionesModel->setRequisicion($idMunicipio, $idUsuario, $tipoSolicitud, $tipo_gasto, $fechaPedido, $programa, $componente, $actividad, $meta, $info, $oficio, $fecha_expedicion, $fecha_registro);
			echo json_encode($id);
		}
	}
}
