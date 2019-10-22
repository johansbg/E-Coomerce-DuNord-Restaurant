<?php
include("include/mysql_class.php");
//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
	"Inicio" => array(
		"title" => "Inicio",
		"icon" => "fa-home",
		"url" => APP_URL."/index.php"
	),
	"Productos" => array(
		"title" => "Productos",
		"icon" => "fa-shopping-cart",
		"url" => APP_URL."/products-view.php"
	),
);
if(isset($_SESSION[Perfil])){
	if($_SESSION[Perfil]=="A"){
		$page_nav = array(
			"dashboard" => array(
				"title" => "Dashboard",
				"icon" => "fa-home",
				"sub" => array(
					"analytics" => array(
						"title" => "Analytics Dashboard",
						"url" => APP_URL
					),
					"social" => array(
						"title" => "Social Wall",
						"url" => APP_URL."/dashboard-social.php"
					)
				)
			),
			"Productos" => array(
				"title" => "Productos",
				"icon" => "fa-shopping-cart",
				"url" => APP_URL."/products-view.php"
			),
			"GestionProductos" => array(
				"title" => "Gestion De Productos",
				"icon" => "fa-database",
				"sub" => array(
					"CrearProducto" => array(
						"title" => "Crear Producto",
						"url" => APP_URL."/dashboard-social.php"
					),
					"ModificarProductos" => array(
						"title" => "Modificar Productos",
						"url" => APP_URL."/dashboard-social.php"
					),
					"Ordenes" => array(
						"title" => "Ordenes",
						"url" => APP_URL."/orders.php"
					),
				)
			),
		);
	}
}

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>
