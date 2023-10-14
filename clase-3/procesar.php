<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/styles.css">
        <title>Procesamiento</title>
    </head>
    <body>
        <?php 
            $nombre = ucfirst($_POST["nombre"]);
            $apellido = ucfirst($_POST["apellido"]);
            $nivel = ucfirst($_POST["nivel-estudios"]);
            $comentario = $_POST["comentarios"];
        ?>
        <main class="page-container">
            <h1 class="page__welcome">Bienvenido <?= $nombre ?> <?= $apellido ?>!</h1>
            <p class="page__study-level">Tu nivel de estudios es: <?= $nivel ?></p>
            <p class="page__coment">Comentaste: <?=$comentario?></p>
            <button type="submit" class="page__button">
                <a href="./clase-3.html">Volver al formulario</a>
            </button>
        </main>
    </body>
</html>