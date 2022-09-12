//.activeClient Class to toggle, .clientOne, .clientTwo, .leftArrow,.rightArrow vars
let clientNumbers = [$(".clientOne"), $(".clientTwo"), $(".clientThree")];
let arrows = [$(".leftArrow"), $(".rightArrow")];
let initialCount = 0;
for (let i = 0; i < arrows.length; i++) {
    arrows[i].on("click", function (e) {
        e.preventDefault();
        let clickedArrow = $(this).attr("class");
        switch (clickedArrow) {
            case "rightArrow":
                if (initialCount >= clientNumbers.length - 1) {
                    break;
                }

                clientNumbers[initialCount]
                    .removeClass("activeClient")
                    .addClass("inactiveClient");
                initialCount++;
                clientNumbers[initialCount]
                    .removeClass("inactiveClient")
                    .addClass("activeClient");

                break;

            case "leftArrow":
                if (initialCount <= 0) {
                    break;
                }

                clientNumbers[initialCount]
                    .removeClass("activeClient")
                    .addClass("inactiveClient");
                initialCount--;
                clientNumbers[initialCount]
                    .removeClass("inactiveClient")
                    .addClass("activeClient");

                break;

            default:
                break;
        }
    });
}






