<!DOCTYPE html>
<html>
<head>
	<title>grupos Ing.Telecomunicaciones</title>
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../CSS/style-usuario.css">
</head>
<body>
	
	<header>
		<div class="titulo" align="center">Modificar Registro</div>
		<button class="boton"><a href="admin.php">Regresar<a/></button>
	</header>

<br><br><br>

	<?php 
		include ("conexion.php");
		$link = conectarse();

		$id = base64_decode($_GET['id']);
		$ests = mysqli_query($link, "SELECT * FROM materias WHERE id = '$id'");

		$fila = mysqli_fetch_array($ests);
	?>

		<form action="action-modificar.php" method="post" aling="center">
			<table align="center" cellpadding="10" border="1">
				 <tr>
				 	<td>Semestre</td>
				 	<td><input type="text" value="<?php echo $fila['semestre'] ?>" name="semestre2"></td>
				 </tr>
				 <tr>
				 	<td>Materia</td>
				 	<td><input type="text" value="<?php echo $fila['materia'] ?>" name="materia2"></td>
				 </tr>
				 <tr>
				 	<td>Profesor</td>
				 	<td><input type="text" value="<?php echo $fila['profesor'] ?>" name="profesor2"></td>
				 </tr>
				 <tr>
				 	<td>Enlace</td>
				 	<td><input type="text" value="<?php echo $fila['enlace'] ?>" name="enlace2"></td>
				 </tr>
				 <tr>
				 	<td>
				 		<button align="center">Guardar</button>
				 	</td>
				 </tr>
			</table>
			<input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
		</form>
</body>