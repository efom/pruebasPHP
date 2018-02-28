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
