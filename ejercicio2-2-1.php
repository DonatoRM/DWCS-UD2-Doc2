<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="application-name" content="Ejercicio 2.2.1." />
        <meta name="description" content="Boletín 2 de la UD2 de Características del lenguaje PHP" />
        <meta name="keywords" content="php" />
        <meta name="author" content="Donato Ramos Martínez" />
        <title>Ejercicio 2.2.1.</title>
        <link rel="stylesheet" type="text/css" href="./css/ejercicio2-2-1.css" media="screen" />
    </head>
    <body>
        <header>
            <h1>Ejercicio 2.2.1 - Características del lenguaje PHP</h1>
        </header>
        <hr>
        <main>
            <section>
                <form
                    name="formularioPrincipal"
                    method="post"
                    action="<?php echo $_SERVER['PHP_SELF']; ?>"
                    target="_self"
                >
                <p>
                    <label for="idTexto">Texto</label>
                    <input type="text" name="texto" id="idTexto" size="100" />
                    <input type="submit" name="ejecutar" value="Aceptar" />
                </p>
                </form>
            </section>
            <section>
                <ol>
                <?php if (isset($_POST['ejecutar'])) {
                    $texto = trim($_POST['texto']);
                    if (!empty($texto)) {
                        $arrayTexto = str_split($texto);
                        $lugar = 0;
                        $longitud = count($arrayTexto);
                        echo '<h2>Rotaciones de texto:</h2>';
                        echo "<li>$texto</li>";
                        while ($lugar < $longitud) {
                            $letraInicial = $arrayTexto[0];
                            unset($arrayTexto[0]);
                            $arrayTexto[] = $letraInicial;
                            echo '<li>';
                            foreach ($arrayTexto as $letra) {
                                echo $letra;
                            }
                            echo '</li>';
                            $arrayTexto = array_values($arrayTexto);
                            $lugar++;
                        }
                    }
                } else {
                } ?>
                </ol>
            </section>
        </main>
        <footer>
            <hr>
            &copy; 2021 - Ejercicios de la unidad 2 - Características del lenguaje PHP - DWES
        </footer>
    </body>
</html>
