<!DOCTYPE html>
<?php function conversor(float $grados, string $tipo): float
{
    $resultado;
    switch ($tipo) {
        case 'C-F':
            $resultado = 32 + $grados * (9 / 5);
            break;
        default:
            $resultado = ($grados - 32) * (5 / 9);
    }
    return $resultado;
} ?>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="application-name" content="Ejercicio 2.2.3." />
        <meta name="description" content="Boletín 2 de la UD2 de Características del lenguaje PHP" />
        <meta name="keywords" content="php" />
        <meta name="author" content="Donato Ramos Martínez" />
        <title>Ejercicio 2.2.3.</title>
        <link rel="stylesheet" type="text/css" href="./css/ejercicio2-2-3.css" media="screen" />
    </head>
    <body>
        <header>
            <h1>Ejercicio 2.2.3 - Características del lenguaje PHP</h1>
            <hr />
        </header>
        <main>
            <section>
                <form name="seleccionarTipo" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_self">
                    <select name="tipo" id="idTipo">
                        <option value="C-F" selected>Grados Centígrados a Fahrenheit</option>
                        <option value="F-C">Grados Fahrenheit a Centígrados</option>
                    </select>
                    <input type="number" name="grados" id="idGrados" required/>
                    <input type="submit" name="enviar" value="Convertir" />
                </form>
            </section>
            <section>
                <?php if (isset($_POST['enviar'])) {
                    $tipo = $_POST['tipo'];
                    $grados = floatval($_POST['grados']);
                    $resultado = conversor($grados, $tipo);
                    $resultado = sprintf('%.1f', $resultado);
                    if ($tipo === 'C-F') {
                        echo "<p>$grados grados Centígrados = $resultado grados Fahrenheit</p>";
                    } else {
                        echo "<p>$grados grados Fahrenheit = $resultado grados Centígrados</p>";
                    }
                } else {
                } ?>
            </section>
        </main>
        <footer>
            <hr />
            <small>&copy; 2021 - Ejercicios de la unidad 2 - Características del lenguaje PHP - DWES</small>
        </footer>
    </body>
</html>
