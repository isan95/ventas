<?php
class usuario_controlador{


public function index(){
$datos = usuario_Model::mdlListarusuarios();
require_once("View/usuario/index.php");


}
public function frmRUsuario(){
	//$datos = usuario_Model::mdlListarequipos();
    require_once "View/usuario/frmRUsuario.php";
}


public function regUsuario(){
         extract($_POST);
		$ruta    = "./Resource/img";
		$nombre  = $_FILES['archivo']['name'];
		$tipo    = $_FILES['archivo']['type'];
		$dir_tmp = $_FILES['archivo']['tmp_name'];
		       
        if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta."/".$nombre)){
        	$r = usuario_Model::mdlRegUsuario($nick, $correo, $apellido , $celular, $rol,$tipos,$identificacion,$nombre);
			echo "Usuario Registrado Correctamente";
        }else{
        	echo "Error al subir el archivo";
        }		
}


public function frmEUsuario(){
$r = usuario_Model::mdlBuscarusuario($_GET['id']);
require_once "View/usuario/frmEUsuario.php";
}

public function frmIUsuario(){
require_once "View/usuario/frmIUsuario.php";
}



public function eliminarusuario(){
		
		$r= usuario_Model::mdleliminar($_GET['id']);
		if($r > 0)
		{	echo"Su registro ha sido eliminado";}
		
}

	public function editarUsuario(){

    extract($_POST);
    $r= usuario_Model::mdleditarUsu($nombre,$pass,$apellido,$celular,$id);
     if($r > 0)
	echo"Su registro ha sido editado";


	}
	
	public function cerrarSession(){
		session_destroy();
		header("Location: /ventas");
	}

	public function verificarUsuario(){
		extract($_POST);
		$r = usuario_Model::mdlVerificarUsuario($usu, $pass);
		if (count($r) > 0){
			// GUARDAMOS ALGUNOS DATOS DEL VECTOR EN VARIABLES DE SESSION
			$_SESSION['id']    = $r["id_cliente"];
			$_SESSION['nick']  = $r["Nombres"];
			$_SESSION['rol']   = $r["rol_cliente"];			
			header("Location: /ventas");
		}else{
			echo "Verifique los datos";
		}
	}
	public function frmModusuario()
	{
		$datos = usuario_Model::mdlListarusuarios($_GET['id_estudiante']);

    require_once("View/usuario/frmModusuario.php");

	}
	

}