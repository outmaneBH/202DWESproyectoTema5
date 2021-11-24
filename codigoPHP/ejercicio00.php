<?php
/*
 * author: OUTMANE BOUHOU
 * Fecha: 23/11/2021
 * description: 0. Mostrar el contenido de las variables superglobales y phpinfo()
 */

/* usando foreach() */
echo '<h3>Mostrar el contenido de las variables superglobales:</h3>  ';
echo '<h4>Usando foreach :</4>  ';
/* El contenido de $_SERVER */

echo '<h3>Mostrar el contenido de $_SERVER :</h3>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
/* usando foreach() */
foreach ($_SERVER as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';

// El contenido de $GLOBALS
echo '<h3>Mostrar el contenido de $GLOBALS :</h3>  ';
echo '<table><tr><th>Valores</th></tr>';
foreach ($GLOBALS as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo '</tr>';
}
echo '</table>';


// El contenido de $_REQUEST
echo '<h3>Mostrar el contenido de $_REQUEST :</h3>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_REQUEST as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';


// El contenido de $_FILES
echo '<h3>Mostrar el contenido de $_FILES :</h3>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_FILES as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';


// El contenido de $_ENV
echo '<h3>Mostrar el contenido de $_ENV :</h3>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_ENV as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';


// El contenido de $_SESSION
echo '<h3>Mostrar el contenido de $_SESSION :</h3>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_SESSION as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';



// El contenido de $_POST
echo '<h3>Mostrar el contenido de $_POST :</h3>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_POST as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';


// El contenido de $_GET
echo '<h3>Mostrar el contenido de $_GET :</h3>  ';
echo '<table><tr><th>Clave</th><th>Valor</th></th>';
foreach ($_GET as $Clave => $Valor) {
    echo '<tr>';
    echo "<td>$Clave</td>";
    echo "<td>$Valor</td>";
    echo '</tr>';
}
echo '</table>';

echo phpinfo();
?>

