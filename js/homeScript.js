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
    let testimonial = $('.testimonial');
    testimonial.fadeOut();
    setTimeout(function () {
        testimonial.fadeIn(1000);
        right.click();
    }, 3500)
    let counter, counterTestimonials;
    counter = 0; counterTestimonials = 0;
    let infoContainer = $('.infoContainer');
    let text = $(".pTxt"); let name = $('.h3Name'); let job = $('.h4Function');
    infoContainer.hide();
    // testimonials objects
    const testimonials = [
        {
            text: `I had the pleasure to meet Pedro during the "Academia de Código" bootcamp...
              I came across a true warrior, working machine, self demanding and while his goals are not reached, he's not 
              resting... A true force of nature.
              In the "Academia de Código", we had a project called Hackaton (24hours to develop a webapp), 
              Me as the team Captain, along with the responsibility to build a team of 5 elements, picked
              Pedro as my first choice, not only for his knowledge on Front End but mostly for all the other
              characteristics I mentioned earlier. He was a fulcral part of the team, his energy, his team spirit, his
              tenacity and his capacity to develop our project , helped the group reach it's previously defined objectives.
              I admit that his contribution was one of the main reasons why our project was successful in the end.`,
            name: "Luís Rodrigues",
            job: "<Fullstack Developer>"
        },
        {
            text: `I remember someone mentioning in the presentation pitch on the first day of the Code Academy n71
            Bootcamp class something like "I am ex-military" or "I was in the army".
            It stuck in my mind but not the person who said it, as the days went by and I couldn't remember who 
           that person was or could be. Today, after 3 and a half months, graduated as developers, in daily company, 
           in moments of study partnership in pairs or even at the table at lunch time, talking about programming, 
           skateboarding, beer, I know who "is" (was) the "military". Corporal Fiuza, since as a cadet what stood out
            to me was his personal code, simplicity, willpower, disposition in physical energy and in helping his classmates.
            A can of Redbull to start the heavy day ahead. A person who does not go unnoticed, who leaves us longing and good memories. 
           Pedro Fiuza, I thank you for the time we spent together, sharing the same classroom, in one of the most important moments of my life.`,
            name: "Thiago Barlanza",
            job: "<Fullstack Developer>"
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

    // setInterval(function () {
    //     right.click()
    // }, 20000)


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
