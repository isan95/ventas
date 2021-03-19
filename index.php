<?php

session_start();
require_once("conexion.php");
$URL = "http://".$_SERVER["HTTP_HOST"]."/ventas";
if(!isset($_GET['opc'])){
	require_once "View/plantilla.php";
}else{
	require_once "rutas.php";
}
