<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet"  href="css/style.css"/>
</head>
<body>
    <h1>Login de Acesso</h1>
    <?php if (isset($error)): ?>
        <p><?php echo $error ?></p>
    <?php endif; ?>

    <form method="POST" action="form.php">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" /><br/>
        <label>Idade: </label>
        <input type="number" name="idade" id="idade"><br />
        <label>Email: </label>    
        <input type="email" name="email" id="email"><br />
        <button id="salvar" value="Enviar" onclick="salvarDados()">Salvar</button>
    </form>

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

   
        session_start();

        if (isset($_POST['nome']) && isset($_POST['idade']) && isset($_POST['email'])){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $email = $_POST['email'];
        // Verifique se as informações de login são válidas
            if ($nome == 'nome' && $idade == 'idade' && $email == 'email') {
                // Se as informações de login forem válidas, defina a variável de sessão 'nome', 'idade', 'email' e redirecione para a página 'index.php'
                $_SESSION['nome'] = $nome;
                $_SESSION['idade'] = $idade;
                $_SESSION['email'] = $email;
                header('Location: exames.php'); //Faz o redirecionamento 
                exit;
            }else{
                // Se as informações de login não forem válidas, exiba uma mensagem de erro
                  $error = "Informações inválidas";
            }
        }
   
    ?>

      



    <script src="js/main.js"></script>
</body>
</html>