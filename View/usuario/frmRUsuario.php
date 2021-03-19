
	<div class="row content">
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading"> <h1>Registro de CLIENTE<h1/></div>
				<br>
				<br/>
				<br/>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
	<form action="?controlador=usuario&accion=regUsuario" method="post"  enctype="multipart/form-data">
								<div class="col-lg-6">
								<div class="form-group">
									<label for="nombre">Nombre de Cliente</label> 
									<input type="text" name="nick" class="form-control">
								</div> 
								</div>
								<br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="apellido">Apellidos de Cliente</label>
									<input type="text" name="apellido" class="form-control">
								</div>
								</div>
								<br/>
                                <div class="col-lg-6">
								<div class="form-group">
									<label for="celular">Celular</label>
									<input type="number" name="celular" class="form-control">
								</div>
								</div>
                                <br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="correo">Correo</label>
									<input type="email" name="correo" class="form-control">
								</div>
								</div>
                                 <br/>
                                 <div class="col-lg-6">
								<div class="form-group">
									<label for="identificacion">Identificacion</label>
									<input type="number" name="identificacion" class="form-control">
								</div>
								</div>
								
								<br>
									<div class="form-group">
									<label for="tipo">Tipo de indentificación</label>
									<select name="tipos" class="form-control"> 
                                    <option value="2">Tarjeta identidad</option>
                                    <option value="1">Cedula</option>
                                  </select>
                                  <br>
                                 
                                 <br>
                                 <div class="col-lg-6">
								<div class="form-group">
									<label for="rol">Rol</label>
									<select name="rol" class="form-control"> 
                                    <option value="2">Estudiante</option>
                                    <option value="1">Administrador</option>
                                  </select>

                      <br>
                      <br>
                      <div class="col-lg-6">
					<div class="form-group">
						<label for="imagen">IMAGEN</label>
						<input type="file" name="archivo" class="form-control">
					</div>
					</div>


								 <br/>
								<div class="col-lg-12">
								<input type="submit" name="aceptar" class="btn btn-primary" value="aceptar">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		