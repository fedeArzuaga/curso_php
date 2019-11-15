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
    
    // Forzar los tipos de datos
    $div = 10/3;
    $entero = (int) $div;
    print $div."<br>";
    print $entero."<br>";
    
    print var_dump($div)."<br>";
    var_dump($entero);

    ?>

</body>
</html>