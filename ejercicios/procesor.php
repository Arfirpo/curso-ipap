<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $n1 = 9;
            $n2 = 8;
            $operacion = "+";

            switch($operacion){
                case "+": $resultado = $n1 + $n2; break;
                case "-":  $resultado = $n1 - $n2; break;
                case "*":  $resultado = $n1 * $n2; break;
                case "/":  $resultado = $n1 / $n2; break;
                default: echo "no corresponde"; break;
            }
            echo("El resultado de la operación es: $resultado; se obtiene de sumar $n1 y $n2")
        ?>
    </p>
</body>
</html>
