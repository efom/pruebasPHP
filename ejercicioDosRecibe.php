<?php  
    if(isset($_POST["enviar"])){
        $nombre     = $_POST["nombre"];
        $cantidad   = $_POST["cantidad"];
        $totalVenta = $_POST["totalVenta"];


		$valorFinalPagar = (450000+(50000*$cantidad)+($totalVenta*0.05));

        print "Salario del vendedor $nombre es: $valorFinalPagar$";
    }
?>
	