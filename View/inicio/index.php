<?php
//if(isset($_SESSION["id"])){ // SI EXISTE LA SESSION
//	if($_SESSION["rol"] != 1){// VALIDO SINO ES ADMIN
//		header("Location: /ventas");
//	}

//}else{
//	header("Location: ?controlador=usuario&accion=frmIUsuario");
//}


 //para hacer el selecct	<select name='id' class='form-control'> 
							
							


								foreach ($datos as $valor) {
echo "<option value=".$valor['id_equipo'].">".$valor['numero_equipo']."</option>
									";
							}
						/*	?>
							</select>*/
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
<form action="?controlador=usuario&accion=frmRUsuario" method="post">
<div class="col-lg-12">
<input type="submit" name="registrar" class="btn btn-primary" value="COMPRAR VEHICULO"></div>
</form>
<br>
<br>

<div>
<?php
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>MARCA  </th>";
echo "<th>MODELO</th>";
echo "<th>PRECIO</th>";
echo "<th>FOTO</th>";

echo "</tr>";

$URL = "http://".$_SERVER["HTTP_HOST"]."/ventas";
foreach ($datos as $valor) {
	$r = $URL."/Resource/img/".$valor['imagen_vehiculo'];
$i ="<img src='$r' width='180px' height='128px' >";

	echo "<tr>";
	echo "<td>".$valor['marca_vehiculo']."</td>"; 
	echo "<td>".$valor['modelo_vehiculo']."</td>";
	 echo "<td>".$valor['precio']."</td>";  
	  echo "<td>".$i."</td>"; 
	echo "</tr>";

echo "<th><a href='?controlador=vehiculo&accion=frmEvehiculo&id=".$valor['id_venta']."'>Editar </a></th>";
	echo "<th><a href='?controlador=vehiculo&accion=eliminarvehiculo&id=".$valor['id_venta']."'>Eliminar </a></th>";

	
}


	echo "</table>";
?>

<div/>
</body>
</html>
