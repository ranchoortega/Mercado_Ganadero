<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terminos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    
    public function terminos()
    {
        $datos = array();
        $datos['estiloscss'] = plantilla_head(
            array(
 
            )
        );
        $datos['estilosjs'] = plantilla_footer(
            array(
    
                "template/assets/js2/main.js",
            )
        );

        $this->load->view('partials/header', $datos);
        $this->load->view('Leyes/TerminosCondiciones');  
        $this->load->view('partials/footer');
    }

    
    public function politica()
    {
        $datos = array();
        $datos['estiloscss'] = plantilla_head(
            array(

            )
        );
        $datos['estilosjs'] = plantilla_footer(
            array(
         
                "template/assets/js2/main.js",
            )
        );

        $this->load->view('partials/header', $datos);
        $this->load->view('Leyes/PoliticaPrivacidad');  
        $this->load->view('partials/footer');
    }
}

