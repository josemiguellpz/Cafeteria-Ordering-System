<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Another Square</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<style type="text/css">
</style>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['k_user']))
  header("Location: index.php");
else if(!isset($_SESSION['k_tipo']) == 0 ){	
}
?>

<div id="wrap">

<div id="header">
<h1>CAFETERIA</h1>
<h2>FCC BUAP </h2>
</div>

<div id="menu">
<ul>
<li><a href="ClienteIndexSesion.php">Inicio</a></li>
<li><a href="ClienteMenu.php">Consultar Menu</a></li>
<li><a href="ClienteHistorial.php">Historial Pedidos</a></li>
<li><a href="ClienteRealizaPedido.php">Realizar Pedido</a></li>
<li><a href="EstadoPedido.php">Estado del pedido</a><li>
<li><a href="ClienteContacto.php">Contacto</a></li>
<li><a href="Salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="right"> 

<h2 class="Estilo2">Menu Disponible </h2>
<div align="left">
  <p>
  <?php
  $link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "cafeteria");
	//OBTIENE DATOS DE COMIDA
  $result = mysqli_query($link,"select * from  producto where tipo_producto = 'comida'");

  echo "<table>";
  echo "<tr>
        <th>Producto</th> <th>Precio</th>
        </tr>";
  echo"<h2>COMIDA</h2>";
	while($row=mysqli_fetch_row($result)){
    $producto = $row[1];
    $precio = $row[3];
    echo"<tr>
        <td>$producto</td><td>$$precio</td>
        </tr>";
  }
  echo"</table>";
  //OBTIENE DATOS DE BEBIDAS

  $result2 = mysqli_query($link,"select * from  producto where tipo_producto = 'bebidas'");
  echo "<table>";
  echo "<tr>
        <th>Producto</th> <th>Precio</th>
        </tr>";
  echo"<h2>BEBIDAS</h2>";
	while($row=mysqli_fetch_row($result2)){
    $producto = $row[1];
    $precio = $row[3];
    echo"<tr>
        <td>$producto</td><td>$$precio</td>
        </tr>";
  }
  echo"</table>";

  $result3 = mysqli_query($link,"select * from  producto where tipo_producto = 'postres'");
  echo "<table>";
  echo "<tr>
        <th>Producto</th> <th>Precio</th>
        </tr>";
  echo"<h2>POSTRES</h2>";
	while($row=mysqli_fetch_row($result3)){
    $producto = $row[1];
    $precio = $row[3];
    echo"<tr>
        <td>$producto</td><td>$$precio</td>
        </tr>";
  }
  echo"</table>";
  ?>
  </p>
</div>
<h2 class="Estilo2">&nbsp;</h2>
<p>&nbsp;</p>
</div>

<div style="clear: both;"><img src="images/menu.png" alt="menu" width="181" height="165" align="top" longdesc="Imagen de menu" /> </div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>