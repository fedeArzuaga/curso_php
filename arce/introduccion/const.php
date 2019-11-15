<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables y constantes</title>
</head>
<body>

    <?php 

        // Variables
        $df = 22000000;
        $guadalajara = 40000000;
        $monterrey = 14000000;
        $ciudad = "df";

        print "<p>La población de la ciudad $ciudad es de $df</p>";

        // Creamos una constante
        define("TASA_CAMBIO", 18.35); // Dato cursioso: Si le damos un tercer parametro booleano verdadero a la constante, no va a respetar el case sensitive. Si lo dejamos como esta, por defecto lo toma.
        $deuda = 13456;

        print "La tasa de cambio es de ".($deuda*TASA_CAMBIO);

    ?>  

</body>
</html>