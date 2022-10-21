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
                    action="<?php echo $_SERVER['PHP_SELF']; ?>"
                    target="_self"
                >
                    <label for="idPalabra">Introduzca una palabra:</label>
                    <input type="text" name="palabra" id="idPalabra" required />
                    <input type="submit" name="enviar" value="Aceptar" />
                </form>
            </section>
            <section>
                <p>
                    <?php if (!isset($_POST['enviar'])) {
                        function insertar(string $palabra): array
                        {
                            static $lista = [];
                            $_ENV['$lista[]'] = $palabra;
                            $devuelto = $_ENV['lista[]'];
                            return $devuelto;
                        }
                        $palabra = trim($_POST['palabra']);
                        if (strlen($palabra) !== 0) {
                            $lista = insertar($palabra);
                            foreach ($lista as $trozo) {
                                echo "<p>$trozo</p><br/>";
                            }
                        }
                    } else {
                    } ?>
                </p>
            </section>
        </main>
        <footer>
            <hr />
            <small>&copy; 2021 - Ejercicios de la unidad 2 - Características del lenguaje PHP - DWES</small>
        </footer>
    </body>
</html>
