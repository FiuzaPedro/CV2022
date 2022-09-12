function teste() {
	var direito = document.getElementById("divDireito");
	var esquerdo = document.getElementById("divEsquerdo");
	var texto = document.getElementById("hTexto");
	var divTexto = document.getElementById("divTexto");
	
	direito.style.width = "0px";
	esquerdo.style.width = "0px";
	texto.style.top = "50%"; texto.style.width ="98%";
	var divImagem = document.getElementById("divImagem");
	var imagem = document.createElement('img');	
	imagem.setAttribute('class','imgIntro');
	imagem.setAttribute('src', 'img/capa.jpg');
	divImagem.append(imagem);
	setTimeout(function () { imagem.style.opacity ="0.8" }, 1000);
}
window.addEventListener("load", teste);
setTimeout(function () {
	window.location = "cozinhadebairro.html";
},4000);