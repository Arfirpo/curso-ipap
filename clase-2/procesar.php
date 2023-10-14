<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <p class="page__result">
        <?php
            $num1 = intval($_POST["value1"]);
            $num2 = intval($_POST["value2"]);
            $operacion = $_POST["operation"];

            switch($operacion){
                case "+": 
                    $resultado = $num1 + $num2; 
                    $opr = "Suma";
                    break;
                case "-": 
                    $resultado = $num1 - $num2; 
                    $opr = "Resta"; 
                    break;
                case "*": 
                    $resultado = $num1 * $num2;
                    $opr = "Multiplicación";
                    break;
                case "/": 
                    $resultado = $num1 / $num2;
                    $opr = "División";
                    break;
                default: echo("la operación no existe");
            };
        ?>
        El resultado de tu <?= $opr ?> entre <?=$num1 ?> y <?=$num2 ?> es <strong><?= $resultado ?></strong>
    </p>
    <button type="submit">
        <a href="./calculadora.html">Volver</a>
    </button>
</body>
</html>




