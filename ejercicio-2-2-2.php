<!DOCTYPE html>
<?php function calculoTarot(int $dia, int $mes, int $anho): int
{
    $suma = 0;
    for ($i = 0; $i < strlen($dia); $i++) {
        $letra = substr($dia, $i, 1);
        $suma = $letra + $suma;
    }
    for ($i = 0; $i < strlen($mes); $i++) {
        $letra = substr($mes, $i, 1);
        $suma = $letra + $suma;
    }
    for ($i = 0; $i < strlen($anho); $i++) {
        $letra = substr($anho, $i, 1);
        $suma = $letra + $suma;
    }
    $suma = (string) $suma;
    $sumaTotal = 0;
    for ($i = 0; $i < strlen($suma); $i++) {
        $letra = substr($suma, $i, 1);
        $sumaTotal = $letra + $sumaTotal;
    }
    return $sumaTotal;
} ?>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="application-name" content="Ejercicio 2.2.2." />
        <meta name="description" content="Boletín 2 de la UD2 de Características de lenguaje PHP" />
        <meta name="keywords" content="php" />
        <meta name="author" content="Donato Ramos Martínez" />
        <title>Ejercicio 2.2.2.</title>
        <link rel="stylesheet" type="text/css" href="./css/ejercicio2-2-2.css" media="screen" />
    </head>
    <body>
        <header>
            <h1>Ejercicio 2.2.2 - Características del lenguaje PHP</h1>
        </header>
        <main>
            <section>
                <hr>
                <form name="formularioTarot" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" target="_self">
                    <p>
                        <label for="idFecha">Fecha de nacimiento:</label>
                        <input type="date" name="fechaNacimiento" id="idFecha" />
                        <input type="submit" name="enviar" value="Aceptar" />
                    </p>
                </form>
            </section>
            <section id="resultado">
                <?php if (isset($_POST['enviar'])) {
                    $fechaNacimiento = $_POST['fechaNacimiento'];
                    if (!empty($fechaNacimiento)) {
                        $arrayFecha = explode('-', $fechaNacimiento);
                        $anho = $arrayFecha[0];
                        $mes = $arrayFecha[1];
                        $dia = $arrayFecha[2];
                        if (intval($anho) < 1900) {
                            die('Fecha introducida incorrecta');
                        }
                        if (intval($mes) < 1 || intval($mes) > 12) {
                            die('Fecha introducida incorrecta');
                        }
                        if (intval($dia) < 1 || intval($dia) > 31) {
                            die('Fecha introducida incorrecta');
                        }
                        $sumaTotal = calculoTarot($dia, $mes, $anho);
                        echo "<p>Número de tarot para la fecha $fechaNacimiento: $sumaTotal";
                    } else {
                        echo 'No se ha introducido una fecha válida';
                    }
                } else {
                } ?>
            </section>
        </main>
        <footer>
            <hr>
            <small>&copy; 2021 - Ejercicios de la unidad 2 - Características del lenguaje PHP - DWES</small>
        </footer>
    </body>
</html>
