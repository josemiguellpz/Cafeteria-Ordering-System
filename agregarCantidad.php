<?php
	$producto = $_REQUEST['producto'];
	$cantidad = $_REQUEST['cantidad'];
	
	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"cafeteria");
	$result = mysqli_query($link,"UPDATE producto set cantidad = cantidad + $cantidad where producto = '$producto'");
	
	header("Location: AdminAltaR.php");
	
	/*
	FALTA TRIGGER
	
	CREATE TRIGGER modificarCantidad BEFORE INSERT ON producto
    FOR EACH ROW
    BEGIN
		New.cantidad = New.cantidad + 



		IF NEW.año_nacimiento < 2001 THEN
			SET NEW.tipo_servicio='Bola Negra'; 
		ELSE 
			SET NEW.tipo_servicio='Bola Blanca';
		END IF;
    END;
	//
	
	*/
?>