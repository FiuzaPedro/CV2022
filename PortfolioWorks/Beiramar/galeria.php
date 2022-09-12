<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/galeria.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <?php 
        include ("header.php");
        $consulta = "SELECT * FROM ementa";
        $resultadoGaleria = mysqli_query($ligacao, $consulta);
    ?>
    <div id="lightbox">
        <button id="close" class="close">Close</button>        
    </div>
    
    <div class="content animated rollIn" id="galeria">
        <h1 class="hGaleria">Galeria</h1>
        
        <?php                
        echo "<ul id='ulGaleria'>";        
            while ($row = mysqli_fetch_assoc($resultadoGaleria)) {
                echo "<div class='divGalerias'><img src= '" . $row['foto'] . "'  />
                <p class='pCaption'>" . utf8_encode($row['descricao'])  . "</p></div>";    
            }; //end while
        echo "</ul>";        
        ?>
        
    </div>
    <div class="clear"></div>  
    <div class="separador"></div>
    
    <?php
    include ("footer.php");
    ?>
    <script src="js/scriptGaleria.js"></script>
</body>
</html>