<?php
function cargarContenido($contenido, $accion){
	require_once "Controller/".$contenido."_controlador.php";
	$clase = $contenido."_controlador";
	$cnt   = new $clase();
	require_once "Model/".$contenido."_Model.php";
	$cnt->{$accion}();
}

$controladores = array(
	"inicio" => array("index"),
	"usuario" => array("frmRUsuario","regUsuario","frmEUsuario","eliminarusuario","frmIUsuario","editarUsuario","verificarUsuario","cerrarSession","frmModusuario","Listarusuarios","index"),
	"vehiculo" => array("frmRvehiculo","regvehiculo","index","eliminarvehiculo","frmEvehiculo","actvehiculo") ,
	"compra" => array("frmRcompra","regcompra","validacioncompra","disponibilidad")
 );
if(isset($_GET['controlador']) && isset($_GET['accion'])){
	$controlador = $_GET['controlador'];
	$accion      = $_GET['accion'];
}else{
	$controlador = "inicio";
	$accion      = "index";
}

if(array_key_exists($controlador, $controladores)){
	if(in_array($accion, $controladores[$controlador])){
		cargarContenido( $controlador ,$accion);
	}
	else
		echo "<h1>Funcion no registrada</h1>";
}else{
		echo "<h1>Controlador no registrado</h1>";
}