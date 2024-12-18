<?php
defined('BASEPATH') OR exit('No direct script access allowed');


define('APP_URL', ($_SERVER['SERVER_PORT'] == 443 ? 'https' : 'http') . "://{$_SERVER['SERVER_NAME']}" . str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']));
//$config['base_url'] = 'http://localhost/SistemaActividades/';
$config['base_url'] = APP_URL;

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
$config['index_page'] = '';
$config['uri_protocol']	= 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language']	= 'english';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = FALSE;
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = TRUE;
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = '';

$config['sess_driver'] = 'files'; // Asegúrate de que el controlador de sesión sea 'files'
$config['sess_cookie_name'] = 'ci_session'; // El nombre de la cookie de sesión
$config['sess_expiration'] = 7200; // Tiempo de expiración de la sesión (en segundos)
$config['sess_save_path'] = NULL; // La ruta de almacenamiento de sesiones, por defecto es la carpeta temporal
$config['sess_match_ip'] = FALSE; // No es necesario que la IP coincida
$config['sess_time_to_update'] = 300; // Intervalo para actualizar el tiempo de la sesión
$config['sess_regenerate_destroy'] = FALSE; // No destruir la sesión antigua al regenerar el ID de sesión


$config['cookie_prefix']	= '';
$config['cookie_domain']	= 'localhost';
$config['cookie_path']		= '/';
$config['cookie_secure']	= FALSE;
$config['cookie_httponly'] 	= FALSE;


$config['standardize_newlines'] = FALSE;
$config['global_xss_filtering'] = FALSE;


$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();


$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';

$config['title'] = 'Sistema actividades';
