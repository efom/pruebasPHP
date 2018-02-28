<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Precio articulo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Precio articulo</h2>
	<form class="formulario" action="" id="formulario" method="post">
	<div>
		<div>
			<label for="articulo">Nombre de un artículo</label></br>
			<input type="text" name="articulo" placeholder="articulo" required /></br>
		</div></br>
		<div>
			<label for="clave">Clave</label>
			1<input type="radio" name="clave" value="1" checked/> 
			2<input type="radio" name="clave" value="2" /> </br>
		</div></br>
		<div>
			<label for="precio">Precio original</label></br>
			<input type="text" name="precio" placeholder="Precio original" required /></br>
		</div></br>
		<button class="submit" name="enviar" type="submit">Enviar</button></br>
	</div>
	</form>

	<br><br><br>

	<center>
		<?php  
	        if(isset($_POST["enviar"])){
	            $articulo  = $_POST["articulo"];
	            $clave     = $_POST["clave"];
	            $precio    = $_POST["precio"];	            

				print "Articulo: ".($articulo) ." <br>";
	            print "Clave: ".($clave)    ." <br>";
	            print "Precio: ".($precio)   ." <br>";

	            if($clave == 1){
	            	print "Descuento: ".($precio*0.90)." <br>";
	            }else{
					print "Descuento: ".($precio*0.80)." <br>";
	            }

	            
	            
	        }
	    ?>
	</center>
</body>
</html>