<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pago</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
	body {background:#25455e;color: #fffefe;font-family: Arial, san-serif;}

	.formulario:first-child div {width: 90%;margin: 0 auto;text-align: center;}

	.formulario:first-child div fieldset div {margin-top: 15px;}

	.formulario:first-child div fieldset input, .formulario:first-child div fieldset textarea {
	  border: 1px #00bcd4 solid;
	  border-radius: 5px;
	  padding: 6px;
	  background: rgba(0, 0, 0, .1);
	  color: #00bcd4;
	}
	.formulario:first-child div fieldset input:focus, .formulario:first-child div fieldset textarea:focus {
	  background: white;
	  color: black;
	}
	.formulario:first-child div fieldset .submit {
	  text-decoration: none;
	  padding: 12px;
	  font-weight: 600;
	  font-size: 18px;
	  color: #fff;
	  background-color: #00bcd4;
	  border-radius: 20px;
	  border: 2px solid #2196f3;
	}
	
	.formulario:first-child div fieldset .submit:hover {color: #2196f3;background-color: #fff;}

	</style>
</head>
<body>
	<form class="formulario" action="" id="formulario" method="post">
		<div>
			<fieldset>
				<h2>SALARIO</h2>
				<div>
					<label for="nombre">Nombre del vendedor</label></br>
					<input type="text" name="nombre" placeholder="Nombre" required /></br>
				</div>
				<div>
					<label for="nombre">Cantidad automoviles vendidos</label></br>
					<input type="text" name="cantidad" placeholder="Cantidad automoviles" required /></br>
				</div>
				<div>
					<label for="nombre">Precio total automoviles vendidos</label></br>
					<input type="text" name="totalVenta" placeholder="Precio total" required /></br>
				</div></br>
				<button class="submit" name="enviar" type="submit">Enviar</button></br>
			</fieldset>
		</div>
	</form>

	<br><br><br>

	<center>
		<?php  
	        if(isset($_POST["enviar"])){
	            $nombre     = $_POST["nombre"];
	            $cantidad   = $_POST["cantidad"];
	            $totalVenta = $_POST["totalVenta"];

				$valorFinalPagar = (450000+(50000*$cantidad)+($totalVenta*0.05));

	            print "El salario final del vendedor $nombre es $valorFinalPagar$";
	        }
	    ?>
	</center>

</body>
</html>