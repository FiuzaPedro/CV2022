<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/contactos.css">
</head>
<body>
    <?php 
        include ("header.php");
        $consultaMapa ="SELECT mapa.mapa FROM mapa WHERE mapa.id_mapa = 2";
        $resultadoMapa = mysqli_query($ligacao, $consultaMapa);
    ?>
        
    <div class="content animated fadeIn" id="contactos">
        <h1>Contactos</h1>
        <div class="formWrapper">

            <div id="resultado">
                <?php 
                
                                
                if (isset($_POST['nome']) && isset($_POST['mail']) && isset($_POST['mensagem']) ) {
                    $nome = $_POST['nome'];
                    $mail = $_POST['mail'];
                    $mensagem = $_POST['mensagem'];

                    $enviaContacto = "INSERT INTO contacto (nome, mail, assunto) 
                VALUES ('$nome', '$mail', '$mensagem')";

                    $ligacao->query($enviaContacto);
                };
                
                
                
                ?>                
            </div> <!-- end div resultado -->

            <form action="contactos.php" method="post" class="frmContacto">
                <label for="nome">Nome:</label><br>    
                <input type="text" name="nome" id="nome" required maxlength="30">

                <label for="mail">Email:</label>
                <input type="mail" name="mail" id="mail" required maxlength="40">

                <label for="mensagem">Assunto:</label>
                <textarea name="mensagem" required id="mensagem" rows="5" placeholder="Insira texto..."></textarea>

                <input id="submeter" type="submit" value="Enviar">
            </form>
        </div> <!-- end form wrapper -->
        <hr>
        <div id="mapa">
            <?php 
            while($row = mysqli_fetch_assoc($resultadoMapa)) {                
                echo "<iframe src='" . $row['mapa'] . "' width='100%' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>";
            }
            ?>
        </div>
                
    </div> <!-- end div contactos -->
    <?php
    include ("footer.php");
    ?>
    
    </div>


</html>