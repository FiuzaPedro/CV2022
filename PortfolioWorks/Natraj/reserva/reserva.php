<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Natraj</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<div class="divConfirm">

<?php 
    require "ligacao.php";   
        
        //insert script  
        $tipo = $ligacao -> real_escape_string($_POST['tipo']);
        $datas = $_POST['datas'];
        $numPessoas = $_POST['numPessoas'];
        $nome = $ligacao -> real_escape_string($_POST['nome']);
        $mail = $_POST['email'];
        $telefone = $_POST['telefone'];       
       

        if (
            isset($_POST['tipo']) &&
            isset($_POST['datas']) &&
            isset($_POST['numPessoas']) &&
            isset($_POST['nome']) &&
            isset($_POST['email']) && 
            isset($_POST['telefone']) ) {   
                            
/*
            $reservar = "INSERT INTO reservas (Tipo, `Data`, NumeroPessoas, Nome, Email, Telefone) 
        VALUES ('$tipo', '$datas', '$numPessoas', '$nome', '$mail', '$telefone'  )";    

            $ligacao->query(utf8_encode($reservar));
            echo '<p class="pConfirma">Reserva foi pedida! Aguarde por email de confirmação!</p><button id="btnConfirm">Ok</button>'; */
        }
        else {
            echo '<p class="pConfirma">' . $nome . " " . $numPessoas . " " . $datas . " " . $telefone 
            . " " . $mail . " " . $tipo . '<br><strong>Erro na reserva</strong>
            <br><br><button id="btnConfirm">Ok</button></p>
            ' ; 
            
        }
    ?>

</div>

    
    <script>
        let confirmar = document.getElementById("btnConfirm");
        confirmar.addEventListener("click", back)
        function back() {            
            window.open("../index.html", "_self");        
        }

    </script>
    
</body>
</html>

    