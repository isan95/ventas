<?php 
if(isset($_SESSION["id"])){ // SI EXISTE LA SESSION
	if($_SESSION["rol"] != 2){// VALIDO SINO ES ADMIN
		header("Location: /gestionestudiantes");
	}

}else{
	header("Location: ?controlador=usuario&accion=frmIUsuario");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>INICIO</title>
	<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}	
 td , th {

 	border: 1px solid #dddddd;
  text-align:  left;
  padding: 8px;
 }



tr:nth-child(even) { ik
background: color:#dddddd;
}
	</style>
</head>
<body>

	<div>
		<?php
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>  NICK  </th>";
echo "<th> CONTRASEÑA</th>";
echo "<th> APELLIDO</th>";


echo "</tr>";
foreach ($datos as $valor) {
	echo "<tr>";
	echo "<td>".$valor['nombre_estudiante']."</td>"; 
	echo "<td>".$valor['identificacion_estudiante']."</td>";
	 echo "<td>".$valor['apellido_estudiante']."</td>";    
	echo "</tr>";

echo "<th><a href='?controlador=usuario&accion=frmEUsuario&id=".$valor['id_estudiante']."'>Editar </a></th>";
	echo "<th><a href='?controlador=usuario&accion=eliminarusuario&id=".$valor['id_estudiante']."'>Eliminar </a></th>";

	
}


	echo "</table>";
?>

<div/>
</body>
</html>
