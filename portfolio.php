<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script data-main="./js/app" src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.5/require.min.js" defer>
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./css/portfolio.css"> -->
</head>

<body>
    <section id="sectionPortfolio">
        <div class="modalPortfolio">
            <div class="frameContainer">
                <iframe class="iFrameCurrent" src="" frameborder="0">
                </iframe>
            </div>
            <button class="turnOff">Close</button>
        </div>
        <?php
require "./persistence/connection.php";
?>
        <h1 class="hPortfolio">Portfolio</h1>
        <div id="buttons"></div>
        <div class="galleryContainer">
            <div id="gallery">
                <?php
$sql = "SELECT datatags, img_urls, title, description FROM portfolio_items";
$result = $ligacao->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div data-tags= ' . $row["datatags"] . '  class="gallery-item">
                    <img class="imgPortfolio"   src=' . $row["img_urls"] . ' alt= ' . $row["datatags"] . '>
                    <h2 class="hCaption">' . $row["title"] . '</h2>
                    <p class="pDescription">' . $row["description"] . '</p>
                </div>';
    }
}
else {
    echo "0 results";
}

?>
            </div>
            <!--end div gallery -->
    </section>

    <script src="./js/portfolioScript.js"></script>
    <?php $ligacao->close(); ?>
</body>
<!-- INSERT INTO portfolio_items (datatags, img_urls, title) VALUES ('', '', ''); -->

</html>