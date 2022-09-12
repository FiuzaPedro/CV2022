define(function () {

    var externals = {};
    let mainContent = $("#mainContent");

    externals.getData = function (strings) {
        mainContent.empty();
        mainContent.append(`<section id="sectionAbout">
        <h1 class="h1About">Pedro Fiúza</h1>
        <p class="pAbout">` + strings + `</p>
        </section>`);
        $("html, body").animate({
            scrollTop: $("#sectionAbout").offset().top - 110
        }, 700);  //end animate
    }

    return externals;
})