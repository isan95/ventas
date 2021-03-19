<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TRABAJO</title>
	<link rel="stylesheet" type="text/css"
	href="<?php echo $URL."/Resource/css/estilos.css"; ?>">
	 <script src="<?php echo $url;?>/recursos/js/jquery.min.js"></script>
    <script src="<?php echo $url;?>/recursos/js/bootstrap.min.js"></script>
</head>




	<div id="cuerpo">
		<header id="encabezado">
			<img src="<?php echo $URL."/Resource/img/banner1.jpg";?>" width="100%">
		</header>
		<nav id="menu">
<li><a href="?controlador=inicio&accion=index">Inicio</a></li>



<?php if(isset($_SESSION["id"])){  ?>
          <?php if ($_SESSION['rol'] == 1){?>
               
           <li><a href="?controlador=usuario&accion=index"><span class="glyphicon glyphicon-user"></span>
            ADMINISTRAR USUARIOS</a></li>

             <li><a href="?controlador=vehiculo&accion=index"><span class="glyphicon glyphicon-user"></span>
              ADMINISTRAR VEHICULOS </a></li>

           <?php } ?>     
              <li><a href="?controlador=compra&accion=frmRcompra"><span class="glyphicon glyphicon-user"></span>
                COMPRAR VEHICULOS </a></li>

              <li><a href="?controlador=usuario&accion=cerrarSession"><span class="glyphicon glyphicon-log-in"></span>
                <?php echo $_SESSION['nick'];?> - Cerrar Session</a></li>
        <?php }else{ ?>  
	        <li><a href="?controlador=usuario&accion=frmIUsuario"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a></li>
        <?php } ?>






	</ul>
		</nav>
		<section id="seccion">

			<?php  require_once "rutas.php";?>

		</section>
		<aside id="lateral">Elemento lateral</aside>
		<footer id="pie">Enrique puche y Ismael polanco</footer>
	</div>
</body>
</html>