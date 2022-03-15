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
<li><a href="Clienteindex.php">Inicio</a></li>
<li><a href="ClienteMenu.php">Consultar Menu</a></li>
<li><a href="ClienteHistorial.php">Historial Pedidos</a></li>
<li><a href="EstadoPedido.php">Estado del pedido</a><li>
<li><a href="ClienteContacto.php">Contacto</a></li>
<li><a href="Salir.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="right"> 

<h2 class="Estilo2">Detalles del pedido</h2>
<div align="left">

<form action="ClienteProgramaPedido.php" method="POST">

<?php session_start(); 
    $usuario = $_SESSION['k_user'];
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"cafeteria");
    //Recibe lo seleccionado en Realizar Pedido
    
    $pedido = $_REQUEST['pedido'];
    $_SESSION['pedidos'] = $pedido;

    $n = count ($pedido);
    for($i = 0; $i<$n; $i++){
        echo"<div id='lista1'>";
            echo"<ul>";
                echo "<li>$pedido[$i]</li>";
            echo"</ul>";
        echo"</div>";
        $result = mysqli_query($link,"select precio from producto where producto = '$pedido[$i]'");
        $row = mysqli_fetch_array($result);
        $array[$i] = $row[0];
    }
    $total = 0;
    for($i = 0; $i<count($array); $i++)
        $total = $total + $array[$i];
    
    echo "<h2><br>Total a pagar: $$total </h2>";
    
    echo"<label for='programar'><h2>¿Cuando deseas que se entregue tu pedido?</h2></label> <br>";
    echo"<input type='date' id='programar' name='programa_pedido' min='2019-11-21' max='2019-12-31'>";
    
    
?>  
<br><br>
<input type="submit" name="Programa" value="Confirmar pedido">
</form>

</div>
<h2 class="Estilo2">&nbsp;</h2>
<p>&nbsp;</p>
</div>

<div style="clear: both;"><img src="images/detalle.png" alt="" width="199" height="189" /> </div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>