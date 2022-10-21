<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="application-name" content="Ejercicio 2.2.5." />
        <meta name="description" content="Boletín 2 de la UD2 de Características del lenguaje PHP" />
        <meta name="keywords" content="html,css,php" />
        <meta name="author" content="Donato Ramos Martínez" />
        <title>Ejercicio 2.2.5.</title>
        <link rel="stylesheet" type="text/css" href="./css/ejercicio2-2-5.css" media="screen" />
    </head>
    <body>
        <header>
            <h1>Ejercicio 2.2.5 - Características del lenguaje PHP</h1>
            <hr />
        </header>
        <main>
            <section>
                <?php
                $letras = [
                    'T',
                    'R',
                    'W',
                    'A',
                    'G',
                    'M',
                    'Y',
                    'F',
                    'P',
                    'D',
                    'X',
                    'B',
                    'N',
                    'J',
                    'Z',
                    'S',
                    'Q',
                    'V',
                    'H',
                    'L',
                    'C',
                    'K',
                    'E',
                ];
                $dni = trim($_POST['dni']);
                $dni = intval($dni);
                $resto = $dni % 23;
                echo "<p>DNI: $dni" . $letras[$resto] . '</p>';
                ?>
            </section>
            <a href="./ejercicio2-2-5.html" target="_self">Volver al formulario</a>
        </main>
        <footer>
            <hr />
            <small>&copy; 2021 - Ejercicios de la unidad 2 - Características del lenguaje PHP - DWES</small>
        </footer>
    </body>
</html>