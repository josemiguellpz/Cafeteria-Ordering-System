<?php
	$producto = $_REQUEST['producto'];
	
	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"cafeteria");
	$result = mysqli_query($link,"delete from producto where producto = '$producto'");
	
	header("Location: AdminBajaR.php");
?>