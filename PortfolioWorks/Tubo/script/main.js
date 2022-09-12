//links transitions
$("nav a[href*='#']").on("click", function (e) {   
    e.preventDefault();
    $("nav a").removeClass("activeLink");
    $(this).addClass("activeLink");
    link = $(this.hash);
    if (link.length) {
        $("html, body").animate({
            scrollTop: link.offset().top - 100
        }, "slow")  //end animate  
    } //end if
})

$(document).ready(function () {
	setTimeout(function () {
		$(".hHome").addClass("lightSpeedOut");				
	}, 2000);
	setTimeout(function () {
		$(".hHome").remove();
	},4000);

	$(document).on("scroll", function() {
	  let scrolledPx = window.pageYOffset;
	  var winScroll =
	    document.body.scrollTop || document.documentElement.scrollTop;
	  var height =
	    document.documentElement.scrollHeight -
	    document.documentElement.clientHeight;
	  let taxaScrolled = (winScroll / height) * 100;
	  let insideBar = $(".insideBar");
	  insideBar.stop().animate(
	    {
	      width: taxaScrolled + "%"
	    },
	    150
	  );
	});
})