<?php 
include ("conexion.php");
$link = conectarse();

	$usuario= $_POST['usuario'];
	$clave= $_POST['clave'];

	$consulta = "SELECT * FROM cuentas WHERE usuario= '$usuario' AND clave= '$clave' ";
	$respuesta= mysqli_query($link, $consulta);


	$fila = mysqli_fetch_array($respuesta);

	if ($fila['id-cargo']==1) {
		header("location:admin.php");
	}
		
	if ($fila['id-cargo']==2) {
		header("location:estud.php");

	}else{
		
	echo '<script language="javascript">alert("El Usuario o Clave es incorrecto");</script>';
	echo "<script>location.href='../index.html';</script>";		
	}


?>