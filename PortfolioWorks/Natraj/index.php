<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natraj</title>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/mediaqueries.css">
</head>

<body>
    <span class="upArrow">
        <a href="#topSection">
            <i class="fa text-light fa-2x fa-chevron-up"></i>
        </a>
    </span>
    <div id="topSection" class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="index.php">
                    <img class="img-fluid" width="15%" height="15%" src="logo.jpg" alt="natraj logo">
                </a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#galeria">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link iconLink" href="#"> <i id="face"
                                    class="fab text-light fa-2x fa-facebook"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link iconLink" href="#"> <i id="insta"
                                    class="fab text-light fa-2x fa-instagram"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link iconLink" href="#"> <i id="twitter"
                                    class="fab text-light fa-2x fa-twitter"></i> </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>


        <section>
            <div class="px-0 slideContainer">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="your-class">
                            <div style="background-image: url('./img/dinnerroom.jpg');">
                                <h3 class="h3Legenda text-light">Sala de jantar/almoço</h3>
                            </div>
                            <div style="background-image: url('./img/window.jpg');">
                                <h3 class="h3Legenda text-light">Mesa à janela própria para casal</h3>
                            </div>
                            <div style="background-image: url('./img/bills.jpg');">
                                <h3 class="h3Legenda text-light">A nossa colecção de notas de diversos países</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end container fluid-->
        </section>

        <section id="about" class="container-fluid">
            <h2>Quem somos?</h2> <br>
            <div class="row no-gutters">
                <div class="col-md-6 col-xs-12 divImgFirma"></div>
                <div class="col-md-6 col-xs-12 divTxtFirma">
                    <h3>Um restaurante de referência na grande Lisboa</h3>
                    <p class="pAbout">
                        Namastê
                        Deixe-se envolver pelos segredos, pela arte e pelos infinitos aromas que povoam a verdadeira
                        cozinha Indiana.

                        Nos Restaurantes Natraj, localizados em Cascais, Lisboa e Odivelas, oferecemos uma variedade
                        de pratos com sabores autênticos, desde o levemente aromático, rico e cremoso, ao picante
                        fogoso.
                        As muitas especiarias oferecem um festim de diversos sabores para complementar e apurar a
                        carne, peixe, marisco
                        e pratos vegetarianos.

                        Apesar da nossa cozinha ser predominantemente Punjabi, incluímos na nossa ementa pratos de
                        outras regiões da Índia.

                        Esperamos que aprecie os nossos pratos!
                    </p>
                </div>
                <div class="col-12">
                    <h3 class="hOpinions">Opiniões</h3>
                    <div class="colOpinioes">
                        <div class="opinionContainer">
                            <a class="leftArrow" href="#">
                                <i class="fa fa-2x  fa-chevron-left"></i>
                            </a>
                            <a class="rightArrow" href="#">
                                <i class="fa fa-2x  fa-chevron-right"></i>
                            </a>
                            <div class="clientOpinions clientOne activeClient">
                                <blockquote class="clientText">A mesa reservada lá estava! Uma ambiente indiano
                                    simpático assim com o pessoal! Comida fabulosa, pão espetacular!
                                    Vale mesmo a pena!!</blockquote>
                                <span class="clientName">Cristiano Carrapato</span>
                                <br>
                                <i class="fab fa-2x text-dark fa-tripadvisor"></i>
                                <span class="brandName">trip<span>advisor</span></span>
                            </div>
                            <div class="clientOpinions clientTwo inactiveClient">
                                <blockquote class="clientText">
                                    Mais uma visita a este restaurante no centro historico
                                    de lisboa. Excelente confeccao e simpatia
                                    dos funcionarios! A qualidade da refeicao e o local acolhedor aconselham novo
                                    regresso.
                                </blockquote>
                                <span class="clientName">Carlos Silva</span>
                                <br>
                                <i class="fab fa-2x text-dark fa-tripadvisor"></i>
                                <span class="brandName">trip<span>advisor</span></span>
                            </div>
                            <div class="clientOpinions clientThree inactiveClient">
                                <blockquote class="clientText">
                                Para mim o Natraj é um dos melhores restaurantes da minha seleção.
                                 O atendimento é de excelência e a comida é simplesmente óptima. 
                                 Já frequento este restaurante a alguns anos e de todos os restaurantes indianos que já fui,
                                 este para mim está em primeiro lugar. Recomendo vivamente!
                                </blockquote>
                                <span class="clientName">Guilherme Hara</span>
                                <br>
                                <i class="fab fa-2x text-dark fa-tripadvisor"></i>
                                <span class="brandName">trip<span>advisor</span></span>
                            </div>
                        </div>
                        <!--end opinion container-->
                    </div>
                    <!--end col opinioes-->
                </div>
                <!--end col 12-->
            </div>
            <!--end row no gutters-->
        </section>
        <!--end about section-->

        <!-- section galeria-->

        <section id="galeria" class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12">
                    <h1 class="hGaleria">Galeria</h1>
                </div>
            </div>

            <section class="container galeriaContainer">
                <div class="row">
                    <!--script php para a galeria -->
                    <?php 
	$imagens = array(
        array("food example", "img/food1.jpg"),
        array("Chamuças deliciosas!", "img/food2.jpg"),
        array("Chicken Tikka Masala", "img/food3.jpg"),
        array("Molhos variados para iniciar a refeição!", "img/food4.jpg"),
        array("Onion Bajia", "img/food5.jpg"),
        array("Entrada localizada na Rua dos Sapateiros.", "img/street.jpg"),
	);

	foreach ($imagens as $value) {	
 ?>

                    <div class="col-md-3 col-6 mt-3">
                        <div class="galeria-foto">
                            <a data-fancybox="gallery" data-caption="<?php echo $value[0]?>"
                                href="./<?php echo $value[1]?>" target="_blank">
                                <img class="img-fluid" src="<?php echo $value[1]?>" alt="food example">
                            </a>
                        </div>
                    </div>

                    <?php 
}
 ?>
                    <!--end do script php para a galeria -->
                </div>
            </section>
        </section>
        <!--end section galeria-->

        <div class="row rowParallax container-fluid">
            <div class="col-12"><img src="./img/bailarina.jpg" alt="girl dancer" class="parallax"></div>
        </div>




        <!--section menu-->
        <?php 
            // require connection file
            require "./reserva/ligacao.php";
            //sql statements to get menu items from db tables
            $consultaEntradas = "SELECT * FROM entradas";
            $consultaSopas = "SELECT * FROM sopas";
            $consultaPao = "SELECT * FROM pao";
            $consultaSaladas = "SELECT * FROM saladas";
            $consultaCrianca = "SELECT * FROM crianca";

            $consultaFrango = "SELECT * FROM frango";
            $consultaBorrego = "SELECT * FROM borrego";
            $consultaCabrito = "SELECT * FROM cabrito";
            $consultaGambas = "SELECT * FROM gambas";
            $consultaPeixe = "SELECT * FROM peixe";
            $consultaEspecialidades = "SELECT * FROM especiais";
            $consultaGrelhados = "SELECT * FROM grelhados";
            $consultaVegetarianos = "SELECT * FROM vegetarianos";
            $consultaBiryani = "SELECT * FROM biryani";
            $consultaArroz = "SELECT * FROM arroz";

            //mysqli queries to vars
            $resultadoEntradas = mysqli_query($ligacao, $consultaEntradas);    
            $resultadoSopas = mysqli_query($ligacao, $consultaSopas);
            $resultadoPao = mysqli_query($ligacao, $consultaPao);
            $resultadoSaladas = mysqli_query($ligacao, $consultaSaladas);
            $resultadoCrianca = mysqli_query($ligacao, $consultaCrianca);
            $resultadoFrango = mysqli_query($ligacao, $consultaFrango);
            $resultadoBorrego = mysqli_query($ligacao, $consultaBorrego);
            $resultadoCabrito = mysqli_query($ligacao, $consultaCabrito);
            $resultadoGambas = mysqli_query($ligacao, $consultaGambas);
            $resultadoPeixe = mysqli_query($ligacao, $consultaPeixe);
            $resultadoEspecialidades = mysqli_query($ligacao, $consultaEspecialidades);
            $resultadoGrelhados = mysqli_query($ligacao, $consultaGrelhados);
            $resultadoVegetarianos = mysqli_query($ligacao, $consultaVegetarianos);
            $resultadoBiryani = mysqli_query($ligacao, $consultaBiryani);
            $resultadoArroz = mysqli_query($ligacao, $consultaArroz);
        ?>


        <section id="menu" class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12">
                    <h1>Menu</h1>
                </div>
                <!--<img class="imgMenuSection" src="./img/sala2.jpg" alt="sala do restaurante">-->
                <div id="menuListContainer"><!--/*Background Photo by Karolina Grabowska from Pexels*/-->

                    <h5>Entradas</h5>
                    <div class="listContainer entradas">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoEntradas) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoEntradas)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Sopas</h5>
                    <div class="listContainer sopas">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoSopas) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoSopas)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Pão Indiano</h5>
                    <div class="listContainer pao">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoPao) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoPao)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Saladas</h5>
                    <div class="listContainer saladas">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoSaladas) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoSaladas)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Menu Crianças</h5>
                    <div class="listContainer criancas">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoCrianca) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoCrianca)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Pratos de Frango</h5>
                    <div class="listContainer frango">
                        <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoFrango) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoFrango)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Pratos de Borrego</h5>
                    <div class="listContainer borrego">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoBorrego) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoBorrego)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Pratos de Cabrito</h5>
                    <div class="listContainer cabrito">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoCabrito) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoCabrito)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Pratos de Gambas</h5>
                    <div class="listContainer gambas">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoGambas) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoGambas)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Pratos de Peixe</h5>
                    <div class="listContainer peixe">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoPeixe) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoPeixe)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Especialidades Natraj</h5>
                    <div class="listContainer especialidades">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoEspecialidades) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoEspecialidades)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Pratos Grelhados</h5>
                    <div class="listContainer grelhados">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoGrelhados) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoGrelhados)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Pratos Vegetarianos</h5>
                    <div class="listContainer vegetarianos">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoVegetarianos) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoVegetarianos)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Biryani</h5>
                    <div class="listContainer biryani">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoBiryani) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoBiryani)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                    <h5>Arroz</h5>
                    <div class="listContainer arroz">
                    <table class="table table-striped table-light">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="firstHeader col">#</th>
                            <th scope="col">Nome</th>                            
                            <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (mysqli_num_rows($resultadoArroz) > 0) {
                            while ($row = mysqli_fetch_assoc($resultadoArroz)) {
                                echo '<tr>
                                <th scope="row">' . $row['numero'] . '</th>                         
                                <td>
                                <span class="spanNome">' . $row['nome'] . '</span>
                                <br>
                                <span class="spanInfo">' . $row['descricao'] . '
                                </span>
                                </td>
                                <td>' . $row['preco'] . '€</td>
                                </tr>';       
                                }
                            }                                                                                  
                            ?>            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </section>
        <!--end section menu-->





        <div class="row container-fluid no-gutters divEspeciais">
                <div class="col-md-12 col-xs-12">
                    <h1>Pratos Especiais</h1>
                </div>
                <div class="col-md-3 colEspeciais">
                    <img src="./img/biryani.jpg" alt="especialidades">
                    <h4 class="hEspeciais">Biryani</h4>
                    <p class="pEspeciais">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam rem dolores blanditiis nam aliquid eos consequuntur excepturi, inventore ad quam cupiditate porro. Mollitia, fugiat nam porro quibusdam magnam sed amet.</p>
                    </div>
                <div class="col-md-3 colEspeciais">
                    <img src="./img/food1.jpg" alt="especialidades">
                    <h4 class="hEspeciais">Chicken Badam Pasanda</h4>
                    <p class="pEspeciais">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam rem dolores blanditiis nam aliquid eos consequuntur excepturi, inventore ad quam cupiditate porro. Mollitia, fugiat nam porro quibusdam magnam sed amet.</p>
                </div>
                <div class="col-md-3 colEspeciais">
                    <img src="./img/grelhados.jpg" alt="especialidades">
                    <h4 class="hEspeciais">Chicken Hariyali Tikka</h4>
                    <p class="pEspeciais">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam rem dolores blanditiis nam aliquid eos consequuntur excepturi, inventore ad quam cupiditate porro. Mollitia, fugiat nam porro quibusdam magnam sed amet.</p>
                </div>
                <div class="col-md-3 colEspeciais">
                    <img src="./img/biryani.jpg" alt="especialidades">
                    <h4 class="hEspeciais">Prawn Curry</h4>
                    <p class="pEspeciais">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam rem dolores blanditiis nam aliquid eos consequuntur excepturi, inventore ad quam cupiditate porro. Mollitia, fugiat nam porro quibusdam magnam sed amet.</p>
                </div>
            </div>

        











        <section id="reservas">
            
            <h3 class="hReservas">Efectue a sua reserva</h3>
            <p class="pReservas">
                Para efectuar a sua reserva ou consulta, por favor seleccione o tipo do evento, a data, o número de
                pessoas, insire o seu nome, e-mail e o seu n° de telefone no formulário. <br>
                Recomendamos que efetue sempre a sua reserva com antecedência. <br>
                Com os nossos melhores cumprimentos, <br>
                <u>A Gerência</u>
            </p>
            <form id="frmReserva" action="./reserva/reserva.php" method="POST">
                <fieldset>
                    <legend>Reserva</legend>
                    <label for="tipo">Tipo de Evento:</label>
                    <select name="tipo" id="tipo">
                        <option value=""></option>
                        <option value="almoço">Almoço</option>
                        <option value="jantar">Jantar</option>
                    </select> <br>
                    <label for="data">Data:</label>
                    <input required type="date" name="datas" id="datas"> <br>
                    <label for="numPessoas">Número de pessoas:</label>
                    <input required type="number" name="numPessoas" id="numPessoas" value="1" maxlength="2" min="1"
                        max="50"> <br>
                    <label for="nome">Nome:</label>
                    <input required type="text" name="nome" id="nome"> <br>
                    <label for="email">Email:</label>
                    <input required type="email" name="email" id="email"> <br>
                    <label for="telefone">Telefone:</label>
                    <input required type="text" name="telefone" id="telefone" maxlength="12"> <br> <br>
                    <input type="submit" value="Efectuar" id="efectuar">
                </fieldset>

            </form>
        </section>



        <section id="contact">
            <div class="row no-gutters">
                <div class="col-12">
                    <h1 class="hContacto text-danger">Contacto</h1>
                </div>
            </div>
            <br>
            <div class="row no-gutters contactTxt">
                <div class="col-12">
                    <h3>Natraj Tandoori<br>Rossio - Lisboa</h2>
                        <p class="pContact">
                            <i class="fa text-dark fa-home"></i>
                            R. dos Sapateiros 171, 1100-044 Lisboa <br>
                            <i class="fa text-dark  fa-phone"></i>
                            <strong>+351213468113</strong> <br>
                            <i class="fa text-dark  fa-mobile"></i>
                            <strong>+351964198588</strong> <br>
                            <i class="fa text-dark  fa-mail-bulk"></i>
                            <a class="text-dark" href="mailto:natraj5star@yahoo.com"><em>natraj5star@yahoo.com</em></a>
                        </p>
                </div>
            </div>
        </section>


        <!--map section-->
        <section id="mapSection" class="container-fluid">
            <div class="row no-gutters">
                <div class="col-12 mapContainer">
                    <div class="natraj-map" id="google_map" data-map-x="38.7117351" data-map-y="-9.1386355"
                        data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
                </div>
            </div>
        </section>
        <!-- end map section-->









        <footer>
            <ul>
                <li class="">
                    <a target="_blank" class="footerLink"
                        href="https://www.facebook.com/Restaurant-Natraj-119432788167355/">
                        <i id="footerFace" class="fab text-light fa-3x fa-facebook"></i>
                    </a>
                </li>
                <li class="">
                    <a class="footerLink" href="#"> <i id="footerInsta" class="fab text-light fa-3x fa-instagram"></i>
                    </a>
                </li>
                <li class="">
                    <a class="footerLink" href="#"> <i id="footerTwitter" class="fab text-light fa-3x fa-twitter"></i>
                    </a>
                </li>
            </ul><br>
            <p class="pFooter"><em>&copy;Designed by Pedro Fiúza Front End Developer&copy;2020 </p></em>
        </footer>










    </div>
    <!--external scripts like jquery and  FA-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9o3VTtQ3XeVWBfxs32SZj1Juwu0gI_1s"></script>

    <script src="https://unpkg.com/simple-parallax-js"></script>

    <!--main script custom made-->
    <script src="./js/script.js"></script>
    <script src="./js/reserva.js"></script>
    <script src="./js/map-custom.js"></script>
    <script src="./js/opinions.js"></script>
</body>

</html>