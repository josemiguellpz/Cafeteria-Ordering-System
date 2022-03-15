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

<h2 class="Estilo2">Registro</h2>
<div align="left">
<form action = "ClienteIndex.php" method = "post">
  <p>&nbsp;</p>
  <ul>
  <li><p align="left">Matricula:</p></li>
   <input type = "text" name = "matricula" size = "20" required>
  <p>&nbsp;</p>
  <li><p>Nombre:</p></li>
  <input type = "text" name = "nombre" size = "20" required>
  <img src="images/registro.png" alt="Registro" width="237" height="256" align="right" longdesc="Imagen de registro" />
  <p>&nbsp;</p>
  <li><p>Contraseña:</p></li>
  <input type = "password" name = "pass" size = "20" required>
  <p>&nbsp;</p>
  <li><p>Correo Electronico:</p></li>
  <input type = "text" name = "email" placeholder="ejemplo@ejemplo.com" size = "20" required>
  <p>&nbsp;</p>
  <li><p>Telefono:</p></li>
  <input type = "text" name = "tel" size = "20" required>
  </ul>
  <p>&nbsp;</p>
  <input type = "submit" name = "iniciar" value = "Registrarse" required>
  <p> <br />
      <br />
      <br />
  </p>
</form>
  <p>*Complete el registro para formar parte de nuestro sistema..</p>
</div>
<h2 class="Estilo2">&nbsp;</h2>
</div>

<!--
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
<h2>Archives</h2>
<ul>
<li><a href="#">January 2007</a></li> 
<li><a href="#">February 2007</a></li> 
</ul>
</div>
-->
<div style="clear: both;"> </div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>