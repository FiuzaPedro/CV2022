//IDs -> tipo, datas, numPessoas, nome, email, telefone
let tipo = $("#tipo"), datas = $("#datas"), numPessoas = $("#numPessoas"),
    nome = $("#nome"), email = $("#email"), telefone = $("#telefone");

$("#efectuar").on("click", function (e) {
    e.preventDefault();
    //date variables        
    let scheduledDate = new Date(datas.val()),
        currentDate = new Date(),

        currentMonth = (currentDate.getMonth() + 1),
        currentDay = currentDate.getDate(),
        currentYear = currentDate.getFullYear(),

        scheduledYear = scheduledDate.getFullYear(),
        scheduledMonth = (scheduledDate.getMonth() + 1),
        scheduledDay = scheduledDate.getDate();

    let diferencaMeses = (scheduledMonth - currentMonth);
    let diferencaDias = scheduledDay - currentDay;
    let diferencaAnos = scheduledYear - currentYear;

    //values variables
    let nomeValue = nome.val(),
        telValue = telefone.val(),
        mailValue = email.val();


    //controlo do tipo de evento     
    if (tipo.val() == "") {
        alert("Tem de escolher o tipo de evento!")
    } //controlo da data
    else if (diferencaMeses < 0 || diferencaDias <= 0 || diferencaAnos != 0) {
        alert("Datas inválidas!");
        return false;
    }
    else if (
        (numPessoas.val() < 1 || numPessoas.val() > 50 ||
            isNaN(numPessoas.val()))
    ) {
        alert("Máximo número de pessoas é de 40 ou caracteres não aceites!");
        return false;
    } else if (nomeValue.length < 2 || nomeValue === undefined) {
        alert("Nome inválido ou vazio!");
        return false;
    } else if (telValue.length < 5 || telValue === undefined) {
        alert("Telefone inválido ou incompleto!");
        return false;
    }

    for (let i = 0; i < nomeValue.length; i++) {
        if (!(nomeValue[i].toUpperCase() >= "A" && nomeValue[i].toUpperCase() <= "Z") || nomeValue.length < 2) {
            console.log("Caractere inserido inválido ou em falta!");
            return false;
        } else {
            console.log(nomeValue);
        }
    }//end nome for

    for (let i = 0; i < telValue.length; i++) {
        if ((telValue[i] > 9 && telValue[i] < 0)) {
            console.log("Caractere inválido no campo do telefone!");
            return false;
        } else {
            console.log(telValue);
        }
    }//end telefone for

    //controlo do input do email
    let posicaoArroba = mailValue.indexOf("@");
    if (!(posicaoArroba > 0 && posicaoArroba < mailValue.length - 1)) {
        alert("Mail incompleto!");
        return false;
    } if (mailValue.indexOf("@", posicaoArroba + 1) !== -1) {
        alert("Mail incorrecto!");
        return false;
    } else {
        return true;
    } //end controlo do input do email

}) //end reservar inputsubmitbutton  onclick event

