<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $contador = 0;
    $veces = 15;

    ?>

    <p>Se van a visualizar <?php echo $veces ?> números</p>

    <?php

    while( $contador < $veces ){ ?>

        <p>Numero: <?php echo $contador ?></p>
    
    <?php $contador++; } ?>

    <p>Fin del ciclo, el contador tiene el valor de <?php echo $contador ?></p>

</body>
</html>