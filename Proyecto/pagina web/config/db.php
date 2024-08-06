<?php
function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '', 'gym');
    if (!$db) {
        echo "Fallo la conexión";
    }
    return $db;
}
