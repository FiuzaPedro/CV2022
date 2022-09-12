$(document).ready(function () {

    let acad = $('.academic');
    let pro = $('.professional');
    let outerAcad = $('.outerAcademic');
    let outerPro = $('.outerProfessional');
    let innerAcad = $('.innerAcademic')
    let innerPro = $('.innerProfessional')

    acad.fadeOut(100).hide();
    pro.fadeOut(100).hide();

    $('.expChoice p').click(function (e) {
        let currentId = $(this).attr('id');
        $('#pPro').removeClass('activeChoice');
        $(this).addClass('activeChoice');
        if (currentId === "pAcademic") {
            outerPro.removeClass('transformedPro');
            outerAcad.addClass('transformedAcad');

            pro.fadeOut(100).hide();
            innerPro.css("width", "0%");
            setTimeout(function () {
                innerAcad.animate({
                    width: "100%"
                }, 500);
            }, 500)
            setTimeout(function () {

                acad.fadeIn(500).show();

                $('.cardAcad').css({
                    boxShadow: "-10px 0px 5px teal, 10px 0px 5px teal, 0px 10px 5px teal, 0px -10px 5px teal"
                });
            }, 1000)
        } else if (currentId === "pPro") {
            $('#pAcademic').removeClass('activeChoice');
            $(this).addClass('activeChoice');
            outerAcad.removeClass('transformedAcad');
            outerPro.addClass('transformedPro');

            acad.fadeOut(100).hide();
            innerAcad.css("width", "0%");
            setTimeout(function () {
                innerPro.animate({
                    width: "100%"
                }, 500);

                pro.fadeIn(500).show();

            }, 500)
            setTimeout(function () {

                $('.cardPro').css({
                    boxShadow: "-10px 0px 5px teal, 10px 0px 5px teal, 0px 10px 5px teal, 0px -10px 5px teal"
                })
            }, 1000)
        }

    })

})
