<?php 

if (!function_exists('plantilla_head')) {
    function plantilla_head($archivos=null) {

    	$resultado = array(
			"template/assets/css/icofont.css",
			"template/assets/css/icofont.min.css",

			"template/assets/css/fontawesome.css",

		
			"template/assets/css/feather-icon.css",
			"template/assets/css/animate.css",
			"template/assets/css/chartist.css",
			"template/assets/css/date-picker.css",
			"template/assets/css/prism.css",
			"template/assets/css/vector-map.css",
			"template/assets/css/bootstrap.css",
			"template/assets/css/datatables.css",
			"template/assets/css/style.css",
			"template/assets/css/color-1.css",
			"template/assets/css/responsive.css"
		);

    	if ($archivos != null) {
    		foreach ($archivos as $nuevoarchivo) {
				array_push($resultado, $nuevoarchivo);
			}
    	}

		return $resultado;
    }
}

if (!function_exists('plantilla_footer')) {
    function plantilla_footer($archivos=null) {
    	$resultado = array(
			"assets/vendor/jquery/jquery.min.js",
			"assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
			"assets/vendor/jquery-easing/jquery.easing.min.js",
// 			"assets/js/sb-admin-2.min.js",
// 			"assets/vendor/datatables/dataTables.bootstrap4.min.js",
			"assets/js/demo/datatables-demo.js",
// 			"assets/js/form-wizard-three.js",
// 			"assets/js/jquery.backstretch.min.js",
// 			"template/modulos/user/general.js",
			"template/assets/js/jquery-3.5.1.min.js",
			"template/assets/js/icons/feather-icon/feather.min.js",
			"template/assets/js/icons/feather-icon/feather-icon.js",
			"template/assets/js/sidebar-menu.js",
			"template/assets/js/config.js",
// 			"template/assets/js/bootstrap/popper.min.js",
			"template/assets/js/bootstrap/bootstrap.min.js",
// 		
			"template/assets/js/datatable/datatables/jquery.dataTables.min.js",
			"template/assets/js/datatable/datatable-extension/jszip.min.js",
			"template/assets/js/datatable/datatables/datatable.custom.js",
			"template/assets/js/script.js",
			"template/assets/js/sweetalert2.js",
			"template/modulos/user/general.js",
		);

		if ($archivos != null) {
    		foreach ($archivos as $nuevoarchivo) {
				array_push($resultado, $nuevoarchivo);
			}
    	}

		return $resultado;
    }
}