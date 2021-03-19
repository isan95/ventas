<?php 
class compra_controlador{
public function frmRcompra(){

	require_once("View/compra/frmRcompra.php");
}

public function regcompra(){


extract($_POST);
$r = compra_Model::mdlRegcompra($numero,$identificacion);

/*public function disponibilidad(){
	
extract($_POST);
$r = compra_Model::mdlRegcompra();

}*/


}

}



