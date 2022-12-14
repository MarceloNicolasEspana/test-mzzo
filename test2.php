<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $numeros = array(66,10,18,11,21,28,31,38,40,55,60,62);
        $suma1 = array($numeros[0]);

        for($i = 1; $i < count($numeros); $i++){
            $suma1 = $suma1[$i - 1] + $numero[$i];
        }
        $numeros = array_combine($suma1, $numeros);
        echo $numeros;

        $numeros2 = array(48,10,18,11,21,28,31,38,40,55,60,62);

        
    
    
    ?>
    
</body>
</html>