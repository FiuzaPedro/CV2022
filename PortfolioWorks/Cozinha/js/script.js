//inicio da seta voltar cima
let seta = $('.arrowUp');
$(document).on('scroll', function () {
	if ( $(document).scrollTop() === 0 ) {
		seta.css("opacity","0");
	} else {
		seta.css("opacity","1");
	}	
});
seta.on("click", function () {
	let posInicio = 0;
	$('html, body').animate({
          scrollTop: posInicio
        }, 1000 )	
})
//final seta voltar acima


let idLinks = $('#ulNav>li>a'); //var contém os id's dos links pertencentes à ul da NAVBar
let parallaxes = $('.parallaxHome1, .parallaxHome2, .parallaxHome3');
let imgLogo = $('.imgLogo');
let winWidth = $(window).width();

idLinks.on('click', function (e) {
	switch(this.id) {
		case "aHome": e.preventDefault();
			let posHome = 200;
			$('html, body').animate({
		          scrollTop: posHome
		        }, 1000 );	
			if (winWidth > 700) {
				imgLogo.animate({height: "200px"}, 250);	
			};		
			
			idLinks.not("#aHome").removeClass("active");
			$("#aHome").addClass("active");
			parallaxes.fadeIn(150);
			$("section:not(#sectionHome)").css("display","none").animate({opacity: 0, height: "0px"},100);
			$("#sectionHome").css("display","inline").animate({opacity:1, height: "1100px"}, 100) ;
		;break;
		case "aEmenta": e.preventDefault();
			imgLogo.animate({height: "0px"}, 250).css("display", "none");
			idLinks.not("#aEmenta").removeClass("active");
			$("#aEmenta").addClass("active");
			parallaxes.fadeOut(150); 
			$("section:not(#sectionEmenta)").animate({opacity: 0, height: "0px"}, 100).css("display","none");
			$("#sectionEmenta").css("display","inline").animate({opacity:1, height: "auto"}, 100);			
			break;
		case "aBar": e.preventDefault();
			imgLogo.animate({height: "0px"}, 250).css("display", "none");			
			idLinks.not("#aBar").removeClass("active");
			$("#aBar").addClass("active");
			parallaxes.fadeOut(150);
			$("section:not(#sectionBar)").css("display","none").animate({opacity: 0, height: "0px"}, 100);
			$("#sectionBar").css("display","inline").animate({opacity:1, height: "auto", width: "100%"}, 100) ;
			;break;
		case "aEquipa": e.preventDefault();
			imgLogo.animate({height: "0px"}, 250).css("display", "none");			
			idLinks.not("#aEquipa").removeClass("active");
			$("#aEquipa").addClass("active");
			parallaxes.fadeOut(150);
			$("section:not(#sectionEquipa)").css("display","none").animate({opacity: 0, height: "0px"}, 100);
			$("#sectionEquipa").css("display","inline").animate({opacity:1, height: "auto"}, 100) ;
			;break;
		case "aReservas": e.preventDefault();
			imgLogo.animate({height: "0px"}, 250).css("display", "none");			
			idLinks.not("#aReservas").removeClass("active");
			$("#aReservas").addClass("active");
			parallaxes.fadeOut(150);
			$("section:not(#sectionReservas)").css("display","none").animate({opacity: 0, height: "0px"}, 100);
			$("#sectionReservas").css("display","inline").animate({opacity:1, height: "auto"}, 100) ;
			;break;		  
	} //end switch case
}) //end function