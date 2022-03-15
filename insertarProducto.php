<?php
	$producto = $_REQUEST['producto'];
	$tipo = $_REQUEST['tipo'];
	$precio = $_REQUEST['precio'];
	$cantidad = $_REQUEST['cantidad'];
	
	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"cafeteria");
	$result = mysqli_query($link,"insert into producto(producto, tipo_producto, precio, cantidad) values('$producto', '$tipo', $precio, $cantidad)");
	
	header("Location: AdminAltaR.php");
	
?>