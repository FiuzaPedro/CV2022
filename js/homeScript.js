let aLinks = $('.aLinks');
$(document).ready(function () {
    //left and right img controllers
    let left = $(".left"); let right = $(".right");
    let imgContainer = $('.imgsContainer');
    let imgArray =
        ['./img/room1smaller.jpg', './img/turma.jpeg', './img/fiuzaperfil.jpg',
            './img/room4smaller.jpg', './img/room2smaller.jpg',
            './img/room3smaller.jpg', './img/meAndDino.jpg'
        ];
    let counter;
    counter = 0;

    left.click(function () {
        counter--;
        if (counter < 0) {
            counter = imgArray.length - 1;
        }
        imgContainer.css("background-image", "url(" + imgArray[counter] + ") ");
    })

    right.click(function () {
        counter++;
        if (counter > imgArray.length - 1) {
            counter = 0;
        }
        imgContainer.css("background-image", "url(" + imgArray[counter] + ") ");
    })

    setInterval(function () {
        right.click()
    }, 5000)


})


//function em puro JS
let mobileMenu = document.getElementById("burgerMenu");
function changingState() {
    mobileMenu.classList.toggle("change");

}
mobileMenu.addEventListener("click", changingState);
//end function e event listener da function em JS

//function em jQuery
let mob = $("#mobileLinks"); let listaMobile = $(".linksContainer");
function mobileAction() {
    listaMobile.toggleClass('linksInside');
    $(".bodyTitleContainer").toggleClass('titleFaded');
    if ($(".bodyTitleContainer").hasClass('titleFaded')) {
        $(".bodyTitleContainer").delay(500).animate({ "zIndex": "-1" }, 500)
    } else {
        $(".bodyTitleContainer").animate({ "zIndex": "1" }, 500)
    }
} // end burgerMenu function em jQuery

$("#burgerMenu").on("click", mobileAction)

aLinks.click(function () {
    $('body').css("overflow-y", "scroll").unbind('keyup')
    $('footer').animate({ opacity: "1" }, 1000);
    switch ($(this).attr("href")) {
        case "#about":
            changingState();
            mobileAction();
            $("html, body").animate({
                scrollTop: $("#sectionAbout").offset().top - 50
            }, 700);  //end animate

            break;
        case "#experience":
            changingState();
            mobileAction();
            $("html, body").animate({
                scrollTop: $("#sectionExperience").offset().top - 50
            }, 700)  //end animate
            break;
        case "#portfolio":
            changingState();
            mobileAction();
            $("html, body").animate({
                scrollTop: $("#sectionPortfolio").offset().top - 50
            }, 700)  //end animate
            break;
        case "#contact":
            changingState();
            mobileAction();
            $("html, body").animate({
                scrollTop: $("#sectionContact").offset().top - 50
            }, 700)  //end animate

            break;

        default:

            break;
    }

}) //end links click function

let $window = $(window); let $document = $(document);

function removeText() {
    setTimeout(function () {
        $(".bodyTitleContainer")
            .animate({
                "opacity": "0"
            }, 500)
            .delay(2000)
            .queue(function () {
                $(".bodyTitleContainer").remove();
            });
    }, 3000);
}

if ($window.width() > 800) {
    $('.bodyTitleContainer').addClass("animate__animated animate__lightSpeedInRight");
    removeText();
    $document.scroll(function () {
        if ($document.scrollTop() > 200) {
            $('nav').css(
                'height', '90px'
            )
            aLinks.css({
                padding: "1%",
                fontSize: "1em"
            })
        } else {
            $('nav').css(
                'height', '120px'
            )
            aLinks.css({
                padding: "2%",
                fontSize: "1.1em"
            })
        }
    })
} else {

    let arrow = $('.upArrow');
    arrow.click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 700);  //end animate
    })
    $document.scroll(function () {
        if ($document.scrollTop() > 200) {
            arrow.css({
                opacity: "1"
            });

        } else {
            arrow.css({
                opacity: "0"
            })
        }
    })
}
