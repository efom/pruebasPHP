<?php  
    if(isset($_POST["enviar"])){
        $presupuesto = $_POST["Presupuesto"];

        print "Presupuesto para las distintas áreas del hospital <br><br>";

        print "Presupuesto ginecologia ".($presupuesto*0.4)." <br><br>";
        print "Presupuesto traumatología ".($presupuesto*0.3)." <br><br>";
        print "Presupuesto pediatría ".($presupuesto*0.3)." <br><br>";

    }
?>