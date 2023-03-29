<?php 
        include 'index.php';
        //consulta a conexão e insere os dados do banco de dados, se as informações forem válidade, senão mostra a saída de dados retornando um erro na conexão e falha ao fazer o login.
        if(mysqli_query($con, $sql)){
            echo "Login criado com sucesso!";
        }
        else{
            echo "Erro ao Tentar fazer o Login!:".mysqli_error($conn);
        }

?>