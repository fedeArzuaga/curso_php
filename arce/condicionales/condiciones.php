<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condiciones</title>
</head>
<body>
    
    <?php
    
    $edad = 65;

    if( $edad >= 40 ){
        print "Tas re viejo che";
    }else if( $edad >= 30 ){
        print "Sos todo un hombrecito papa, pasa";
    }else if( $edad >= 18 ){
        print "Estas en tu mejor momento";
    }else{
        print "Vos no pibe, sos un niño";
    }
    
    ?>

</body>
</html>