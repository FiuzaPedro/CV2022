let winWidth = $(window).width();

let scrollNumero;
if (winWidth < 800) {
    scrollNumero = 500;
} else {
    scrollNumero = 600;
}

$(window).on("scroll", function () {    
    if ($(window).scrollTop() > scrollNumero ) {
        $("#footer").css("opacity", "1");
    }
    else {
        $("#footer").css("opacity", "0");
    }
})  //end função para mostrar o footer após certo scrolldown

let mob = $("#mob");
let listaLinks = $("ul li:not(.burgerMenu)");
function mobileAnim() { // função para animar mobilebtns
    $(".bar1").toggleClass("bar1Change");
    $(".bar2").toggleClass("bar2Change");
    $(".bar3").toggleClass("bar3Change");
    listaLinks.toggleClass("listVisible");
}

mob.on("click", mobileAnim);


// maneira de ver a página activa e mudar o estado nos "a"
let locat = window.location.href;
let indice = locat.lastIndexOf("/");
let currentPage = locat.slice(indice + 1, locat.length);
function toggleActive() {    
    switch (currentPage) {
        case "sobre.php":        
        $("#aSobre").addClass("activeLink");    
        $("a:not(#aSobre)").removeClass("activeLink");        
        break;
        case "ementa.php":        
        $("#aEmenta").addClass("activeLink");    
        $("a:not(#aEmenta)").removeClass("activeLink");        
        break;
        case "staff.php":        
        $("#aStaff").addClass("activeLink");    
        $("a:not(#aStaff)").removeClass("activeLink");        
        break;
        case "ementa.php":        
        $("#aEmenta").addClass("activeLink");    
        $("a:not(#aEmenta)").removeClass("activeLink");        
        break;
        case "galeria.php":        
        $("#aGaleria").addClass("activeLink");    
        $("a:not(#aGaleria)").removeClass("activeLink");        
        break;
        case "reservas.php":        
        $("#aReservas").addClass("activeLink");    
        $("a:not(#aReservas)").removeClass("activeLink");        
        break;
        case "contactos.php":        
        $("#aContactos").addClass("activeLink");    
        $("a:not(#aContactos)").removeClass("activeLink");        
        break;    
        default:
            break;
    } //end switch case
}//end function
$(window).on("load", toggleActive); //event listener para activeclass dos links

$("#spanUp").on("click", function () {
    $("html, body").animate({ scrollTop: "0px" });
})