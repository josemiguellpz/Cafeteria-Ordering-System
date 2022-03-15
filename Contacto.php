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

<div class="left"> 
<form action = "login.php" method = "post">
<h2>Iniciar Sesión: </h2>
<ul>
<li class="Estilo1">Matricula:</li> 
<input type = "text" name = "matricula" size = "15" required>
<li class="Estilo1">Contraseña:</li> 
<input type = "password" name = "pass" size = "15" required>
<br><br>
<input type = "submit" name = "iniciar" value = "Iniciar sesion" required>
</ul>
</form>
</div>

<div style="clear: both;">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><img src="images/contacto.png" alt="" width="204" height="198" /></p>
</div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>