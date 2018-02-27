<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Sintaxis PHP</title>
		<link rel="stylesheet" href="">
	</head>
<body>
	<br>
    Ejemplo de Ciclo<br>
	<?php
	echo "Codigo PHP con uso FOR <br>";
	for ($i=2, $max = 10; $i < $max; $i++) {
		if(($i % 2) == 0){
			echo "Linea " . ($i)."<br>";
		}
	}
	?>
 

	<br><br>
    <?php
    $i = 1;
    do{
        echo "El valor de i es ".$i."<br>";
        $i++;
    }while($i<=5)
    ?>

    <br><br>
    uso de switch<br>
    <?php  
    	$dia = 7;
    	switch ($dia) {
    		case 1:
    			echo "El día es Lunes";
    			break;
    		case 2:
    			echo "El día es Martes";
    			break;
    		case 3:
    			echo "El día es Miercoles";
    			break;
    		case 4:
    			echo "El día es Jueves";
    			break;
    		case 5:
    			echo "El día es Viernes";
    			break;
    		case 6:
    			echo "El día es Sabado";
    			break;
    		case 7:
    			echo "El día es Domingo";
    			break;
    		case 8:
    			echo "La variable contiene otro valor";
    			echo "distinto a los dias de la semana";
    			break;
    	}

    ?>

    <br><br><br>
    uso de if<br>
    <?php  
    echo "Código PHP con uso condicional <br>";
    $a = 8;
    $b = 1; 
    if($a < $b)
    	echo "$a es menor a $b";
    else
    	echo "$a no es menor a $b";

    ?>

    <br><br><br>
    formularios<br>
    Introduzca su nombre
    <form action="" method="get" accept-charset="utf-8">
        <input type="text" name="nombre" value="" placeholder=""><br>
        <input type="submit" name="form" value="enviar">
    </form>
</body>
</html>

