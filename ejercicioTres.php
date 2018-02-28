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
	<form class="formulario" action="" id="formulario" method="post">
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

	<br><br><br>

	<center>
		<?php  
	        if(isset($_POST["enviar"])){
	            $nombre     = $_POST["nombre"];
	            $peso   = $_POST["peso"];
	            $estatura = $_POST["estatura"];

				$myIMC = ($peso/($estatura*$estatura));

	            print "Su indice de masa corporal es $myIMC <br><br>";

	            if($myIMC < 18.5){
	            	print "Por debajo del peso";
	            }else if($myIMC < 25){
	            	print "Saludable";
	        	}else if($myIMC < 30){
					print "Con sobrepeso";
	        	}else if($myIMC < 40){
					print "Obeso";
	        	}else if($myIMC > 40){
					print "Obesidad mórbida";
	        	}
	        }
	    ?>
	</center>

</body>
</html>