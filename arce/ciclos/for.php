<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Ciclo for (Mi favorito xD)</h1>

    <ul>
    <?php for( $i = 0; $i < 10; $i++ ){ ?>
        <li>El valor de i es: <?php echo $i ?></li>
    <?php } ?>
    </ul>

    <ul>
    <?php for( $i = 10; $i > 0; $i-- ){ ?>
        <li>El valor de i es: <?php echo $i ?></li>
    <?php } ?>
    </ul>

    <ul>
    <?php for( $i = 10, $a = 0; $i > 0; $i--, $a++ ){ ?>
        <li>Mientras valor de i es: <?php echo $i ?>, el valor de a es: <?php echo $a ?></li>
    <?php } ?>
    </ul>

</body>
</html>