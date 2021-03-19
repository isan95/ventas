<?php 


class vehiculo_controlador{

public function index(){
$datos = vehiculo_Model::mdlListarvehiculo();
require_once("View/vehiculo/index.php");


}

public function frmRVehiculo(){
require_once("View/vehiculo/frmRVehiculo.php");



}
 public function regvehiculo(){
  extract($_POST);
    $ruta    = "./Resource/img";
    $nombre  = $_FILES['archivo']['name'];
    $tipo    = $_FILES['archivo']['type'];
    $dir_tmp = $_FILES['archivo']['tmp_name'];

		if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta."/".$nombre)){
        	$r = vehiculo_Model::mdlRegvehiculo($marca, $modelo , $chasis, $precio, $nombre);
			echo "Vehiculo registrado correctamente";
        }else{
        	echo "Error al subir el archivo";
        }	


}

public function frmEvehiculo(){

		$r =  vehiculo_Model::mdlBuscarvehiculo($_GET['id']);
		require_once "View/vehiculo/frmEvehiculo.php";
	}


public function actvehiculo(){

    extract($_POST);
    $r= vehiculo_Model::mdlactvehiculo($marca,$modelo,$precio,$id);
     if($r > 0)
			echo"Su registro ha sido editado";

	}

public function eliminarvehiculo(){
	$r= vehiculo_Model::mdleliminarvehiculo($_GET['id']);
		if($r > 0)
		{	echo"Su registro ha sido eliminado";}



	}



}