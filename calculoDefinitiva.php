<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Calculo definitiva</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php  
		if(isset($_POST["definitiva"])){
			$nota1 = $_POST["nota1"];
			$nota2 = $_POST["nota2"];
			$nota3 = $_POST["nota3"];
			$nota4 = $_POST["nota4"];
			$nombre = $_POST["nombre"];
		
		echo $nombre.": " .(($nota1+$nota2+$nota3+$nota4)/4);
		}
	?>
</body>
</html>