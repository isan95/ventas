<?php
class vehiculo_Model{


public static function mdlRegvehiculo($marca, $modelo , $chasis, $precio ,$nombre)
{
        $i  = new conexion();
		$c = $i->conectar(); 
		$sql = "INSERT venta(ID_VENTA,MARCA_VEHICULO,MODELO_VEHICULO,NUMERO_CHASIS,PRECIO,IMAGEN_VEHICULO,DISPONIBILIDAD)
	VALUES(:id, :marca, :modelo, :chasis ,:precio , :imagen , :disponibilidad)";		
		$s   = $c->prepare($sql);		
		$res = $s->execute(array("marca"     =>$marca,
			                     "modelo"     =>$modelo,
							     "chasis"        =>$chasis,
							     "precio"   =>$precio,
							     "imagen"  =>$nombre,
							    "disponibilidad" => (true),
							    "id"             =>$chasis
							 ));
		return $res;
		// sha1 encripta la contraseña
}

public static function mdlListarvehiculo(){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM venta";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
		$numero_filas = $s->rowCount();
		$datos = $s->fetchAll();
		return $datos;
	}

public static function mdlBuscarvehiculo($id)
{
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM venta WHERE id_venta=$id";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
		$numero_filas = $s->rowCount();
		$datos = $s->fetch();
		return $datos;



	}
	public static function mdlactvehiculo($marca,$modelo,$precio,$id){
   $i = new conexion();
   $c = $i->conectar();
   $sql= "UPDATE VENTA SET MARCA_VEHICULO= :marca , MODELO_VEHICULO= :modelo , PRECIO= :precio WHERE vehiculo(DISPONIBILIDAD)= :id";
   $s   = $c->prepare($sql);
   $res = $s->execute(array("marca" => $marca,
                             "modelo" =>$modelo,
                             "precio" =>$precio,
                              "id"   => $id));
   return $res;


}

public static function mdleliminarvehiculo($id){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "DELETE FROM VENTA WHERE ID_VENTA=$id";		
		$s   = $c->prepare($sql);
		$res = $s->execute();
		return $res;
        
	}


	
}