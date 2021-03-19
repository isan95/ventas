<?php 
if(isset($_SESSION["id"])){ // SI EXISTE LA SESSION
	if($_SESSION["rol"] != 1){
		
		header("Location: /ventas");
		echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
	}

}else{
	header("Location: ?controlador=usuario&accion=frmIUsuario");
}
?>

	<div class="row content">
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading">Editar Usuarios</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form action="?controlador=usuario&accion=editarUsuario" method="post">
								<br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="nombre">Nick</label>  
										<br/>
									<input type="text" name="nombre" class="form-control" value="<?php echo $r['Nombres']; ?>">
								</div>
								</div>
								<br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="nombre">Contraseña</label>  
										<br/>
									<input type="text" name="pass" class="form-control" value="<?php echo $r['identificacion']; ?>">
								</div>
								</div>
								<br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="apellido">Apellido</label>
							<br/>
									<input type="text" name="apellido" class="form-control"  value="<?php echo $r['Apellidos']; ?>">
								</div>
								</div>
								<br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="celular">Celular</label>
									<br/>
									<input type="number" name="celular" class="form-control" value="<?php echo $r['Celular']; ?>">
								</div>
							</div>
							<br/>

								<div class="col-lg-6">
								<div class="form-group">
									<label for="email">Email</label>
									<br/>
									<input type="email" name="correo" class="form-control" value="<?php echo $r['Correo']; ?>">
								</div>
								</div>
								<br/>
							
							<br/>
								
											<br/>
											

<input type="hidden" name="id" value="<?php echo $r['id_cliente']; ?>">
								<input type="submit" name="aceptar" class="btn btn-default">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>