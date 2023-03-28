//Validar formulário com Javascript

function salvarDados(){

    //Resgatando as informações do pelo id do elemento input html

    let nome = document.getElementById("nome").value
    let idade = document.getElementById("idade").value
    let email = document.getElementById("email").value


    //validar formulário de login 

    if(nome===""){
        alert("Por favor preencha o campo nome!")
        return nome
    }
    else if(idade===""){
        alert("Por favor preecha o campo idade!")
        return idade
    }
    else if(email===""){
        alert("Por favor preecha o campo email!")
        return email
    }
}