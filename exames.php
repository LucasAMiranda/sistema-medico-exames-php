<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema de Exames</title>
    <link rel="stylesheet" href="css/exames.css" />
</head>
<body>
	<h1>Sistema de Exames</h1>
	<form method="POST" action="exames.php">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome"><br>

		<label for="resultado">Resultado:</label>
		<input type="text" id="resultado" name="resultado"><br>

		<label for="data">Data:</label>
		<input type="date" id="data" name="data"><br>

		<input type="submit" value="Salvar">
	</form>

    <?php 

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'cadastro';

        $conn = mysqli_connect($servername, $username, $password ,$database);

        //Declarando as variáveis
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $resultado = $_POST['resultado'];

        //Verificar se a conexão foi bem sucedida 

        //criando um estrutura condicional

        if(!$conn){
            die("A conexão do banco de dados falhou: ". mysqli_connect_error());
        }
            
            //Definindo um modo de operação

            $mode = isset($_GET['mode']) ? $_GET['mode']: ""; //Vai verifica se a váriável foi definida, se variável mode foi definida então ele executa a requisição GET, caso contrário vai retorna vazio.

            // verifica o modo

            if($mode == 'create'){
                //Crie um exame
                if(isset($_POST['create'])){ 
                    $nome = mysqli_real_escape_string($conn, $_POST['nome']); //envia pro banco dados a variável nome com um conjunto de dados do tipo string.
                    $data = mysqli_real_escape_string($conn, $_POST['data']);
                    $resultado = mysqli_real_escape_string($conn, $_POST['resultado']);

                }
            }
            

            $sql = "INSERT INTO exames (nome, data, resultado) VALUES ('$nome','$data', '$resultado' )";

            //Verificando a condicional de consulta do banco de dados exames

            if(mysqli_query($conn, $sql)){
                echo "Exame criado com sucesso!";
            }else{
                echo "Erro ao criar o exame:".mysqli_error($conn);
            }
            

    
    ?>
</body>
</html>
