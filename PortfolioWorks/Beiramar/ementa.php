<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante</title>    
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/ementa.css">
</head>
<body>
    <?php // onde faço as queries para buscar a ementa da base de dados
        include ("header.php");
        $consulta = "SELECT * FROM ementa";

        $consultaEntradas = "SELECT * FROM ementa INNER join
         categoria ON categoria.id_categoria = ementa.id_categoria 
         WHERE categoria.id_categoria = 1 ORDER BY ementa.titulo";
         $consultaCarne = "SELECT * FROM ementa INNER join
         categoria ON categoria.id_categoria = ementa.id_categoria 
         WHERE categoria.id_categoria = 2 ORDER BY ementa.titulo";
         $consultaPeixe = "SELECT * FROM ementa INNER join
         categoria ON categoria.id_categoria = ementa.id_categoria 
         WHERE categoria.id_categoria = 3 ORDER BY ementa.titulo";
         $consultaVegetariano = "SELECT * FROM ementa INNER join
         categoria ON categoria.id_categoria = ementa.id_categoria 
         WHERE categoria.id_categoria = 4 ORDER BY ementa.titulo";
         $consultaSobremesas = "SELECT * FROM ementa INNER join
         categoria ON categoria.id_categoria = ementa.id_categoria 
         WHERE categoria.id_categoria = 5 ORDER BY ementa.titulo";
         $consultaBebidas = "SELECT * FROM ementa INNER join
         categoria ON categoria.id_categoria = ementa.id_categoria 
         WHERE categoria.id_categoria = 6 ORDER BY ementa.titulo";

        $resultado = mysqli_query($ligacao, $consulta);
        $resultadoEntradas = mysqli_query($ligacao, $consultaEntradas);
        $resultadoCarne = mysqli_query($ligacao, $consultaCarne);
        $resultadoPeixe = mysqli_query($ligacao, $consultaPeixe);
        $resultadoVegetariano = mysqli_query($ligacao, $consultaVegetariano);
        $resultadoSobremesas = mysqli_query($ligacao, $consultaSobremesas);
        $resultadoBebidas = mysqli_query($ligacao, $consultaBebidas);
    ?>
        
    <div class="content animated fadeInRightBig" id="ementa">
        <h1>Ementa</h1>
        <div class="ementaWrapper">
            <p class="pEmenta">Prove da nossa saborosa ementa os mais frescos peixes ou seleccionadas carnes</p>
            <ul class="listaEmenta">
                <li class="activeEmenta" id="entrada">Entradas</li>
                <li id="carne">Carne</li>
                <li id="peixe">Peixe</li>
                <li id="vegetariano">Vegetariano</li>
                <li id="sobremesa">Sobremesas</li>
                <li id="bebidas">Bebidas</li>
            </ul>
            
            <div class="menuWrapper">
                <div class="divsEmenta" id="divEntradas">
                    <div class="divLeft">
                        <img class="imgEmenta" src="img/entrada.jpg" alt="entrada">
                    </div> <!-- end div left --> 
                    <div class="divRight">
                        <?php 
                        if (mysqli_num_rows($resultadoEntradas) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoEntradas)) {
                                echo '<div class="rowLista">' .
                                '<div class="leftImg">' .
                                '<img class="imgEmentaSmall" src="' .$row['foto'] .'" alt="entrada"> ' .
                                '</div> ' .
                                '<div class="rightDesc"> '.
                                '<h4>' . utf8_encode($row['titulo']) . '</h4>' .
                                '<span class="preco">' . $row['preco']. '€</span>'.
                                '<p>'. utf8_encode($row['descricao']) . '</p>'.
                                '</div>' .
                                '<div class="clear"></div> <hr>' .
                                '</div> <!-- end row lista --> ';
                            } //end while   
                        } else {
                            echo "<h4>Nao há registos por enquanto!</h4>";
                        } //end if else
                        
                        ?>
                    </div> <!-- end divRight -->
                </div> <!-- end div entradas -->








                <div class="divsEmenta" id="divCarnes">
                <div class="divLeft">
                        <img class="imgEmenta" src="img/carne.jpg" alt="carne">
                    </div> <!-- end div left --> 
                    <div class="divRight">
                        <?php 
                        if (mysqli_num_rows($resultadoCarne) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoCarne)) {
                                echo '<div class="rowLista">' .
                                '<div class="leftImg">' .
                                '<img class="imgEmentaSmall" src="' .$row['foto'] .'" alt="carne"> ' .
                                '</div> ' .
                                '<div class="rightDesc"> '.
                                '<h4>' . utf8_encode($row['titulo']) . '</h4>' .
                                '<span class="preco">' . $row['preco']. '€</span>'.
                                '<p>'. utf8_encode($row['descricao']) . '</p>'.
                                '</div>' .
                                '<div class="clear"></div> <hr>' .
                                '</div> <!-- end row lista --> ';
                            } //end while   
                        } else {
                            echo "<h4>Nao há registos por enquanto!</h4>";
                        } //end if else
                        
                        ?>
                    

                    </div> <!-- end divRight -->
                </div> <!-- end div Carnes -->






                <div class="divsEmenta" id="divPeixes">
                <div class="divLeft">
                        <img class="imgEmenta" src="img/peixe.jpg" alt="peixe">
                    </div> <!-- end div left --> 
                    <div class="divRight">
                    <?php 
                        if (mysqli_num_rows($resultadoPeixe) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoPeixe)) {
                                echo '<div class="rowLista">' .
                                '<div class="leftImg">' .
                                '<img class="imgEmentaSmall" src="' .$row['foto'] .'" alt="peixe"> ' .
                                '</div> ' .
                                '<div class="rightDesc"> '.
                                '<h4>' . utf8_encode($row['titulo']) . '</h4>' .
                                '<span class="preco">' . $row['preco']. '€</span>'.
                                '<p>'. utf8_encode($row['descricao']) . '</p>'.
                                '</div>' .
                                '<div class="clear"></div> <hr>' .
                                '</div> <!-- end row lista --> ';
                            } //end while   
                        } else {
                            echo "<h4>Nao há registos por enquanto!</h4>";
                        } //end if else
                        
                        ?>
                    

                    </div> <!-- end divRight -->
                </div> <!-- end div Peixes -->








                <div class="divsEmenta" id="divVegetariano">
                <div class="divLeft">
                        <img class="imgEmenta" src="img/vegetariano.jpg" alt="vegetariano">
                    </div> <!-- end div left --> 
                    <div class="divRight">
                    <?php 
                        if (mysqli_num_rows($resultadoVegetariano) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoVegetariano)) {
                                echo '<div class="rowLista">' .
                                '<div class="leftImg">' .
                                '<img class="imgEmentaSmall" src="' .$row['foto'] .'" alt="vegetariano"> ' .
                                '</div> ' .
                                '<div class="rightDesc"> '.
                                '<h4>' . utf8_encode($row['titulo']) . '</h4>' .
                                '<span class="preco">' . $row['preco']. '€</span>'.
                                '<p>'. utf8_encode($row['descricao']) . '</p>'.
                                '</div>' .
                                '<div class="clear"></div> <hr>' .
                                '</div> <!-- end row lista --> ';
                            } //end while   
                        } else {
                            echo "<h4>Nao há registos por enquanto!</h4>";
                        } //end if else
                        
                        ?>                     
                    </div> <!-- end divRight -->
                </div> <!-- end div Vegetariano -->





                <div class="divsEmenta" id="divSobremesas">
                <div class="divLeft">
                        <img class="imgEmenta" src="img/sobremesa.jpg" alt="sobremesa">
                    </div> <!-- end div left --> 
                    <div class="divRight">
                    <?php 
                        if (mysqli_num_rows($resultadoSobremesas) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoSobremesas)) {
                                echo '<div class="rowLista">' .
                                '<div class="leftImg">' .
                                '<img class="imgEmentaSmall" src="' .$row['foto'] .'" alt="sobremesa"> ' .
                                '</div> ' .
                                '<div class="rightDesc"> '.
                                '<h4>' . utf8_encode($row['titulo']) . '</h4>' .
                                '<span class="preco">' . $row['preco']. '€</span>'.
                                '<p>'. utf8_encode($row['descricao']) . '</p>'.
                                '</div>' .
                                '<div class="clear"></div> <hr>' .
                                '</div> <!-- end row lista --> ';
                            } //end while   
                        } else {
                            echo "<h4>Nao há registos por enquanto!</h4>";
                        } //end if else
                        
                        ?>
                    </div> <!-- end divRight -->
                </div> <!-- end div Sobremesas -->





        <div class="divsEmenta" id="divBebidas">
                <div class="divLeft">
                        <img class="imgEmenta" src="img/bebidas.jpg" alt="bebidas">
                    </div> <!-- end div left --> 
                    <div class="divRight">
                    <?php 
                        if (mysqli_num_rows($resultadoBebidas) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoBebidas)) {
                                echo '<div class="rowLista">' .
                                '<div class="leftImg">' .
                                '<img class="imgEmentaSmall" src="' .$row['foto'] .'" alt="bebida"> ' .
                                '</div> ' .
                                '<div class="rightDesc"> '.
                                '<h4>' . utf8_encode($row['titulo']) . '</h4>' .
                                '<span class="preco">' . $row['preco']. '€</span>'.
                                '<p>'. utf8_encode($row['descricao']) . '</p>'.
                                '</div>' .
                                '<div class="clear"></div> <hr>' .
                                '</div> <!-- end row lista --> ';
                            } //end while   
                        } else {
                            echo "<h4>Nao há registos por enquanto!</h4>";
                        } //end if else
                        
                        ?>                    

                    </div> <!-- end divRight -->
                </div> <!-- end div Bebidas -->









            </div> <!-- menu Wrapper -->
        </div> <!-- end ementa wrapper -->
    </div> <!-- end content  -->
    <?php
    include ("footer.php");
    ?>
    
    </div>
</body>
</html>