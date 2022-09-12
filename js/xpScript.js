var min = 150;
var max = $('.xpContainer').width() - 150;
var imgFiuza = $(".imgFiuza");
var xpContainerDivs = $('.xpContainer div');
var modal = $("#modalCourses");
var hCourses = $('.h1Courses'); var imgCourses = $('.imgCourses'); var pCourses = $('.pCourses');
imgFiuza.offset().left = 0;

//text to append to each course text
var ineteTxt =
    `<h3 class="hInete">Técnico de Gestão de Sistemas Informáticos</h3>
    A three year IT course with all kinds of subjects on 
Software and Hardware management and repair.<br>
Some technology examples: SQL, logic circuits, C, C++ and Visual Basic, 
it covered back then, the whole stack in IT at the time.`;
var flagTxt =
    `<h3 class="hFlag">Web Programmer</h3>
Becoming increasingly more interested in the Web Development area, 
I signed to FLAG's Web Programmer Course, where I got to learn and 
consolidate more knowledge and experience in Web Development. <br>It's main content were 
HTML5, CSS3 ,Javascript, jQuery, Object Oriented Programming, PHP and mySQL`;
var cinel1 =
    `<h3 class="hCinel">Introdução à Programação</h3>
To reinforce and review my concepts on all kinds of programming, I took this course. <br>
This course included Algorithms, Data Structures and C# basics.`;
var cinel2 =
    `<h3 class="hCinel">Programação Web LAMP</h3>
Following the <em><strong>Introdução à Programação</strong></em> course,
I signed to this course, again to reinforce Web Technologies knowledge.<br>
It's content was: HTML, CSS, SQL, Javascript and PHP.`;
var cinel3 =
    `<h3 class="hCinel">Introdução ao Java</h3>
Deciding to dive a little more into Software Development and BackEnd area, 
I decided to enroll to this Java introduction course. <br>
Acquired some basic knowledge on Java programming, including relational Database
 basic management.`;
var academia =
    `<div id="star-five"></div><h3 class="hAcademia">Fullstack Developer Bootcamp</h3>
Unfortunately, this long road hadn't been life changing, so I 
decided to invest really strongly on a different experience, a 
programming Bootcamp!!<br>
Since day one, I kind of felt this would be a lifetime experience as well! <br>
Everybody made us feel at home while learning all the most difficult content in 
record breaking time!<br><br>
From all the history about Personal Computers and what/who helped 
along the way to provide us with all the technology we currently have, until 
Java advanced programming, SQL statements and FrontEnd Development with Javascript, 
we covered a lot of ground! <br>
Now I feel like I'm ready to start my professional career as a <strong>Developer</strong>!`;

function animFiuza(e) {
    if (e.which === 39 && imgFiuza.offset().left < max) {
        imgFiuza.animate({
            left: "+=150px"
        })
        // $(".pInfo").text(imgFiuza.offset().left);
        if (imgFiuza.offset().left > 25) {
            $(".inete").addClass("originalHeight")
        }
        if (imgFiuza.offset().left > 170) {
            $(".flag").addClass("originalHeight")
        }
        if (imgFiuza.offset().left > 320) {
            $(".cinel1").addClass("originalHeight")
        }
        if (imgFiuza.offset().left > 470) {
            $(".cinel2").addClass("originalHeight")
        }
        if (imgFiuza.offset().left > 620) {
            $(".cinel3").addClass("originalHeight")
        }
        if (imgFiuza.offset().left > 770) {
            $(".academia").addClass("originalHeight");
            $('body').unbind('keyup')
        }
        // if (imgFiuza.offset().left > 1020) {
        //     imgFiuza.css("opacity", "0");
        // }
    } else if (e.which === 37 && imgFiuza.offset().left > min) {
        imgFiuza.animate({
            left: "-=150px"
        })
    } else {
        console.log("cant move that direction");
        imgFiuza.remove()
    }
} //end fiuzaAnim function
$('body').keyup(function (e) {
    e.stopPropagation();
    animFiuza(e);
}) //end key event to move my picture

xpContainerDivs.click(function (e) {
    modal.css("display", "block");
    modal.hide().fadeIn(700)

    if ($(this).hasClass('inete')) {
        modal.css("background-image", "none");
        $('.courseInfo').removeClass('academiaTextColor');
        hCourses.text("INETE - Instituto de Educação Técnica");
        imgCourses.attr("src", "./img/experienceResources/transferir.jfif");
        pCourses.html(ineteTxt);
    }
    if ($(this).hasClass('flag')) {
        modal.css("background-image", "none");
        $('.courseInfo').removeClass('academiaTextColor');
        hCourses.text("FLAG - Formação em Design, Criatividade e Comunicação");
        imgCourses.attr("src", "./img/experienceResources/Escola-Profissional-FLAG.jpg");
        pCourses.html(flagTxt);
    }
    if ($(this).hasClass('cinel1')) {
        modal.css("background-image", "none");
        $('.courseInfo').removeClass('academiaTextColor');
        hCourses.text(`CINEL - Centro de Formação Profissional da Indústria Electrónica,
        Energia, Telecomunicações e Tecnologias da Informação`);
        imgCourses.attr("src", "./img/experienceResources/cinel.png");
        pCourses.html(cinel1);
    }
    if ($(this).hasClass('cinel2')) {
        modal.css("background-image", "none");
        $('.courseInfo').removeClass('academiaTextColor');
        hCourses.text(`CINEL - Centro de Formação Profissional da Indústria Electrónica,
        Energia, Telecomunicações e Tecnologias da Informação`);
        imgCourses.attr("src", "./img/experienceResources/cinel.png");
        pCourses.html(cinel2);
    }
    if ($(this).hasClass('cinel3')) {
        modal.css("background-image", "none");
        $('.courseInfo').removeClass('academiaTextColor');
        hCourses.text(`CINEL - Centro de Formação Profissional da Indústria Electrónica,
        Energia, Telecomunicações e Tecnologias da Informação`);
        imgCourses.attr("src", "./img/experienceResources/cinel.png");
        pCourses.html(cinel3);
    }
    if ($(this).hasClass('academia')) {
        hCourses.text(`Academia de Código`);
        imgCourses.attr("src", "./img/experienceResources/academia.JPG");
        modal.css("background-image", "url('./img/finaldaysSmaller.jpeg')")
        $('.courseInfo').addClass('academiaTextColor');
        pCourses.html(academia);
    }
}) // end xpContainers to show modal function

$(".modalClose").click(function () {
    modal.fadeOut(700);
    setTimeout(function () {
        modal.css("display", "none");
    }, 1000)
})