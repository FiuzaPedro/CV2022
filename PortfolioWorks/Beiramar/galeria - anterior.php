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
        $resultado = mysqli_query($ligacao, $consulta);

    ?>
    <div id="lightbox">
        <button id="close" class="close">Close</button>        
    </div>
    
    <div class="content animated rollIn" id="galeria">
        <h1 class="hGaleria">Galeria</h1>
        <?php 
        
        $imgPath = "img/galeria/";
        $imagens = glob($imgPath . "*.*"); // alternativa é scandir (pesquisar)
        $legendas =  file('legendas.txt'); //array do ficheiro das legendas        
        echo "<ul id='ulGaleria'>";

        foreach($imagens as $key => $imagem) {            
            $ids_img = explode('.', $imagem);
            $id_img = explode('/', $ids_img[0]);
            $id = $id_img[2];
            echo "<div class='divGalerias'><img id='$id' src= $imagem  />";
            echo "<p class='pCaption'>" . $legendas[$key] . "</p></div>";
        }

        echo "</ul>";

        /*
        echo "<ul id='ulGaleria'>";
        for ($indice = 1; $indice < 13 ; $indice++) {   
            //$srcImg = sprintf('%02d', $indice);
            echo "<img id='foto$indice' src='img/foto$indice.jpg' /> ";
        }
        echo "</ul>";
        */
        ?>
        
    </div>
    <div class="clear"></div>  
    <div class="separador"></div>
    
    <?php
    include ("footer.php");
    ?>
</body>
</html>