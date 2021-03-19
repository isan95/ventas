<?php
 class inicio_Model{


	public static function mdlListarequipos(){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM T_EQUIPO";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
	
		$numero_filas = $s->rowCount();
		$datos = $s->fetchAll();
		return $datos;
	}
 }