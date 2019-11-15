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
    
    $edad = 45;

    if($edad > 40) print "<p>Tenes mas de 40 años</p>";
    else print "<p>Tenes menos de 40 años</p>";

    $a = 15;
    $b = 18;

    if( $a < $b ):
        print "<p>".$a." es menor a ".$b."</p>";
    elseif( $a > $b ):
        print "<p>".$a." es mayor a ".$b."</p>";
    else:
        print "<p>".$a." es igual a ".$b."</p>";
    endif;

    ?>

</body>
</html>