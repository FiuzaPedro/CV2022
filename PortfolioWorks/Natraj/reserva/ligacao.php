<?php 
$servidor = "localhost";
$username = "pedrofiu_Fiuza";
$password = "lolada";
$basedados = "pedrofiu_natraj";    

// Create connection
    $ligacao = new mysqli($servidor, $username, $password, $basedados);
    
    if (!$ligacao) {
        die("Coneção falhou! Razão: " . $conn->connect_error);
    } 
    
    $ligacao->set_charset("utf8");
?>