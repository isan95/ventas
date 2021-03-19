<?php
class compra_Model{

public static function mdlRegcompra($numero,$identificacion){
        $i  = new conexion();
		$c = $i->conectar(); 
        $sql = "SELECT COUNT(*) total FROM venta WHERE ID_VENTA =".$numero." AND disponibilidad =".true;
        /*"INSERT cliente_venta(ID_VENTA,ID_CLIENTE,FECHA_COMPRA )
	VALUES(:numero, :identificacion, :fecha ) WHERE NOT EXISTS(SELECT * FROM cliente_venta WHERE ID_VENTA = :numero)";*/
	$s   = $c->query($sql);
	$res = $s->fetchColumn();
	if($res==1){
		$sql = "INSERT INTO cliente_venta (ID_VENTA,ID_CLIENTE) VALUES (".$numero.", ".$identificacion.")";
		$s = $c->prepare($sql);
		$s->execute();
		echo "Insercion exitosa";
		 $sql= "UPDATE venta SET disponibilidad= :disponibilidad WHERE numero_chasis = :numero";
		$s   = $c->prepare($sql);
		$s->execute(array("disponibilidad" =>0, "numero" => $numero));
	}
	else{
		echo "El vehiculo ya ha sido comprado";
	}

}


}