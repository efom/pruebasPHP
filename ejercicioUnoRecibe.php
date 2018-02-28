<?php  
    if(isset($_POST["notaFinal"])){
        $parcial1 = $_POST["parcial1"];
        $parcial2 = $_POST["parcial2"];
        $parcial3 = $_POST["parcial3"];
        $examen = $_POST["examen"];
        $trabajo = $_POST["trabajo"];

        print "Nota Final del estudiante <br><br>";
        $PorParciales = ((($parcial1+$parcial2+$parcial3)/3)*0.35);
        $PorExamen = ($examen*0.35);
        $PorTrabajo = ($trabajo*0.30);
        echo "Nota final: " .($PorParciales+$PorExamen+$PorTrabajo);
    }
?>