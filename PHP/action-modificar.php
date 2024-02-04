<?php
include ("conexion.php");
$link = conectarse();

	$id = $_POST['id'];
	$semestre = $_POST['semestre2'];
	$materia = $_POST['materia2'];
	$profesor = $_POST['profesor2'];
	$enlace = $_POST['enlace2'];

	mysqli_query($link, "UPDATE materias SET
						semestre = '$semestre',
						materia = '$materia',
						profesor = '$profesor',
						enlace = '$enlace'
					WHERE id = '$id'	
		");

echo '<script language="javascript">alert("Actualizado con exito");</script>';
echo "<script>location.href='admin.php';</script>";	
?> 