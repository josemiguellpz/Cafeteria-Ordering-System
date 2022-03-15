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
if(!isset($_SESSION['k_user'])){
  $matricula = $_REQUEST['matricula'];
  $nombre = $_REQUEST['nombre'];
  $password = $_REQUEST['pass'];
  $email = $_REQUEST['email'];
  $telefono = $_REQUEST['tel'];
  $link = mysqli_connect("localhost","root","");
  mysqli_select_db($link,"cafeteria");
  $result = mysqli_query($link,"select * from usuario");

  $op = 0;
  while($row = mysqli_fetch_array($result)){
    $var = $row['email'];
    if($var == $email){//En caso de que el correo ya este registrado
      $op = 0;
      break;
    }
    //En caso de que el correo aun no este registrado
    $op = 1;
    if($op == 1){
        mysqli_query($link,"call registrar($matricula,'$nombre','$password','$email','$telefono')");
    }else
      echo "Este nombre de usuario ya existe";
  }
}
else if(!isset($_SESSION['k_tipo']) == 0 ){	
//Obtener los datos del cliente registrado 
header("Location: ClienteIndex.php");
}
?>
<div id="wrap">

<div id="header">
<h1>CAFETERIA</h1>
<h2>FCC BUAP </h2>
</div>

<div id="menu">
<ul>
<li><a href="Clienteindex.php">Inicio</a></li>
<li><a href="ClienteMenu.php">Consultar Menu</a></li>
<li><a href="ClienteHistorial.php">Historial Pedidos</a></li>
<li><a href="ClienteRealizaPedido.php">Realizar Pedido</a></li>
<li><a href="ClienteProgramaPedido.php">Programa Pedido</a></li>
<li><a href="ClienteContacto.php">Contacto</a></li>
<li><a href="Salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="right"> 

<h2 class="Estilo2">Bienvenido <?php echo "$nombre <br>" ?></h2>
<div align="left">A quien madruga un buen café le ayuda. ¡Ordena ahora! <br />
  <br />
  <img src="cafeteria5.jpg" alt="" width="447" height="308" /><br />
    <br />
    .</div>
<p>&nbsp;</p>
<p class="Estilo2"><span class="Estilo3">Dirección</span></p>
<p class="Estilo2">&nbsp;</p>
<p class="Estilo4">Benemerita Universidad Autonoma de Puebla.</p>
<p class="Estilo4">Facultad de Ciencias de la Computacion.</p>
<p class="Estilo4">Avenida San Claudio, Blvrd 14 Sur, Cdad. Universitaria, 72592 Puebla, Pue.  </p>
</div>

<div class="left"> 
<h2>Datos Personales </h2>
<ul>
<li class="Estilo1">Matricula: <?php echo "$matricula <br>" ?></li> 
<li class="Estilo1">Nombre: <?php echo "$nombre <br>" ?></li>
<li class="Estilo1">Correo: <?php echo "$email <br>" ?></li>
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