<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function SaveSesion()
    {
        if($this->input->post()){
          
            $idUsuario = $this->input->post('idUsuario');
           
            $token = $this->input->post('token');
          
            $data = [
                "usuario" => $idUsuario,
                "token" => $token,
            ];
            $this->session->set_userdata($data);
            $usuario = $this->session->userdata();
         
            echo json_encode(true);
        }
    }

    public function SaveSesionUser()
    {
        if($this->input->post()){
          
            $idUsuario = $this->input->post('idUsuario');
          
            $data = [
                "usuario" => $idUsuario
            ];
            $this->session->set_userdata($data);
            $usuario = $this->session->userdata();
         
            echo json_encode(true);
        }
    }

    public function destruir()
    {
        $this->session->sess_destroy();
      
        header('Location: ' . base_url() . 'Inicio');
    }
}
