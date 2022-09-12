//function em puro JS
let mobileMenu = document.getElementById("burgerMenu");
function changingState() {
    mobileMenu.classList.toggle("change");
}
mobileMenu.addEventListener("click", changingState);
//end function e event listener da function em JS




//function em jQuery
let mob = $("#mobileLinks"); let listaMobile = $(".ulMobile");
function mobileAction() {
	if ($("#burgerMenu").hasClass("change")) {
    	mob.css("height", "100%");
        listaMobile.css("display","block");        
    	setTimeout(function () {
            listaMobile.css("opacity", "1")    		            
    	}, 500)
    } else {
    	listaMobile.css("opacity", "0");    	
    	mob.css("height", "10%");
        setTimeout(function () {    		           
            listaMobile.css("display","none");
    	}, 1000) 
    } //end else if 
} // end burgerMenu function em jQuery

$("#burgerMenu").on("click", mobileAction) 

$(".ulMobile a[href*='#']").on("click", function (e) {  		    
    e.preventDefault();
    link = $(this.hash);
    if (link.length) {
        $("html, body").animate({
            scrollTop: link.offset().top - 50
        }, 700)  //end animate  

        listaMobile.css("opacity", "0").css("zIndex", "-1").css("display","none");    	
        setTimeout(function () {
        	mob.css("height", "10%");
        });
        changingState() 
    } //end if
}) //end ulMobile links function