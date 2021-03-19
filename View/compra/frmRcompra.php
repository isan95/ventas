<?php/*
if(isset($_COMPRA["fecha"])){ // SI EXISTE LA SESSION
	if($_COMPRA["fecha"] != 2){// VALIDO SINO ES ADMIN
		header("Location: /ventas");
	}

}else{
	header("Location: ?controlador=compra&accion=frmRcompra");
} */
?>

<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading" align="center"> <h1>REGISTRAR COMPRA<h1/></div>
				<br>
				<br/>
				<br/>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
	<form action="?controlador=compra&accion=regcompra&disponibilidad" method="post">
								<div class="col-lg-6">
								<div class="form-group">
									<label for="numero">Numero chasis</label>
									<input type="text" name="numero" class="form-control">
								</div>
								</div>
								<br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="identificacion">Identificación</label>
									<input type="text" name="identificacion" class="form-control">
								</div>
								</div>
								<br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="fecha">Fecha de compra</label>
									<input type="date" name="fecha" class="form-control">
								</div>
								</div>
								<br>
								<br>

<input type="submit" name="registrar" class="btn btn-primary" value="COMPRAR VEHICULO"></div>

							</form>