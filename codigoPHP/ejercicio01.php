<?php
/*
 * author: OUTMANE BOUHOU
 * Fecha: 23/11/2021
 * description: 1. Desarrollo de un control de acceso con identificación del usuario basado en la función header()
 */

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="No datos"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Has pulsado el botón Cancelar';
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 01 Tema5</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        header("Location: bienvenida.php");
        ?>        
    </body>
</html>