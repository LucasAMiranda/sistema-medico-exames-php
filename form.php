<?php 

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];


    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'cadastro';


    $con =  mysqli_connect($servername, $username, $password, $database);

    $sql = "INSERT INTO dados (nome, idade, email) VALUES ('$nome', '$idade', '$email')";

    if(mysqli_query($con, $sql)){
        echo "Login criado com sucesso!";
    }else{
        echo "Erro ao Tentar fazer o Login!:".mysqli_error($conn);
    }
?>
