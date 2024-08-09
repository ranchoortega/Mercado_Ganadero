<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/* USUARIO COMUN */

$route['BienvenidoAdmin'] = 'administrador/Views';
$route['Inicio'] = 'administrador/Login';
$route['Login'] = 'administrador/Login';


