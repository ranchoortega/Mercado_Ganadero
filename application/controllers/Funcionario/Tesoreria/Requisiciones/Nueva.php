<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nueva extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('usuario')) {
			header('Location: ' . base_url());
		}
	}

	public function requisicion($idTipo)
	{
		$dtz = new DateTimeZone("America/Mexico_City");
		$dt = new DateTime("now", $dtz);
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				"template/modulos/user/tesoreria/nueva.js"
			)
		);
		$datos['fecha'] = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d");
		$datos['municipio'] = $this->session->userdata('municipio');
		$datos['usuario'] = $this->session->userdata('usuario');
		$datos['tipo'] = $idTipo;

		$this->load->view('partials/header', $datos);
		// $this->load->view('partials/sidebar');
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/crear');
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
			$info = trim($this->input->post("info"));
			$fecha_registro = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$id = [];
			$id = $this->RequisicionesModel->setRequisicion($idMunicipio, $idUsuario, $tipoSolicitud, $fechaPedido, $programa, $componente, $actividad, $meta, $info, $oficio, $fecha_registro);
			echo json_encode($id);
		}
	}

	public function setAlimentos()
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
			$info = trim($this->input->post("info"));
			$fechaRealizar = trim($this->input->post("fechaRealizar"));
			$motivo = trim($this->input->post("motivo"));
			$beneficiados = trim($this->input->post("beneficiados"));

			$fecha_registro = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$id = [];
			$id = $this->RequisicionesModel->setAlimentos($idMunicipio, $idUsuario, $tipoSolicitud, $fechaPedido, $programa, $componente, $actividad, $meta, $info, $oficio, $fechaRealizar, $motivo, $beneficiados, $fecha_registro);
			echo json_encode($id);
		}
	}

	public function setCarros()
	{
		if ($this->input->post()) {
			$dtz = new DateTimeZone("America/Mexico_City");
			$dt = new DateTime("now", $dtz);
			$idMunicipio = trim($this->input->post("idMunicipio"));
			$idUsuario = trim($this->input->post("idUsuario"));
			$tipoSolicitud = trim($this->input->post("tipoSolicitud"));
			$fechaPedido = trim($this->input->post("fechaPedido"));
			$oficio = trim($this->input->post("oficio"));
			$programa = trim($this->input->post("programa"));
			$componente = trim($this->input->post("componente"));
			$actividad = trim($this->input->post("actividad"));
			$meta = trim($this->input->post("meta"));
			$info = trim($this->input->post("info"));
			$vehiculo = trim($this->input->post("vehiculo"));
			$fecha_registro = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$id = [];
			$id = $this->RequisicionesModel->setCarros($idMunicipio, $idUsuario, $tipoSolicitud, $fechaPedido, $programa, $componente, $actividad, $meta, $info, $oficio, $vehiculo, $fecha_registro);
			echo json_encode($id);
		}
	}

	public function setComputo()
	{
		if ($this->input->post()) {
			$dtz = new DateTimeZone("America/Mexico_City");
			$dt = new DateTime("now", $dtz);
			$idMunicipio = trim($this->input->post("idMunicipio"));
			$idUsuario = trim($this->input->post("idUsuario"));
			$tipoSolicitud = trim($this->input->post("tipoSolicitud"));
			$fechaPedido = trim($this->input->post("fechaPedido"));
			$oficio = trim($this->input->post("oficio"));
			$programa = trim($this->input->post("programa"));
			$componente = trim($this->input->post("componente"));
			$actividad = trim($this->input->post("actividad"));
			$meta = trim($this->input->post("meta"));
			$info = trim($this->input->post("info"));
			$equipo = trim($this->input->post("equipo"));
			$fecha_registro = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$id = [];
			$id = $this->RequisicionesModel->setCarros($idMunicipio, $idUsuario, $tipoSolicitud, $fechaPedido, $programa, $componente, $actividad, $meta, $info, $oficio, $equipo, $fecha_registro);
			echo json_encode($id);
		}
	}

	public function setArrendamiento()
	{
		if ($this->input->post()) {
			$dtz = new DateTimeZone("America/Mexico_City");
			$dt = new DateTime("now", $dtz);
			$idMunicipio = trim($this->input->post("idMunicipio"));
			$idUsuario = trim($this->input->post("idUsuario"));
			$tipoSolicitud = trim($this->input->post("tipoSolicitud"));
			$fechaPedido = trim($this->input->post("fechaPedido"));
			$fechaActividad = trim($this->input->post("fechaActividad"));
			$oficio = trim($this->input->post("oficio"));
			$programa = trim($this->input->post("programa"));
			$componente = trim($this->input->post("componente"));
			$actividad = trim($this->input->post("actividad"));
			$meta = trim($this->input->post("meta"));
			$justificacion = trim($this->input->post("justificacion"));
			$ubicacion = trim($this->input->post("ubicacion"));
			$info = trim($this->input->post("info"));

			$fecha_registro = $dt->format("Y") . "-" . $dt->format("m") . "-" . $dt->format("d") . " " . $dt->format("H") . ":" . $dt->format("i") . ":" . $dt->format("s");
			$id = [];
			$id = $this->RequisicionesModel->setArrendamiento($idMunicipio, $idUsuario, $tipoSolicitud, $fechaPedido, $programa, $componente, $actividad, $meta, $info, $oficio, $justificacion, $ubicacion, $fechaActividad, $fecha_registro);
			echo json_encode($id);
		}
	}
}