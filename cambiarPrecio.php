<?php
    $producto = $_REQUEST['producto'];
    $precio = $_REQUEST['precio'];
    
	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"cafeteria");
	$result = mysqli_query($link,"UPDATE producto set precio = $precio where producto = '$producto'");
	
	header("Location: AdminBajaR.php");
?>