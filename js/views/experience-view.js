define(function () {

    var externals = {};
    let mainContent = $("#mainContent");

    externals.showData = function (data) {

        mainContent.empty();
        mainContent.html(data);
        $("html, body").animate({
            scrollTop: $("#sectionExperience").offset().top - 50
        }, 700);  //end animate        
    }

    return externals;
})