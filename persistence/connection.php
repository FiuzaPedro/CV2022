<?php

$servidor = "localhost";
$username = "root";
$password = "admin";
$basedados = "portfolio";

$ligacao = new \mySQLi($servidor, $username, $password, $basedados);

if (!$ligacao) {
    die('Coneção falhou! Razão: ' . $conn->connect_error);
}
// mysqli_select_db( $ligacao, $basedados);

?>