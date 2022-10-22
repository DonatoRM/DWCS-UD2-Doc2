<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="application-name" content="Ejercicio 2.2.6." />
        <meta name="description" content="Boletín 2 de la UD2 de Características del lenguaje PHP" />
        <meta name="keywords" content="html,css,php" />
        <meta name="author" content="Donato Ramos Martínez" />
        <title>Ejercicio 2.2.6.</title>
        <link rel="stylesheet" type="text/css" href="./css/ejercicio2-2-6.css" media="screen" />
    </head>
    <?php
    session_start();
    if (!isset($_SESSION["mySession"])) {
      $_SESSION["mySession"] = [];
    }
    ?>
    <body>
        <header>
            <h1>Ejercicio 2.2.6 - Características del lenguaje PHP</h1>
            <hr />
        </header>
        <main>
            <section>
                <form
                    name="formularioPrincipal"
                    method="post"
                    action="<?php echo $_SERVER["PHP_SELF"]; ?>"
                    target="_self"
                >
                    <label for="idPalabra">Introduzca una palabra:</label>
                    <input type="text" name="palabra" id="idPalabra" required />
                    <input type="submit" name="enviar" value="Aceptar" />
                </form>
            </section>
            <section>
                <?php if (isset($_POST["enviar"])) {
                  $palabra = trim($_POST["palabra"]);
                  if ($palabra != "") {
                    if (!in_array($palabra, $_SESSION["mySession"])) {
                      $_SESSION["mySession"][] = $palabra;
                    }
                    foreach ($_SESSION["mySession"] as $valor) {
                      echo "<p>$valor</p>";
                    }
                  }
                } ?>
            </section>
        </main>
        <footer>
            <hr />
            <small>&copy; 2021 - Ejercicios de la unidad 2 - Características del lenguaje PHP - DWES</small>
        </footer>
    </body>
</html>
