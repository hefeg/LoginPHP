<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo ("<h6>Preencha seu E-mail</h6>");
    } else if(strlen($_POST['senha']) == 0) {
        echo ("<h6>Preencha sua senha</h6>");
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 0) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
            <h2>Preencha todos os dados</h2>
            <fieldset>
                <legend>Área de Login</legend>
            <form action="" method="POST">
            <label>E-mail</label>    
            <input type="text" name="email" ><br><br>
            <label>Senha</label>   
            <input type="password" name="senha" ><br><br><br>

              
                <button type="submit" class="btn">Entrar</button>
                <input type="reset" name="limpar" value="Limpar" id="botao">
                
            </form>
            </fieldset> 

            <h5><a href="cadastro.php"><button class="cadastro">Faça seu cadastro</button></a></h5>
            <h4>Todos os direitos reservados</h4>

    
</body>
</html>