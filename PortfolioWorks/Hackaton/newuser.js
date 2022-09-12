$("#submitBtn").click(function (e) {
    console.log($("input:invalid"))
    // e.preventDefault();
    if ($("input:invalid").length > 0) {
        console.log("Error , there is missing data");
        $(".wrong, .pWrong").animate({
            marginLeft: "0"
        }, 2000);
        setTimeout(function () {
            $(".wrong, .pWrong").animate({
                marginLeft: "200%",
            });
        }, 5500)
        // $(".wrong").delay(1500).remove();
    } else {
        $(".right").animate({
            marginLeft: "0"
        })
    }


})