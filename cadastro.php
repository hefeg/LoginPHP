
<?php
include('conexao.php');

    

    if(isset($_POST['nome']) || isset($_POST['senha']) ) {

        

        if(strlen($_POST['nome']) == 0) {
            echo ("<h6>Preencha seu nome</h6>");
           
        } else if(strlen($_POST['senha']) == 0) {
            echo ("<h6>Preencha sua senha</h6>");
        } else {
       
if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    
    $query = mysqli_query($mysqli, "INSERT INTO usuarios (nome,senha,email) VALUES ('$nome', '$senha', '$email')");

    if($query){
        header("Location: index.php");
       
    }

    
    else{
        echo "não foi possível cadastrar";

        }
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
    <link href="stylecad.css" rel="stylesheet">
    
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
<fieldset>
<form method="post">

<label>Login:</label>
<input type="text" name="nome"><br><br><br>

<label>Senha:</label>
<input type="password" name="senha"><br><br><br>

<label>E-mail:</label
><input type="e-mail" name="email"><br><br><br>

<button name="cadastrar">Cadastrar</button>
<a href="index.php"><button>Logar</button></a>

</form>
</fieldset>
    
</body>
</html>