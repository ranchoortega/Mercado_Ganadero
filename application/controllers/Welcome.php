<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Definir el título
        $titulo = "Mercado Ganadero - Compra y Venta de Ganado "; // Aquí pones el título que desees

        // Crear el array de datos
        $datos = array();
        $datos['titulo'] = $titulo; // Incluir el título en los datos

        $datos['estiloscss'] = plantilla_head(
            array(
           
                "template/assets/cssInicio/slick.css",
                "template/assets/cssInicio/slick-theme.css",
                "template/assets/cssInicio/nouislider.min.css",
                "template/assets/cssInicio/font-awesome.min.css",
                "template/assets/cssInicio/style.css",
            )
        );

        $datos['estilosjs'] = plantilla_footer(
            array(
                
                "template/assets/js2/slick.min.js",
                "template/assets/js2/nouislider.min.js",
                "template/assets/js2/jquery.zoom.min.js",
                 "template/assets/js2/main.js",
      

               
                "template/modulos/user/Welcome.js",
                "template/modulos/user/welcomeMain.js",
            )
        );

        // Cargar las vistas y pasar el array de datos
        $this->load->view('partialsInicio/header', $datos); // Pasamos $datos
        $this->load->view('welcome_message'); // También pasamos $datos aquí
        $this->load->view('partials/footer');
    }
}
