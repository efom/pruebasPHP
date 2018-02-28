<?php  
    if(isset($_POST["enviar"])){
        $articulo  = $_POST["articulo"];
        $clave     = $_POST["clave"];
        $precio    = $_POST["precio"];              

        Print "Datos del producto <br><br>";
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