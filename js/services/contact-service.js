define(function () {

    console.log('CONTACT SERVICE IS LOADED')
    var externals = {}

    externals.getData = function (showData) {


        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {

            var contactContent = this.responseText;
            showData(contactContent);

        }
        xhttp.open("GET", "./contact.html");
        xhttp.send();
        //window.google = {};

    }

    return externals;

})