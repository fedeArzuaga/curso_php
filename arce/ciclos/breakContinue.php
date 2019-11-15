<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Break y Continue</title>
</head>
<body>
    
    <?php
    
    for ($i=0; $i < 10 ; $i++) { 
        
        if( $i == 7 ){
            print "<p>Este es el numero magico: ".$i."</p>";
        break;
        }

        print "<p>El valor de i es de: ".$i."</p>";

    }

    ?><p>Fin del ciclo</p><?php
    
    ?>

</body>
</html>