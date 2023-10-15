<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/estilos.css">
        <title>Calculadora-Resultados</title>
    </head>
    <body>
        <div class="container">
            <header>
                <!-- banner provincia -->
                <img class="header__banner" src="./assets/imagenes/banner.png" alt="">
                <!-- titulo -->
                <h1 class="header__title">Resultados</h1>
            </header>
            <main class="form-container">
                <div class="card">
                    <p class="result">
                        <?php
                            $num1 = intval($_POST["value1"]);
                            $num2 = intval($_POST["value2"]);
                            $operacion = $_POST["operation"];
                            switch($operacion){
                                case "+":
                                    $resultado = $num1 + $num2;
                                    $opr = "suma";
                                    break;
                                case "-":
                                    $resultado = $num1 - $num2;
                                    $opr = "resta";
                                    break;
                                case "*":
                                    $resultado = $num1 * $num2;
                                    $opr = "multiplicación";
                                    break;
                                case "/":
                                    $resultado = $num1 / $num2;
                                    $opr = "división";
                                    break;
                                default: echo("la operación no existe");
                            };
                        ?>
                        El resultado de tu <span><?= $opr ?></span> entre <span><?=$num1 ?></span> y <span><?=$num2 ?></span> es: <span class="result__number"><?= $resultado ?></span>
                    </p>
                    <button type="submit" class="page__button">
                    <a href="./clase-3.html">Volver</a>
                    </button>
                </div>
            </main>
            <footer>
                <p>Autor: Firpo Agustín</p>
                <p id="fecha-actual"><?php echo date('Y-m-d'); ?></p>
        </footer>
        </div>
    </body>
</html>