define(function () {

    console.log('PORTFOLIO SERVICE IS LOADED')
    var externals = {}

    externals.getData = function (showData) {


        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {

            var portfolioContent = this.responseText;
            showData(portfolioContent);

        }
        xhttp.open("GET", "./portfolio.php");
        xhttp.send();
        // window.google = {};

    }

    return externals;

})