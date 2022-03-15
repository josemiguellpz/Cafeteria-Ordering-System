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

<h2 class="Estilo2">Historial Pedidos  </h2>
<div align="left">
      <br />
	  <form action="PedidoListo.php" method="POST">
      <?php
		$result = mysqli_query($link,"select * from pedido");
		
		echo "<table>";
		echo "<tr><th>Num de Pedido</th> <th>Matricula</th> <th>Fecha Pedido </th> <th>Fecha Entrega</th><th>Total</th><th>Estado pedido</th></tr>";
		while($row=mysqli_fetch_row($result)){
			if($row[6]==0){
				echo"<tr>
				<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$$row[4]</td>
				
				<td>
				<input type='checkbox' id='estado' name='estado_pedido[]' value='$row[0]'/>
				<label for='estado'>Listo</label>
				</td>
				
				</tr>";
			}
		}
		echo"</table>";
	  ?>
	  <input type="submit" name="Realizado" value="Pedidos listos"/>
	  </form>
      <br />
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

<div style="clear: both;"> 
  <p>&nbsp;</p>
  <p><img src="images/pedido.png" alt="" width="201" height="202" /></p>
</div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>