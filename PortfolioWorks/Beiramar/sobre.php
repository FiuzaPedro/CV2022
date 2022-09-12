<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/sobre.css">
</head>
<body>
    <?php 
        include ("header.php");

                
    ?>
        
    <div class="content animated fadeInLeftBig" id="sobre">
    <h1>Sobre nós</h1>
    <?php
    //var_dump($ligacao);
        $consultaSobre = "SELECT * FROM sobre WHERE sobre.id_sobre=1";
        $resultadoSobre = mysqli_query($ligacao, $consultaSobre) or trigger_error("Query Failed! SQL: $resultadoSobre - Error: ".mysqli_error($ligacao), E_USER_ERROR);
        
        if ($resultadoSobre)  {
            while ($row = mysqli_fetch_assoc($resultadoSobre)) {
        echo "<h4 class='h4Sobre'>" . utf8_encode($row['titulo']) . "</h4>";
        echo "<p class='pContent'>" . utf8_encode($row['texto']) .
        "</p>";
        for ($i=0; $i < 8; $i++) { 
        echo "<br>";
        } //end for
    }   //end while
        } //end if
        
                    
     ?>
    </div>
    <?php
    include ("footer.php");
    ?>
    
    </div>
</body>
</html>