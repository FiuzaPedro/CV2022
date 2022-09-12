$(document).ready(function () {
    
    let sel = $("#selEmenta");
    $("#selEmenta").on("change", function () {
        alert(sel.val() );        
    })    
    
})//end doc ready
$("#btnReserva").on("click", function () {
    if ( $("input").val != undefined ) {
        $(".divRes").css({
            opacity: 1,
            zIndex:999
        });    
    };//end if    
})

$(".fecharConfirma").on("click", function () {
    $(".divRes").css({
        opacity: 0,
        zIndex:0
    });
    setTimeout(function () {
        $(".divRes").remove(); 
    }, 500);
})


$(".prato").on("click", function () {
    if ( $(this).prop("checked") ) {
        $(this).next().prop('disabled', false);

    } else {
        $(this).next().prop('disabled', true);
    }
    
})