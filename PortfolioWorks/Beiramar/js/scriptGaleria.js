let lightbox = $("#lightbox");
let lightboxJS = document.getElementById("lightbox");
let doc = window;
let btnClose = $("#close"); 


btnClose.on("click", function () {    
    lightbox.css({
        opacity:0,
        zIndex:-1
    })//end css lightbox
}) //end btnclose function

let arrayImgs = $("ul img"); 
        arrayImgs.on("click", function (e) {
        let imgSource = e.target.src;
        
        var indiceNomeFoto = imgSource.indexOf(".jpg");
        
        var sliced = imgSource.slice(62, indiceNomeFoto );
        console.log(imgSource.length); 
        console.log(indiceNomeFoto); //66
        console.log(sliced);
        
        urlImgs = "url(img/galeria/" +  sliced + ".jpg)";        
        lightbox.css({
            opacity:1, 
            zIndex: 99999999,
            backgroundImage: urlImgs
        });
    }); //end arrayImgs event

    doc.addEventListener("keypress", function () {
        lightboxJS.style.opacity = 0;
        lightboxJS.style.zIndex = -1;        
    });
   
   