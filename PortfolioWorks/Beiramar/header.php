    <link rel="stylesheet" href="styles/header.css">   
    
        <div class="logo">                    
            <a class="aLogo" href="index.php">        
                <h1 class="logoH">Restaurante Beira Mar</h1>                
            </a>
        </div>  

    <?php 
    
    $servidor = "localhost";
    $username = "pedrofiu_Fiuza";
    $password = "lolada";
    $basedados = "pedrofiu_restaurante";    

    // Create connection
        $ligacao = new mysqli($servidor, $username, $password, $basedados);
        
        if (!$ligacao) {
            die("Coneção falhou! Razão: " . $conn->connect_error);
        } 
        //mysqli_select_db( $ligacao, $basedados);
        
    
    ?>

        <div class="header">
        <div class="menu">
            <ul class="nav">
                <li class="burgerMenu">                
                <div class="menuMobile" id="mob">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                </li>
                <a id="aSobre" href="sobre.php">
                    <li>Sobre nós</li>
                </a>
                <a id="aEmenta" href="ementa.php">
                    <li>Ementa</li>
                </a>
                <a id="aStaff" href="staff.php">
                    <li>Staff</li>
                </a>
                <a id="aGaleria" href="galeria.php">
                    <li>Galeria</li>
                </a>
                <a id="aReservas" href="reservas.php">
                    <li>Reservas</li>
                </a>
                <a id="aContactos" href="contactos.php">
                    <li>Contactos</li>
                </a>
            </ul>
        </div>
        
    </div>
    
    <div class="clear"></div>    
