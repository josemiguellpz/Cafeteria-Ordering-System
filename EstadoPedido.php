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

<h2 class="Estilo2">Pedido confirmado</h2>
<div align="left">
  <p>
    <?php session_start();
      if(!isset($_SESSION['k_user']))
        header("Location: index.php");
      else if(!isset($_SESSION['k_tipo']) == 0 ){	
        $usuario = $_SESSION['k_user'];
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"cafeteria");
        
        $result=mysqli_query($link,"select * from pedido where matricula = $usuario");
        
        echo"<table>";
        echo "<tr>
            <th>Número de pedido</th> <th>Matrícula</th> <th>Fecha pedido</th><th>Fecha Entrega</th><th>Total</th><th>Descripción</th>
            <th>Estado</th></tr>";
        while($row = mysqli_fetch_array($result))
        {
          $id = $row['id_pedido'];
          $fp = $row['fecha_pedido'];
          $fe = $row['fecha_entrega'];
          $total = $row['total_pagar'];
          $desc = $row['descripcion'];
          $estado = $row['estado'];
          if($estado == 0)
            $e = 'En preparación';
          else
            $e = 'Pedido Listo';
            if($row['recoger']==0){
                echo"<tr>
                  <td>$id</td> <td>$usuario</td> <td>$fp</td> <td>$fe</td> <td>$$total</td> <td>$desc</td> <td>$e</td>
                    </tr>";
            }
        }
        echo"</table>";
      }
    ?>
  </p>
</div>
<h2 class="Estilo2">&nbsp;</h2>
<p>&nbsp;</p>
</div>

<div style="clear: both;"><img src="images/programa.png" alt="" width="209" height="195" /></div>

</div>

<div id="footer"> Derechos Reservados.
</div>

</div>

</body>
</html>