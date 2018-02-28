<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Presupuesto</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Presupuesto</h2>
	<form class="formulario" action="" id="formulario" method="post">
	<div>
		<div>
			<label for="Presupuesto">Monto presupuestal</label></br>
			<input type="text" name="Presupuesto" placeholder="Presupuesto" required /></br>
		</div></br>
		<button class="submit" name="enviar" type="submit">Enviar</button></br>
	</div>
	</form>

	<br><br><br>

	<center>
		<?php  
	        if(isset($_POST["enviar"])){
	            $presupuesto = $_POST["Presupuesto"];

	            print "Presupuesto ginecologia ".($presupuesto*0.4)." <br><br>";
	            print "Presupuesto traumatología ".($presupuesto*0.3)." <br><br>";
	            print "Presupuesto pediatría ".($presupuesto*0.3)." <br><br>";

	        }
	    ?>
	</center>
</body>
</html>