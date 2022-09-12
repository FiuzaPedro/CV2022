<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/staff.css">
</head>
<body>    
    <?php // onde faço as queries para buscar o staff da base de dados
        include ("header.php");
        $consulta = "SELECT * FROM staff";
        
        $resultadoStaff = mysqli_query($ligacao, $consulta);

    ?>
        
    <div class="content animated zoomIn" id="staff">
        <h1>Staff content</h1>
        <p class="pContent">
            <b>Conheça a nossa equipa de trabalho e desfrute da nossa companhia!</b>            
            <?php 
            
            echo "<table>";
            while ($row = mysqli_fetch_assoc($resultadoStaff)) {
                echo "<tr>";
                echo "</tr>";  
            echo "<td>" . utf8_encode($row['nome']) . '</td>' .            
            "<td>" . utf8_encode($row['funcao']) . '</td>' .
            "<td>" . utf8_encode($row['descricao']) . "</td>" .
            "<td>" . "<a href='" .
            $row['foto'] . "' class='flipLightBox'><img class='imgStaff' src='" .
            $row['foto'] . "'><span>Teste lightbox</span></a>"; 
            "</td>";            
            } //end while   
            echo "</table>";
            
            ?>
        </p>

        <!--<a href="https://placeholder.com"><img src="http://via.placeholder.com/250x250"></a>-->
        
    </div>
    <?php
    include ("footer.php");
    ?>
    
    </div>
    <script type="text/javascript" src="fliplightbox/fliplightbox.min.js"></script>
    <script type="text/javascript">$('body').flipLightBox()</script>
</body>
</html>