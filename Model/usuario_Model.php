<?php
 class usuario_Model{
public function __construct(){}
public static function mdlRegUsuario($nick, $correo, $apellido , $celular, $rol,$tipos,$identificacion,$nombre)
{
        $i  = new conexion();
		$c = $i->conectar(); 
		$sql = "INSERT CLIENTE(NOMBRES,CORREO,CLIENTE_PASSWORD,APELLIDOS,CELULAR,ROL_CLIENTE,TIPO_DOCUMENTO,IDENTIFICACION,FOTO_CLIENTE)
	VALUES(:usuario, :correo, :password,:apellido , :celular, :rol, :tipo,:identificacion,:foto)";		
		$s   = $c->prepare($sql);		
		$res = $s->execute(array("usuario"     =>$nick,
			                     "correo"     =>$correo,
			                     "identificacion"=>$identificacion,
			                     "password"   =>sha1($identificacion),
			                     "apellido"   =>$apellido,
							     "celular"    =>$celular,
							     "rol"        =>$rol,
							     "tipo"     =>$tipos,
							    "foto"    =>$nombre
							     
							 ));
		return $res;
		// sha1 encripta la contraseña
}

	
public static function mdlBuscarusuario($id){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM CLIENTE WHERE ID_CLIENTE=$id";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
		$numero_filas = $s->rowCount();
		$datos = $s->fetch();
		return $datos;

	}
	public static function mdleliminar($id){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "DELETE FROM CLIENTE WHERE ID_CLIENTE=$id";		
		$s   = $c->prepare($sql);
		$res = $s->execute();
		return $res;
        
	}
public static function mdleditarUsu($nombre,$pass,$apellido,$celular,$id){
	$i  = new conexion();
	$c = $i->conectar();
	$sql = "UPDATE cliente SET
			NOMBRES= :nombre, IDENTIFICACION= :pass, APELLIDOs= :apellido,
			CELULAR= :celular WHERE  ID_CLIENTE= :id";
	$s   = $c->prepare($sql);
	$res = $s->execute(array("nombre" =>$nombre,
	"pass"   =>$pass,
	"apellido" =>$apellido,
    "celular"	=> $celular,
	"id" =>$id));
	return $res;
}
public static function mdlVerificarUsuario($usu, $pass){
		$i  = new conexion();
		$c = $i->conectar(); 
		// Linea 9: establecemos el DML
		$sql = "SELECT * FROM cliente WHERE Nombres = :n AND cliente_password = :p";
		$s   = $c->prepare($sql);
		// Linea 13: Establecemos que nos devuelva un array clave valor
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute(array("n"=>$usu , "p"=>sha1($pass)));
		// Linea 16: retorna el numero de registros
		$numero_filas = $s->rowCount();
		$datos = $s->fetch();
		
		return $datos;
	}


	public static function mdlListarusuarios(){
		$i  = new conexion();
		$c = $i->conectar(); 		
		$sql = "SELECT * FROM cliente";		
		$s   = $c->prepare($sql);
		$s->setFetchMode(PDO::FETCH_ASSOC);
		$res = $s->execute();
	
		$numero_filas = $s->rowCount();
		$datos = $s->fetchAll();
		return $datos;
	}
}