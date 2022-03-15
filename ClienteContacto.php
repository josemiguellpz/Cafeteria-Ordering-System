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

<h2 class="Estilo2">Contacto</h2>
<div align="left">
  <p>&nbsp;</p>
  <ul>
    <p>
      Ubicacion: Avenida San Claudio, Blvrd 14 Sur, Cdad. Universitaria, 72592 Puebla, Pue.    </p>
    <p>&nbsp;</p>
    <p>Telefono: 222 229 5500 ext. 7204</p>
    <p>&nbsp;</p>
    <p>Correo Electronico: cafeteriafcc@correo.buap.mx
    </p>
  </ul>
  </div>
<h2 class="Estilo2">&nbsp;</h2>
</div>

<div style="clear: both;"><img src="images/contacto.png" alt="imagen de contacto" width="204" height="198" /></div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>