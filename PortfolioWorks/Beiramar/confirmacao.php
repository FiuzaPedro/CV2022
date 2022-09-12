<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/reservas.css">
</head>
<body>
    <?php 
        include ("header.php");                
    ?>
        
    <div class="content animated rotateInUpLeft" id="reservas">
        <h1>Reservas</h1>
        <?php
        
        $nomeprato = $_SESSION['post_data']['nomeprato'];
        $precoprato = $_SESSION['post_data']['precoprato'];
        $quantidade = $_SESSION['post_data']['quantidade'];

        $contatotal = 0;
        $nomedospratos ="";
        foreach ($quantidade as $keyquant => $valuequant) {
            //echo "<p class='pContent'>" .  $valuequant . "<br>" . $keyquant . "</p>" ;
            if ($valuequant != "" ) {
                $nomedospratos .= utf8_encode($nomeprato[$keyquant] . " || ");
                $contatotal += $quantidade[$keyquant] * $precoprato[$keyquant];                
            }            
        }        
       
        $nome = $_SESSION['post_data']['resNome'];        
        $telefone = $_SESSION['post_data']['resTelefone'];
        $mail = $_SESSION['post_data']['resMail'];
        $data = $_SESSION['post_data']['resData'];
        $horas = $_SESSION['post_data']['resHora'];
        $pessoas = $_SESSION['post_data']['resPessoas'];        
        $obs = $_SESSION['post_data']['observacoes'];

        $data = date('Y-m-d', strtotime($data));                
       
        $sql = "INSERT INTO reservas (nome, telefone, mail, hora, datas , pessoas, observacoes, pratos, conta)
        VALUES ( '$nome', '$telefone', '$mail' , '$horas' , '$data', $pessoas, '$obs', '$nomedospratos', '$contatotal' )";
        
        if ($ligacao->query($sql) === TRUE) {    
            echo "<p class='pContent'>Confirmação efectuada! Obrigado!</p>";
        } else {
            echo "Erro: " . $sql . "<br>" . $ligacao->error;
        }
        
        
        unset($_SESSION['post_data']);        
        ?>
                
    </div>



















    
    <?php
    include ("footer.php");
    // remove all session variables
    session_unset(); 

    // destroy the session 
    session_destroy();
    ?>
    
    </div>
</body>
</html>