<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Another Square</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
<!--
.Estilo1 {color: #fff}
.Estilo2 {color: #004990}
.Estilo3 {font-size: 18px}
.Estilo4 {color: #333; }
-->
</style>
</head>
<body>
<?php
session_start();
	if(!isset($_SESSION['k_user']))
		header("Location: index.php");
	else if(!isset($_SESSION['k_tipo']) == 0 ){	
		//Obtener los datos del cliente registrado 
		$link = mysqli_connect("localhost","root","");
		mysqli_select_db($link,"cafeteria");

		$usuario = $_SESSION['k_user'];
		//echo $usuario;
		$result = mysqli_query($link,"select * from usuario where matricula = $usuario");
		$row = mysqli_fetch_array($result);
		$matricula = $row[0];
		$nombre = $row[1];
		$correo = $row[3];
		$telefono = $row[4];
	}
?>



<div id="wrap">

<div id="header">
<h1>CAFETERIA</h1>
<h2>FCC BUAP </h2>
</div>

<div id="menu">
<ul>
<li><a href="AdminInventario.php">Inventario</a></li>
<li><a href="AdminAlta.php">Alta Alimentos</a></li>
<li><a href="AdminBaja.php">Baja Alimentos</a></li>
<li><a href="AdminHistorial.php">Historial Pedidos</a></li>
<li><a href="PedidoListo.php">Pedidos Listos</a></li>
<li><a href="Entregado.php">Pedidos Entregados</a></li>
<li><a href="Salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="right"> 

<h2 class="Estilo2">Alta de Alimentos </h2>
<div align="left">
Operacion Completa.
      <br />
<form action = "insertarProducto.php" method = "post">
  <p>&nbsp;</p>
  <ul>
  <li><p align="left">Producto:</p></li>
   <input type = "text" name = "producto" size = "20" required>
  <p>&nbsp;</p>
  <li><p>Tipo Producto:</p></li>
	<input type = "text" name = "tipo" size = "20" required>
  <p>&nbsp;</p>
  <li><p>Precio:</p></li>
  <input type = "text" name = "precio" size = "20" required>
  <p>&nbsp;</p>
  <li><p>Cantidad</p></li>
  <input type = "text" name = "cantidad"  size = "20" required>
  </ul>
  <p>&nbsp;</p>
  <input type = "submit" name = "iniciar" value = "Insertar" required>
  <p> <br />
      <br />
      <br />
  </p>
</form>
<h2 class="Estilo2">Agregar Productos </h2>
<form action = "agregarCantidad.php" method = "post">
  <p>&nbsp;</p>
  <ul>
  <li><p align="left">Producto:</p></li>
  <select name="producto">
		<option>--Seleccionar--</option>
		<?php
		$link = mysqli_connect("localhost", "root", "");
		mysqli_select_db($link, "cafeteria");
		$result = mysqli_query($link,"select producto from producto");
		while($row = mysqli_fetch_array($result)){
			echo "<option>$row[0]</option>";
		}
		?>
	</select>
  <p>&nbsp;</p>
  <img src="images/registro.png" alt="Registro" width="237" height="256" align="right" longdesc="Imagen de registro" />
  <p>&nbsp;</p>
  <li><p>Cantidad</p></li>
  <input type = "text" name = "cantidad"  size = "20" required>
  </ul>
  <p>&nbsp;</p>
  <input type = "submit" name = "iniciar" value = "Agregar" required>
  <p> <br />
      <br />
      <br />
  </p>
</form>      
<br />.</p>
</div>
</div>

<div class="left"> 
<h2>Datos Personales </h2>
<ul>
<li class="Estilo1">Matricula: <?php echo "$matricula <br>" ?></li> 
<li class="Estilo1">Nombre: <?php echo "$nombre <br>" ?></li>
<li class="Estilo1">Correo: <?php echo "$correo <br>" ?></li>
<li class="Estilo1">Teléfono: <?php echo "$telefono <br>" ?></li> 
<br><br>
</ul>
</div>

<div style="clear: both;"> </div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>