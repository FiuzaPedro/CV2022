$(".listaEmenta li").on("click", function () {
    //variáveis necessárias
    let listItem = $(this);
    let listItemId =  $(this).attr("id");    
    let Divs = $("#divEntradas, #divCarnes, #divPeixes, #divVegetariano, #divSobremesas, #divBebidas");
    
    switch (listItemId) {
        case "entrada":
            $(".listaEmenta li:not(#entrada)").removeClass("activeEmenta");  
            listItem.addClass("activeEmenta");
            $(".divsEmenta:not(#divEntradas)").css({
                opacity: 0,
                display: "none"
            });
            Divs.eq(0).css("display", "block");
            Divs.eq(0).animate({opacity: 1},300);
        break;
        case "carne":
            $(".listaEmenta li:not(#carne)").removeClass("activeEmenta");
            listItem.addClass("activeEmenta");
            $(".divsEmenta:not(#divCarnes)").css({
                opacity: 0,
                display: "none"
            });
            Divs.eq(1).css("display", "block");
            Divs.eq(1).animate({opacity: 1},300);

        break;
        case "peixe":
            $(".listaEmenta li:not(#peixe)").removeClass("activeEmenta");
            listItem.addClass("activeEmenta");
            $(".divsEmenta:not(#divPeixes)").css({
                opacity: 0,
                display: "none"
            });
            Divs.eq(2).css("display", "block");
            Divs.eq(2).animate({opacity: 1},300);
        break;
        case "vegetariano":            
            $(".listaEmenta li:not(#vegetariano)").removeClass("activeEmenta");
            listItem.addClass("activeEmenta");
            $(".divsEmenta:not(#divVegetariano)").css({
                opacity: 0,
                display: "none"
            });
            Divs.eq(3).css("display", "block");
            Divs.eq(3).animate({opacity: 1},300);
        break;
        case "sobremesa":
            $(".listaEmenta li:not(#sobremesa)").removeClass("activeEmenta");
            listItem.addClass("activeEmenta");
            $(".divsEmenta:not(#divSobremesas)").css({
                opacity: 0,
                display: "none"
            });
            Divs.eq(4).css("display", "block");
            Divs.eq(4).animate({opacity: 1},300);
        break;
        case "bebidas":
            $(".listaEmenta li:not(#bebidas)").removeClass("activeEmenta");
            listItem.addClass("activeEmenta");
            $(".divsEmenta:not(#divBebidas)").css({
                opacity: 0,
                display: "none"
            });
            Divs.eq(5).css("display", "block");
            Divs.eq(5).animate({opacity: 1},300);
        break;
    }
})