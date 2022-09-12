define(function () {

    var externals = {};
    let mainContent = $("#mainContent");

    externals.showData = function (data) {

        mainContent.empty();
        mainContent.html(data);

        $("html, body").animate({
            scrollTop: $("#sectionContact").offset().top - 50
        }, 700);  //end animate

    }
    //window.google = {};
    return externals;
})