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

    <form method="POST" action="form.php">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome" /><br/>
        <label>Idade: </label>
        <input type="number" name="idade" id="idade"><br />
        <label>Email: </label>    
        <input type="email" name="email" id="email"><br />
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>