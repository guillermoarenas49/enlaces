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
		<div class="titulo" align="center">Grupos de Materias a Cursar</div>
		<button class="boton"><a href="../index.html">Cerrar Sesion<a/></button>
	</header>

	<div class="table-conteiner">
	<table align="center" cellpadding="10" border="1">
		<tr align="center">
			<th>Semestre</th>
			<th>Materia</th>
			<th>Profesor</th>
			<th>Enlace</th>
		</tr>

		<?php
			include ("conexion.php");
			$link = conectarse();

			$ests = mysqli_query($link, "SELECT * FROM materias");
			$num = 1;

			while ($fila = mysqli_fetch_array($ests)) {
				$id = $fila['id'];
		?>

		<tr align="center">
			<td><?php echo $fila['semestre']; ?></td>
			<td><?php echo $fila['materia']; ?></td>
			<td><?php echo $fila['profesor']; ?></td>
			<td><a href="<?php echo $fila['enlace']; ?>" target="_blank" id="link"><?php echo $fila['enlace']; ?><a/></td>
		</tr>

		<?php } ?>
	</table>
	</div>

</body>
</html>