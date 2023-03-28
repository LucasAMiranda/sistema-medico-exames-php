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


    // Verifique se as informações de login são válidas
    if ($nome == 'nome' && $idade == 'idade' && $email == 'email') {
        // Se as informações de login forem válidas, defina a variável de sessão 'nome', 'idade', 'email' e redirecione para a página 'index.php'
        $_SESSION['nome'] = $nome;
        $_SESSION['idade'] = $idade;
        $_SESSION['email'] = $username;
        header('Location: index.php');
        exit;
    } else {
        // Se as informações de login não forem válidas, exiba uma mensagem de erro
        $error = "As informações foram inválidas";
    }



    if(mysqli_query($con, $sql)){
        echo "Login criado com sucesso!";
    }else{
        echo "Erro ao Tentar fazer o Login!:".mysqli_error($conn);
    }
?>
