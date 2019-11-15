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
    
    $estado = "Viudo";

    switch($estado){
        case "Soltero":
            print "Lo invitamos a un viaje por el Amazonas";
        break;
        case "Casado":
            print "Lo invitamos a un viaje por el Caribe";
        break;
        case "Divorciado":
            print "Lo invitamos a un viaje por Las Vegas";
        break;
        case "Viudo":
            print "Lo invitamos a un viaje por Grecia";
        break;
    }
    
    ?>

</body>
</html>