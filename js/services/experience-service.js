define(function () {

    console.log('EXPERIENCE SERVICE IS LOADED')
    var externals = {}

    externals.getData = function (showData) {
        // if ( $("#mainContent")) {

        // }
        //if to use the experience animated version on larger screens
        if ($(window).width() > 800) {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function () {

                var xpContent = this.responseText;
                showData(xpContent);

            }
            xhttp.open("GET", "./experience.html");
            xhttp.send();
        } else {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function () {

                var xpContent = this.responseText;
                showData(xpContent);

            }
            xhttp.open("GET", "./experienceMobile.html");
            xhttp.send();
        }




    }

    return externals;

})