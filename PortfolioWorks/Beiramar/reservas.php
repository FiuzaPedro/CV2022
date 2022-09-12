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
        $consulta = "SELECT * FROM ementa WHERE id_categoria <> 1 AND id_categoria <> 6";
        $resultado = mysqli_query( $ligacao, $consulta);
    ?>
        
    <div class="content animated fadeIn" id="reservas">
        <h1>Reservas</h1>
        <form action="reservas.php" method="post" id="frmReserva" class="frmReservas">
        <fieldset>
            <legend><h4>Detalhes Pessoais</h4></legend>
            <label for="resNome">Nome:</label>
            <input name="resNome" id="resNome" type="text" required maxlength="30"> 
            
            <label for="resTelefone">Telefone:</label>
            <input name="resTelefone" id="resTelefone" type="number" required maxlength="15">
            
            <label for="resMail">Mail:</label>
            <input name="resMail" id="resMail" type="mail" required>
        </fieldset>
        
        <fieldset class="fieldRes">
            <legend><h4>Detalhes da Reserva</h4></legend>
            <label for="resData">Data:</label>
            <input name="resData" id="resData" type="date" required>
            
            <label for="resHora">Hora:</label>
            <input name="resHora" id="resHora" type="time" min="12:00" max="22:00" value="12:00">
            
            <label for="resPessoas">Numero de pessoas:</label>
            <input name="resPessoas" id="resPessoas" type="number" min="2" max="100" value="2">        
        </fieldset>
                        
        <div class="foodwrapper"> 
            <h4>Ementa</h4>
            <div class="divSeparadorEmenta">                
                <h5>Prato</h5>
                <h5></h5>               
                <h5>Quantidade</h5>
                <h5>Preço</h5>
            </div>
            <hr>
            <?php
            
            $i = 0; //indice de controlo da checkbox porque tem de ter value a check
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<div class='divPratos'>                     
                    <label class='labelsFood' for='prato[]'>" . utf8_encode($row['titulo']) . "</label>
                    <input type='checkbox' class='prato'  name='prato[]' value='".$i."'> 
                    <input type='text' class='quant' name='quantidade[]' maxlength='2' disabled placeholder='Quantidade'>
                    <input type='hidden' name='nomeprato[]' value='". utf8_encode($row['titulo']) ."'>
                    <label for='precoprato[]' class='lblPreco'>". $row['preco']."€ </label>
                    <input type='hidden' name='precoprato[]' value='". $row['preco']."'>
                </div>";                
             $i++; //update do indice para as checkboxes
            }    
            
            ?>
                   
            
        </div> <!-- end foodwrapper-->
        

        <label for="observacoes"><h4>Observações</h4></label>
        <textarea name="observacoes" id="observacoes"  cols="10" rows="10" >
        </textarea>
        
        <input id="btnReserva" type="submit" value="Submeter">
        </form> <!-- end form Reserva -->

        <?php 
        // resNome resTelefone resMail resData resHora resPessoas prato quantidade observacoes 
        

        if (isset($_POST['resNome']) && isset($_POST['resTelefone']) && isset($_POST['resMail'])
         && isset($_POST['resData']) && isset($_POST['resHora'])  && isset($_POST['observacoes']) 
         && isset($_POST['nomeprato']) && isset($_POST['precoprato'])) {
            
            if (isset($_POST['prato']) && isset($_POST['quantidade'])) {

                    $prato = $_POST['prato'];                    
                    $quantidade = $_POST['quantidade'] ;
                    $nomeprato = $_POST['nomeprato'];
                    $precoprato = $_POST['precoprato'];
                    $nome = $_POST['resNome']; $telefone = $_POST['resTelefone'];
                    $mail = $_POST['resMail']; $data = $_POST['resData'];
                    $hora = $_POST['resHora'];            
                    $obs = $_POST['observacoes'];            
                    echo "<div class='divRes'>";
                    echo "<span class='fecharConfirma'>Fechar</span>";
                    echo "<h2>Reserva</h2><hr>";
                    echo "<h3>Nome:</h3> " . $nome . "<br>";
                    echo "<h3>Telefone</h3>: " . $telefone . "<br>";
                    echo "<h3>Mail:</h3> " . $mail . "<br>";
                    echo "<h3>Data:</h3> " . $data . "<br>";
                    echo "<h3>Hora:</h3> " . $hora . "<br>";
                    $total = 0;
                    foreach ($prato as $key=> $value) {
                        
                        $valor = $precoprato[$prato[$key]] * $quantidade[$prato[$key]];
                        echo "<h3>Prato: </h3> " . $nomeprato[$value] .
                         " <h3>Quantidade: </h3>" . $quantidade[$prato[$key]] . "<h3> Valor: </h3>" .
                           $valor . "€<br>" ;   
                           $total+= $valor; //somatorio do total
                    } 
                    echo "<h3>Preço total: </h3>" . $total  . "<br>" ;
                    echo "<h3>Observações:</h3> " . $obs . "<br>";
                    echo "<hr> <form action='confirmacao.php' name='frmConfirma'>
                    <input type='submit' class='Confirmar' id='confirmar' value='Confirmar'></form>";                    
                    echo "</div>";
                    $_SESSION['post_data'] = $_POST;                
                    
            } //end if ispost prato && quantidade          
        } //end if com todos os $_posts
        
        ?>
    </div>
    <?php
    include ("footer.php");
    ?>
    
    </div>
</body>
</html>