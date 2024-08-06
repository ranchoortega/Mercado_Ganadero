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
		$this->load->view('partials/header', $datos);
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/egresos');
		$this->load->view('partials/footer');
	}

	public function saveNuevoEgreso()
	{
		if ($this->input->post()) {
			$id_egreso = $this->input->post("id_egreso");
			$idmunicipio = $this->input->post("idmunicipio");
			$ejercicio = $this->input->post("ejercicio");
			$mes = $this->input->post("mes");
			$fuentefinanciamiento = $this->input->post("fuentefinanciamiento");
			$existe = $this->EgresosModel->existeegreso($idmunicipio, $ejercicio, $mes, $fuentefinanciamiento);
			$res = [];
			if ($existe) {
				$res['existe'] = true;
			} else {
				$this->EgresosModel->setnuevoegreso($id_egreso,$idmunicipio, $ejercicio, $mes, $fuentefinanciamiento);
				//$fecha_hora_actual = date("Y-m-d H:i:s");
				//$this->EgresosModel->setRegistroUsuario($this->session->userdata('usuario'), $fecha_hora_actual,$this->session->userdata('municipio'));
				$res['existe'] = false;
			}
			echo json_encode($res);
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

	public function saveNuevoLegajo()
	{
		if ($this->input->post()) {
			$idegreso = $this->input->post("idegreso");
			$legajo = $this->input->post("legajo");
			$r = $this->EgresosModel->setnuevolegajo($idegreso, $legajo);
			echo json_encode($r);
		}
	}

	public function getCampos($idDocumento)
	{
		$r = $this->EgresosModel->getCampos($idDocumento);
		echo json_encode($r);
	}

	public function getInfoEgreso($idEgreso)
	{
		$r = $this->EgresosModel->getInfoEgreso($idEgreso);
		echo json_encode($r);
	}

	public function saveNuevaPoliza()
	{
		if ($this->input->post()) {
			date_default_timezone_set('America/Mexico_City');
			$idlegajo = $this->inpit->post('idlegajo');
			$numeropoliza = $this->inpit->post('numeropoliza');
			$concepto = $this->inpit->post('concepto');
			$fechapoliza = $this->inpit->post('fechapoliza');
			$beneficiario = $this->inpit->post('beneficiario');
			$folio = $this->inpit->post('folio');
			//$fecha_hora_actual = date("Y-m-d H:i:s"); 
			//$this->EgresosModel->setRegistroUsuario($this->session->userdata('usuario'),$fecha_hora_actual,$this->session->userdata('municipio'));
			$r = $this->EgresosModel->saveNuevaPoliza($idlegajo, $numeropoliza, $concepto, $fechapoliza, $beneficiario, $folio);
			echo json_encode($r);
		}
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

	public function getInfoLegajo($idLegajo)
	{
		$r = $this->EgresosModel->getInfoLegajo($idLegajo);
		echo json_encode($r);
	}

	public function saveOrUpdatePoliza()
	{
		if ($this->input->post()) {
		    date_default_timezone_set('America/Mexico_City');
		    $fecha_actual = date('Y-m-d');
			$idpoliza = $this->input->post("idpoliza");
			$idlegajo = $this->input->post("idlegajo");
			$numeropoliza = $this->input->post("numeropoliza");
			$concepto = $this->input->post("concepto");
			$fechapoliza = $this->input->post("fechapoliza");
			$beneficiario = $this->input->post("beneficiario");
			$folio = $this->input->post("folio");
			$cantidadtotal = $this->input->post("cantidadtotal");
			if ($idpoliza) {
				$r = $this->EgresosModel->updatePoliza($idpoliza, $idlegajo, $numeropoliza, $concepto, $fechapoliza, $beneficiario, $folio, $cantidadtotal);
			} else {
				$r = $this->EgresosModel->saveNuevaPoliza($idlegajo, $numeropoliza, $concepto, $fechapoliza, $beneficiario, $folio, $cantidadtotal,$fecha_actual);
			}
			echo json_encode($r);
		}
	}
	
	public function updatePoliza()
	{
		if ($this->input->post()) {
		    date_default_timezone_set('America/Mexico_City');
		    $fecha_actual = date('Y-m-d');
			$idpoliza = $this->input->post("idpoliza");
			$idlegajo = $this->input->post("idlegajo");
			$r = $this->EgresosModel->updateLegajoPoliza($idpoliza, $idlegajo);
			echo json_encode($r);
		}
	}

	public function getPolizasByIdLegajo()
	{
		if ($this->input->post()) {
			$draw = $this->input->post('draw');
			$inicio = $this->input->post('start');
			$filas = $this->input->post('length');
			$idlegajo = $this->input->post('idlegajo');
			$total = $this->EgresosModel->getPolizasByIdLegajo(false, $inicio, $filas, $idlegajo);
			$datos = $this->EgresosModel->getPolizasByIdLegajo(true, $inicio, $filas, $idlegajo);
			$dataNueva = [];

			if ($datos) {
				foreach ($datos as $d) {
					$documentos = $this->EgresosModel->getTiposDocumentosByAnio($d->ejercicio);
					$c = '';
					$y = '<ol>';
					if($documentos){
    					foreach ($documentos as $key => $value) {
    						$doc = $this->EgresosModel->getDocumentosTipoByIdPolizaStatus($d->idpoliza, $value->id);
    						if ($doc === 0) {
    							$c .= '<li>Hace falta ' . $value->nombredocumento . '</li>';
    						}
    					}
					}

					if ($c != '') {
						$y = $c;
						$y .= '</ol>';
					} else {
						$y = '<div style="  width: 50px;
						height: 50px;
						background-color: #4CAF50; 
						border-radius: 50%; 
						display: flex;
						justify-content: center;
						align-items: center;">
						<span style="color: #FFFFFF; 
						font-size: 14px;
						font-weight: bold;">100%</span>
					  </div>';
					}

					$t = [
						"idpoliza" => $d->idpoliza,
						"ejercicio" => $d->ejercicio,
						"idlegajo" => $d->idlegajo,
						"numeropoliza" => $d->numeropoliza,
						"concepto" => $d->concepto,
						"fechapoliza" => $d->fechapoliza,
						"beneficiario" => $d->beneficiario,
						"folio" => $d->folio,
						"cantidadtotal" => $d->cantidadtotal,
						"documentosfaltantes" => $y
					];
					array_push($dataNueva, $t);
				}
			} else {
				$dataNueva = [];
				$total = 0;
			}

			$resultado = array(
				"draw" => $draw,
				"recordsTotal" => $total,
				"recordsFiltered" => $total,
				"data" => $dataNueva
			);

			echo json_encode($resultado);
		}
	}
	
	public function getPolizasSinRegistro()
	{
		if ($this->input->post()) {
			$draw = $this->input->post('draw');
			$inicio = $this->input->post('start');
			$filas = $this->input->post('length');
			$id = $this->input->post('id');
			$total = $this->EgresosModel->getPolizasSinRegistro(false, $inicio, $filas, $id);
			$datos = $this->EgresosModel->getPolizasSinRegistro(true, $inicio, $filas, $id);
			$resultado = array(
				"draw" => $draw,
				"recordsTotal" => $total,
				"recordsFiltered" => $total,
				"data" => $datos
			);
			echo json_encode($resultado);
		}
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

	public function getDocumentosByIdPoliza()
	{
		if ($this->input->post()) {
			$draw = $this->input->post('draw');
			$inicio = $this->input->post('start');
			$filas = $this->input->post('length');
			$idpoliza = $this->input->post('idpoliza');
			$total = $this->EgresosModel->getDocumentosByIdPoliza(false, $inicio, $filas, $idpoliza);
			$datos = $this->EgresosModel->getDocumentosByIdPoliza(true, $inicio, $filas, $idpoliza);
            $resultado = array("draw" => $draw,"recordsTotal" => $total,"recordsFiltered" => $total,"data" => $datos);
			echo json_encode($resultado);
		}
	}

	public function getInfoPoliza($idPoliza)
	{
		$r = $this->EgresosModel->getInfoPoliza($idPoliza);
		echo json_encode($r);
	}

	public function saveInfoArchivo()
	{
		if ($this->input->post()) {
		    date_default_timezone_set('America/Mexico_City');
			$idpoliza = $this->input->post('idpoliza');
			$ruta = $this->input->post('ruta');
			$tipo = $this->input->post('tipo');
			$campos = $this->input->post('campos');
			$fechaRegistro = date('Y-m-d');
			$r = $this->EgresosModel->saveInfoDocumento($idpoliza, $ruta, $campos, $tipo,$fechaRegistro);
			echo json_encode($r);
		}
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

	public function getInfoDocumento($idDocumento)
	{
		$r = $this->EgresosModel->getInfoDocumento($idDocumento);
		echo json_encode($r);
	}

	public function getPolizasFull()
	{
		if ($this->input->post()) {
			ini_set('memory_limit', '10000M');
			$draw = $this->input->post('draw');
			$inicio = $this->input->post('start');
			$filas = $this->input->post('length');
			$idMunicipio = $this->input->post('idMunicipio');
			$num_poliza = $this->input->post('num_poliza');
			$nombre_beneficiario = $this->input->post('nombre_beneficiario');
			$fuente_financiamiento = $this->input->post('fuente_financiamiento');
			$ejercicio = $this->input->post('ejercicio');
			$mes = $this->input->post('mes');
			$total = $this->EgresosModel->getFullPolizas(false, $inicio, $filas, $idMunicipio, $num_poliza, $nombre_beneficiario, $fuente_financiamiento, $ejercicio, $mes);
			$datos = $this->EgresosModel->getFullPolizas(true, $inicio, $filas, $idMunicipio, $num_poliza, $nombre_beneficiario, $fuente_financiamiento, $ejercicio, $mes);
			$dataNueva = [];
			if ($datos) {
				foreach ($datos as $d) {
					$documentos = $this->EgresosModel->getTiposDocumentosByAnio($d->ejercicio);
					$c = '';
					$y = '<ol>';
					foreach ($documentos as $key => $value) {
						$doc = $this->EgresosModel->getDocumentosTipoByIdPolizaStatus($d->idpoliza, $value->id);
						if ($doc === 0) {
							$c .= '<li>Hace falta ' . $value->nombredocumento . '</li>';
						}
					}
					if ($c != '') {
						$y = $c;
						$y .= '</ol>';
					} else {
						$y = '<div style="  width: 50px;
						height: 50px;
						background-color: #4CAF50; 
						border-radius: 50%; 
						display: flex;
						justify-content: center;
						align-items: center;">
						<span style="color: #FFFFFF; 
						font-size: 14px;
						font-weight: bold;">100%</span>
					  </div>';
					}

					$t = [
						"beneficiario" => $d->beneficiario,
						"concepto" => $d->concepto,
						"ejercicio" => $d->ejercicio,
						"fechapoliza" => $d->fechapoliza,
						"folio" => $d->folio,
						"fuente_financiamiento" => $d->fuente_financiamiento,
						"id_egreso" => $d->id_egreso,
						"id_municipio" => $d->id_municipio,
						"idegreso" => $d->idegreso,
						"idlegajo" => $d->idlegajo,
						"idpoliza" => $d->idpoliza,
						"mes" => $d->mes,
						"numerolegajo" => $d->numerolegajo,
						"numeropoliza" => $d->numeropoliza,
						"documentosfaltantes" => $y
					];
					array_push($dataNueva, $t);
				}
			} else {
				$dataNueva = [];
				$total = 0;
			}
			$resultado = array("draw" => $draw,"recordsTotal" => $total,"recordsFiltered" => $total,"data" => $dataNueva);
			echo json_encode($resultado);
		}
	}

	public function getTiposDocumentos()
	{
		$r = $this->EgresosModel->getTiposDocumentos();
		echo json_encode($r);
	}

	public function getDocumentosIdPoliza()
	{
		if ($this->input->post()) {
			$draw = $this->input->post('draw');
			$inicio = $this->input->post('start');
			$filas = $this->input->post('length');
			$idPoliza = $this->input->post('idpoliza');

			$total = $this->EgresosModel->getAllDocumentosByIdPoliza(false, $inicio, $filas, $idPoliza);
			$datos = $this->EgresosModel->getAllDocumentosByIdPoliza(true, $inicio, $filas, $idPoliza);

			$resultado = array(
				"draw" => $draw,
				"recordsTotal" => $total,
				"recordsFiltered" => $total,
				"data" => $datos
			);

			echo json_encode($resultado);
		}
	}

	public function updateDocPoliza()
	{
		if ($this->input->post()) {
			$iddocumento = $this->input->post('iddocumento');
			$idpoliza = $this->input->post('idpoliza');
			$idtipodocumento = $this->input->post('idtipodocumento');
			$res = $this->EgresosModel->updateDocPoliza($iddocumento, $idpoliza, $idtipodocumento);
			echo json_encode($res);
		}
	}

	public function getAllTiposDocumentoByIdPoliza($idPoliza)
	{
		$polizaRegistro = $this->EgresosModel->getDocumentosTipoByIdPoliza($idPoliza, 1);
		$polizaPago = $this->EgresosModel->getDocumentosTipoByIdPoliza($idPoliza, 2);
		$cfdi = $this->EgresosModel->getDocumentosTipoByIdPoliza($idPoliza, 3);
		$requisicion = $this->EgresosModel->getDocumentosTipoByIdPoliza($idPoliza, 4);
		$evidencia = $this->EgresosModel->getDocumentosTipoByIdPoliza($idPoliza, 5);
		$complementario = $this->EgresosModel->getDocumentosTipoByIdPoliza($idPoliza, 6);
		$res = [
			"polizaregistro" => $polizaRegistro,
			"polizapago" => $polizaPago,
			"cfdi" => $cfdi,
			"requisicion" => $requisicion,
			"evidencia" => $evidencia,
			"complementario" => $complementario
		];
		echo json_encode($res);
	}

	public function getEvidenciaDocumental($idPoliza, $tipo)
	{
		$polizaRegistro = $this->EgresosModel->getDocumentosTipoByIdPoliza($idPoliza, $tipo);
		echo json_encode($polizaRegistro);
	}

	public function saveTipoDocumentoBd()
	{
		if ($this->input->post()) {
			date_default_timezone_set('America/Mexico_City');
			$idpoliza = $this->input->post('idpoliza');
			$ruta = $this->input->post('ruta');
			$idtipodocumento = $this->input->post('idtipodocumento');
			$fecha_hora_actual = date("Y-m-d H:i:s");
			$this->EgresosModel->setRegistroUsuario($this->session->userdata('usuario'), $fecha_hora_actual, "egreso",$this->session->userdata('municipio'));
			$res = $this->EgresosModel->saveDocPoliza($idpoliza, $ruta, $idtipodocumento);
			echo json_encode($res);
		}
	}

	public function eliminarDocEnBd()
	{
		if ($this->input->post()) {
			$iddocumento = $this->input->post('iddocumento');
			$idpoliza = $this->input->post('idpoliza');
			$res = $this->EgresosModel->deleteDocEnBd($iddocumento, $idpoliza);
			echo json_encode($res);
		}
	}

	public function juntarpdf($idPoliza)
	{
		ini_set('memory_limit', '10000M');
		$this->load->library('pdf');
		$arregloCombinado = $this->EgresosModel->getDocumentosTipoByIdPolizaJunta($idPoliza);
		if (count($arregloCombinado) > 0) {
			foreach ($arregloCombinado as $i) {
				$p = '';
				$fileContent = file_get_contents($i->ruta, FILE_BINARY);
				$base64 = base64_encode($fileContent);
				if ($base64 != '') {
					$p = 'data:application/pdf;base64,' . $base64;
					$pageCount = $this->pdf->setSourceFile($p);
					for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
						$templateId = $this->pdf->importPage($pageNo);
						$size = $this->pdf->getTemplateSize($templateId);
						$this->pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
						$this->pdf->useTemplate($templateId);
					}
				}
			}
		} else {
			$this->pdf->AddPage();
			$this->pdf->SetFont('Arial', 'B', 30);
			$this->pdf->Cell(40, 40, 'NO HAY DOCUMENTOS CARGADOS');
		}
		$this->pdf->Output('I', 'generated.pdf');
	}

	public function juntarPdfDesglosado($idPoliza, $idTipoDocumento)
	{
		ini_set('memory_limit', '10000M');
		$this->load->library('pdf');
		$arregloCombinado = $this->EgresosModel->getDocumentosTipoByIdPoliza($idPoliza, $idTipoDocumento);
		if ($arregloCombinado) {
			foreach ($arregloCombinado as $i) {
				$url = $i->ruta;
				if ($url != "") {
					$archivoLocal = uniqid() . '.pdf';
					$fileContent = file_get_contents($url, FILE_BINARY);
					if ($fileContent !== false) {
						if (file_put_contents($archivoLocal, $fileContent) !== false) {
							$pageCount = $this->pdf->setSourceFile($archivoLocal);
							for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
								$templateId = $this->pdf->importPage($pageNo);
								$size = $this->pdf->getTemplateSize($templateId);
								$this->pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
								$this->pdf->useTemplate($templateId);
							}
							unlink($archivoLocal);
						}
					}
				}

			}
		}
		$this->pdf->Output('I', 'generated.pdf');
	}


    public function polizassiregistro()
	{
		$datos = array();
		$datos['estiloscss'] = plantilla_head();
		$datos['estilosjs'] = plantilla_footer(
			array(
				/*
				"template/modulos/user/tesoreria/polizassinregistro.js",
				"template/modulos/user/tesoreria/polizassinregistroMain.js"
				*/
				"template/modulos/user/tesoreria/polizaSinRegistro/polizassinregistro.js",
				"template/modulos/user/tesoreria/polizaSinRegistro/polizassinregistroMain.js"
			)
		);
		$datos['municipio'] = $this->session->userdata('municipio');
		$this->load->view('partials/header', $datos);
		$this->load->view('partials/navbar');
		$this->load->view('cliente/tesoreria/polizasSinRegistro');
		$this->load->view('partials/footer');
	}

}