<div class="row content">
		<div class="col-sm-9 text-justify">
			<div class="panel panel-primary">
				<div class="panel-heading">Editar Vehiculos</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
<form action="?controlador=vehiculo&accion=actvehiculo" method="post">
<div class="form-group">
	<br/>
<label for="usuario">MARCA DE VEHICULO</label>
			<input type="text" name="marca" value="<?php echo $r['marca_vehiculo'];?>"class="form-control">
								</div>
<div class="form-group">
<label for="usuario">MODELO DE VEHICULO</label>
			<input type="text" name="modelo" value="<?php echo $r['modelo_vehiculo'];?>"class="form-control">
								</div>

<div class="form-group">
<label for="usuario">PRECIO DE VEHICULO</label>
			<input type="text" name="precio" value="<?php echo $r['precio'];?>"class="form-control">
								</div>



				<input type="hidden" name="id" value="<?php echo $r['id_venta'];?>">				
								<input type="submit" name="aceptar" class="btn btn-default">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>