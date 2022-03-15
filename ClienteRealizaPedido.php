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
.Estilo4 {color: #333 }
-->
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

<h2 class="Estilo2">Realizar Pedido </h2>
<div align="left">
  <p>&nbsp;</p>
     
  <p>
  <form action="pedidoRealizado.php" method="post">
  <?php
  $link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "cafeteria");
	//OBTIONE COMIDA
  $result = mysqli_query($link,"select * from  producto where tipo_producto='comida'");
  echo "<h2>COMIDA<br></h2>";
	while($row=mysqli_fetch_row($result)){
    if($row[4] != 0){
      $menu = $row[1];
      $precio = $row[3];
      echo "<input type ='checkbox' id='activar' name='pedido[]' value='$menu'>";
      echo"<label for='activar'> $menu _____________ $$precio </br></label>";
    }
  }

  //OBTIENE BEBIDAS
  $result2 = mysqli_query($link,"select * from  producto where tipo_producto='bebidas'");
  echo "<h2>BEBIDAS<br></h2>";
	while($row=mysqli_fetch_row($result2)){
    if($row[4] != 0){
      $menu = $row[1];
      $precio = $row[3];
      echo "<INPUT TYPE ='checkbox' id='activar' NAME='pedido[]' VALUE='$menu'>";
      echo"<label for='activar'> $menu _____________ $$precio </br></label>";
    }
  }

  $result3 = mysqli_query($link,"select * from  producto where tipo_producto='postres'");
  echo "<h2>POSTRES<br></h2>";
	while($row=mysqli_fetch_row($result3)){
    if($row[4] != 0){ 
      $menu = $row[1];
      $precio = $row[3];
      echo "<INPUT TYPE ='checkbox' id='activar' NAME='pedido[]' VALUE='$menu'>";
      echo"<label for='activar'> $menu _____________ $$precio </br></label>";
    }
  }
?>
<br>
<input type="submit" value="Realizar pedido" name="Enviar">
</form>
  </p>
</div>
<h2 class="Estilo2">&nbsp;</h2>
<p>&nbsp;</p>
</div>

<div style="clear: both;"><img src="images/realiza.png" alt="" width="207" height="201" /></div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>