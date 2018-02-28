<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Indice de masa corporal</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Indice de masa corporal</h2>
	<form class="formulario" action="ejercicioTresRecibe.php" id="formulario" method="post">
	<div>
		<div>
			<label for="nombre">Nombre Paciente</label></br>
			<input type="text" name="nombre" placeholder="Nombre Paciente" required /></br>
		</div>
			<div>
				<label for="peso">Peso en Kilogramos</label></br>
				<input type="text" name="peso" placeholder="Peso en Kilogramos" required /></br>
			</div>
		<div>
			<label for="estatura">Estatura en metros</label></br>
			<input type="text" name="estatura" placeholder="Estatura en metros" required /></br>
		</div></br>
		<button class="submit" name="enviar" type="submit">Enviar</button></br>
	</div>
	</form>


</body>
</html>