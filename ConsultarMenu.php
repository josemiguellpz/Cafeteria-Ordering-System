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

<div id="wrap">

<div id="header">
<h1>CAFETERIA</h1>
<h2>FCC BUAP </h2>
</div>

<div id="menu">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="ConsultarMenu.php">Consultar Menu</a></li>
<li><a href="Registrarse.php">Registrarse</a></li>
<li><a href="Contacto.php">Contacto</a></li>
</ul>
</div>

<div id="content">
<div class="right"> 

<h2 class="Estilo2">Menu Disponible </h2>
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
<div align="left">

</div>
<p>&nbsp;</p>

</div>

<div class="left"> 
<form action = "login.php" method = "post">
<h2>Iniciar Sesión: </h2>
<ul>
<li class="Estilo1">Matricula:</li> 
<input type = "text" name = "matricula" size="15" required>
<li class="Estilo1">Contraseña:</li> 
<input type = "password" name = "pass" size = "15" required>
<br><br>
<input type = "submit" name = "iniciar" value = "Iniciar sesion" required>
</ul>
</form>

</div>

<div style="clear: both;"><img src="images/menu.png" alt="" width="200" height="157" /> </div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>