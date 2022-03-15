<?php session_start();
	$mat = $_REQUEST['matricula'];
	$pas = $_REQUEST['pass'];
	
	$link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "cafeteria");
	
	$result = mysqli_query($link,"select * from usuario where matricula = $mat");
	if($row = mysqli_fetch_array($result)){
		if(($row[2] == $pas) && ($row[0] == $mat)){
			$_SESSION['k_user'] = $mat;
			$_SESSION['k_tipo'] = $row[5];
			if($row[5] == 0){
				echo " Cliente";
				header("Location: ClienteIndexSesion.php");
			}else{
				header("Location: AdminInventario.php");
			}
		}else{
			header("Location: errorLogin.php");
		}
	}else{
		header("Location: errorLogin.php");
	}
	
?>