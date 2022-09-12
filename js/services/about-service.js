define(function () {

    console.log('ABOUT SERVICE IS LOADED')
    var externals = {}


    externals.getStrings = function (getData) {

        var strings = [
            "As a really passionate Skater, my persistence has always been my middle name ",
            "and since involving myself with IT since the late 80s.",
            "I've always been loyal to my good'ol friends , the Personal Computers!",
            "Always looking forward to new challenges, friends and knowledge."
        ];

        getData(strings);

    }
    // externals.getApiData = function (showData) {
    //     fetch('http://skateipsum.com/get/3/1/JSON')
    //         .then(response => { return response.json() })
    //         .then(
    //             function (data) {

    //                 showData(data);
    //             }
    //         )
    //         .catch()
    // }
    // externals.changeImg = function () {
    //     $(".smallImg").click(function (currentImg, src1, src2) {
    //         $('.bigImg').hide();
    //         $(".bigImg").attr("src", $(this).attr("src"));

    //         /*console.log($(".bigImg").next().text());
    //         console.log($(this).next().text()) */

    //         $(".bigImg").next().text($(this).next().text());
    //         $('.bigImg').fadeIn(700);
    //     })
    // }

    return externals;

})