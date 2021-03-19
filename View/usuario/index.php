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
	<form action="?controlador=usuario&accion=frmRUsuario" method="post">
<div class="col-lg-12">
<input type="submit" name="registrar" class="btn btn-primary" value="registrar cliente"></div>
</form>
<br>
<br>
	<div>
		<?php

echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>NOMBRES </th>";
echo "<th>APELLIDOS </th>";
echo "<th>CELULAR</th>";
echo "<th> CONTRASEÑA</th>";
echo "<th> CORREO </th>";
echo "<th> FOTO CLIENTE </th>";
echo "</tr>";
$URL = "http://".$_SERVER["HTTP_HOST"]."/ventas";
foreach ($datos as $valor) {
	$r = $URL."/Resource/img/".$valor['foto_cliente'];
$i ="<img src='$r' width='128px' height='128px' >";


	echo "<tr>";
	echo "<td>".$valor['Nombres']."</td>";
	echo "<td>".$valor['Apellidos']."</td>"; 
	echo "<td>".$valor['Celular']."</td>";
	 echo "<td>".$valor['identificacion']."</td>";
	 echo "<td>".$valor['Correo']."</td>";  
	  echo "<td>".$i."</td>";  
	  
	echo "</tr>";

echo "<th><a href='?controlador=usuario&accion=frmEUsuario&id=".$valor['id_cliente']."'>Editar </a></th>";
	echo "<th><a href='?controlador=usuario&accion=eliminarusuario&id=".$valor['id_cliente']."'>Eliminar </a></th>";

	


}
	echo "</table>";

?>

<div/>

</body>
</html>
