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
    let counter, counterTestimonials;
    counter = 0; counterTestimonials = 0;
    let infoContainer = $('.infoContainer');
    let text = $(".pTxt"); let name = $('.h3Name'); let job = $('.h4Function');
    infoContainer.hide();
    // testimonials objects
    const testimonials = [
        {
            text: `Tive o prazer de conhecer o Pedro Fiuza durante o bootcamp da Academia de Código ... 
            Deparei-me com um verdadeiro “guerreiro”, uma máquina de trabalho, exigente consigo mesmo,
             com os outros, enquanto não alcança os seus objectivos não descansa… 
            Uma verdadeira força da natureza.
            Na Academia de Código, tivemos um projecto, Hackaton (24 horas para desenvolvermos uma webapp),
             eu como capitão de equipa, e com a responsabilidade de construir uma equipa de 5 elementos,
              o Pedro foi a minha primeira escolha, não só pelo seu conhecimento a desenvolver em Front End 
              mas principalmente por todos os outros pontos que enumerei anteriormente. 
            Foi uma peça imprescindível na equipa, a sua energia, espirito de equipa, a sua garra,
             e a sua capacidade de desenvolver o nosso projecto ajudou o grupo a alcançar os objectivos definidos,
              admito que o seu contributo foi uma das peças que nos permitiu ter sucesso no final.`,
            name: "Luís Rodrigues",
            job: "<BackEnd Developer>"
        },
        {
            text: "",
            name: "",
            job: ""
        }

    ]

    left.click(function () {
        infoContainer.fadeOut(500);
        counter--;
        counterTestimonials--;
        if (counter < 0) {
            counter = imgArray.length - 1;
        }
        if (counterTestimonials < 0) {
            counterTestimonials = testimonials.length - 1;
        }
        imgContainer.css("background-image", "url(" + imgArray[counter] + ") ");
        setTimeout(function () {
            text.text(testimonials[counterTestimonials].text);
            name.text(testimonials[counterTestimonials].name);
            job.text(testimonials[counterTestimonials].job);
            infoContainer.fadeIn(750);
        }, 500)

    })

    right.click(function () {
        infoContainer.fadeOut(500);
        counter++;
        counterTestimonials++;
        if (counter > imgArray.length - 1) {
            counter = 0;
        }
        if (counterTestimonials > testimonials.length - 1) {
            counterTestimonials = 0;
        }
        imgContainer.css("background-image", "url(" + imgArray[counter] + ") ");
        setTimeout(function () {
            text.text(testimonials[counterTestimonials].text);
            name.text(testimonials[counterTestimonials].name);
            job.text(testimonials[counterTestimonials].job);
            infoContainer.fadeIn(750);
        }, 500)

    })

    setInterval(function () {
        right.click()
    }, 20000)


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
