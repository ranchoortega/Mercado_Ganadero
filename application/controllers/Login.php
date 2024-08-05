<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function SaveSesion()
    {
        if($this->input->post()){
            $activo =  $this->input->post('activo');
            $apellidoMaterno = $this->input->post('apellidoMaterno');
            $apellidoPaterno = $this->input->post('apellidoPaterno');
            $idAdministracion = $this->input->post('idAdministracion');
            $municipio = $this->input->post('idAdministracion');
            $idJerarquia = $this->input->post('idJerarquia');
            $idUnidadResponsable = $this->input->post('idUnidadResponsable');
            $idUsuario = $this->input->post('idUsuario');
            $nombre = $this->input->post('nombre');
            $rol = $this->input->post('rol');
            $token = $this->input->post('token');
            $usuarioInafed = $this->input->post('usuarioInafed');
            $usuarioObras = $this->input->post('usuarioObras');
            $data = [
                "usuario" => $idUsuario,
                "administracion" => $idAdministracion,
                "nombreUsuario" => $nombre . " " . $apellidoPaterno . " " . $apellidoMaterno,
                "unidadResponsable" => $idUnidadResponsable,
                "rol" => $rol,
                "obras" => $usuarioObras,
                "jerarquia" => $idJerarquia,
                "inafed" => $usuarioInafed,
                "token" => $token,
                "municipio" => $municipio
            ];
            $this->session->set_userdata($data);
            echo json_encode(true);
        }
    }

    public function destruir()
    {
        $this->session->sess_destroy();
        header('Location: ' . base_url());
    }
}
