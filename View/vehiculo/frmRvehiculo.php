
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading"> <h1>REGISTRAR VEHICULOS<h1/></div>
				<br>
				<br/>
				<br/>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
	<form action="?controlador=vehiculo&accion=regvehiculo" method="post" enctype="multipart/form-data">
								<div class="col-lg-6">
								<div class="form-group">
									<label for="marca">Marca de vehiculo</label>
									<input type="text" name="marca" class="form-control">
								</div>
								</div>
								<br/>
								<div class="col-lg-6">
								<div class="form-group">
									<label for="modelo">Modelo de vehiculo</label>
									<input type="date" name="modelo" class="form-control">
								</div>
								</div>
								<br/>
                                <div class="col-lg-6">
								<div class="form-group">
									<label for="chasis">Numero de chasis</label>
									<input type="text" name="chasis" class="form-control">
								</div>
								</div>
								<br/>
								<br/>
                                <div class="col-lg-6">
								<div class="form-group">
									<label for="precio">Precio</label>
									<input type="text" name="precio" class="form-control">
								</div>
								</div>
								<br/>

					<div class="col-lg-6">
					<div class="form-group">
						<label for="imagen">Imagen Vehiculos</label>
						<input type="file" name="archivo" class="form-control">
					</div>
					</div>

									<div class="col-lg-12">
								<input type="submit" name="aceptar" class="btn btn-primary" value="aceptar">
								</div>
							</form>