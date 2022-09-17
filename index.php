<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro Fiuza</title>
    <link rel="shortcut icon" href="./img/pficon.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script data-main="./js/app" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.5/require.min.js" defer>
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/experience.css">
    <link rel="stylesheet" href="./css/experienceMobile.css">
    <link rel="stylesheet" href="./css/portfolio.css">
    <link rel="stylesheet" href="./css/contact.css">

    <link rel="stylesheet" href="./css/mainContent.css">
    <link rel="stylesheet" href="./css/mediaqueries.css">
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=false&key=AIzaSyB9o3VTtQ3XeVWBfxs32SZj1Juwu0gI_1s"
        defer async>
    </script>

</head>

<body>
    <div class="upArrow"><i class="iconArrow fas fa-arrow-up"></i></div>

    <nav>
        <div class="linksContainer">
            <a class="aLinks" href="#about">about</a>
            <a class="aLinks" href="#experience">experience</a>
            <a class="aLinks" href="#portfolio">portfolio</a>
            <a class="aLinks" href="#contact">contact</a>
        </div>
    </nav>

    <p class="titleContainer"><span>Pedro</span><br> &nbsp; &nbsp;Fiúza</p>

    <div class="burgerMenu" id="burgerMenu">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <div class="imgsContainer">
        <div class="left">
            <div class="testimonial">
                <h2 class="h2Title">What people say</h2>
                <hr class="hrTestimonial">
                <div class="infoContainer">
                    <p class="pTxt"></p>
                    <h3 class="h3Name"></h3>
                    <h4 class="h4Function"></h4>
                </div>
            </div>
        </div>
        <div class="right"></div>
    </div>

    <!--end nav and mobile menu-->
    <div class="bodyTitleContainer">

        <p class="pTitle">

            <img class="miniImg" src="./img/fiuzaperfil3.jpg" alt="pedro fiuza small image">

            <code>&lt;Hi, My name is <span class="fiuza">Pedro Fiúza</span>, <br>A new Junior FullStack Developer .join()ing in the fun&gt;</code>
        </p>

        <div class="techContainer">
            <!-- <h2>Some Technologies I use and learnt</h2> -->
            <img src="./img/technologies/css3.png" alt="css3 ico" class="imgTechs">
            <img src="./img/technologies/html5.png" alt="html5 icon" class="imgTechs">
            <img src="./img/technologies/javascript1.png" alt="javascript icon" class="imgTechs">
            <img src="./img/technologies/mysql.png" alt="mysql icon" class="imgTechs">
            <img src="./img/technologies/java.png" alt="java icon" class="imgTechs">
            <img src="./img/technologies/git.png" alt="git icon" class="imgTechs">
            <img src="./img/technologies/php.png" alt="php icon" class="imgTechs">
        </div>
    </div>
    <main id="mainContent" class="mainContent">

    </main>
    <footer>
        <p class="pFooter">Hope you enjoyed my profile! Contact me</p>
        <ul class="social-list">
            <li class="social-list__item">
                <a class="social-list__link" href="https://www.facebook.com/pedro.fiuza.1">
                    <i class="fab fa-3x fa-facebook"></i>
                </a>
            </li>
            <li class="social-list__item">
                <a class="social-list__link" href="https://pt.linkedin.com/in/pedrofiuza79">
                    <i class="fab fa-3x fa-linkedin"></i>
                </a>
            </li>

            <li class="social-list__item">
                <a class="social-list__link" href="https://github.com/FiuzaPedro">
                    <i class="fab fa-3x fa-github"></i>
                </a>
            </li>
        </ul>
        <a href="mailto:pedrofiuza@hotmail.com" class="footer__link">pedro_fiuza@hotmail.com</a>
        <hr class="hrFooter">
        <p class="pFooter">&copy;Pedro Fiuza Junior Front End Developer</p>
    </footer>
    <!-- Photo by Tranmautritam: https://www.pexels.com/photo/information-sign-on-shelf-251225/ -->
    <!-- Photo by Eduardo Dutra: https://www.pexels.com/photo/person-in-front-of-laptop-on-brown-wooden-table-2115217/ -->
    <!-- Photo by Sabrina Gelbart: https://www.pexels.com/photo/full-frame-shot-of-abstract-pattern-249798/ -->
    <!-- Photo by Negative Space: https://www.pexels.com/photo/pink-white-black-purple-blue-textile-web-scripts-97077/ -->
    <script src="./js/homeScript.js"></script>
    <script src="./js/portfolioScript.js"></script>

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9o3VTtQ3XeVWBfxs32SZj1Juwu0gI_1s" defer></script> -->
</body>

</html>