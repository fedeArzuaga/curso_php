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
    
    $total = 12345;
    $tipoCambio = 18.95;

    // Operador condicional
    $granTotal = ($tipoCambio > 0) ? $total * $tipoCambio : $total;

    print $granTotal;
    
    ?>

</body>
</html>