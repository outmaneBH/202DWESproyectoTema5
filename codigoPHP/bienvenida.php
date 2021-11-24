<!DOCTYPE html>
<html>
    <title>Bienvenida</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body class="w3-container w3-auto">


        <div class="w3-panel w3-green">
            <h3>Success!</h3>
            <?php
            echo "<p>Hola {$_SERVER['PHP_AUTH_USER']}.</p>";
            echo "<p>estas usando  {$_SERVER['PHP_AUTH_PW']} como su contraseña.</p>";
            ?>
        </div>

    </body>
</html>

