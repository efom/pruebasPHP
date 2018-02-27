<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio Uno</title>
	<link rel="stylesheet" href="">
</head>
<body>
    <h1>Notas Final</h1>
    <form action="" method="POST" accept-charset="utf-8">
        Introduzca nota del parcial 1:
        <input type="text" name="parcial1" value="" placeholder="parcial 1"><br>
        Introduzca nota del parcial 2:
        <input type="text" name="parcial2" value="" placeholder="parcial 2"><br>
        Introduzca nota del parcial 3:
        <input type="text" name="parcial3" value="" placeholder="parcial 3"><br>
        Introduzca nota del examen final:
        <input type="text" name="examen" value="" placeholder="Examen final"><br>
        Introduzca nota del trabajo final:
        <input type="text" name="trabajo" value="" placeholder="Trabajo final"><br>
        <input type="submit" name="notaFinal" value="Nota Final">
    </form>


    <?php  
        if(isset($_POST["notaFinal"])){
            $parcial1 = $_POST["parcial1"];
            $parcial2 = $_POST["parcial2"];
            $parcial3 = $_POST["parcial3"];
            $examen = $_POST["examen"];
            $trabajo = $_POST["trabajo"];

            $PorParciales = ((($parcial1+$parcial2+$parcial3)/2)*0.35);
            $PorExamen = ($examen*0.35);
            $PorTrabajo = ($trabajo*0.30);
            echo "Nota final: " .($PorParciales*$PorExamen*$PorTrabajo);
        }
    ?>
</body>
</html>

