<?php

include('protect.php');



if(!isset($_SESSION)){
    session_start();
}

session_destroy();


include('conexao.php');



    

   if(isset($_POST['nome_cli']) || isset($_POST['endereco_cli']) ) {

        

        if(strlen($_POST['nome_cli']) == 0) {
            echo ("<h6>Preencha seu nome</h6>");
           
        } else if(strlen($_POST['email_cli']) == 0) {
            echo ("<h6>Preencha o E-mail</h6>");
        } else {
       
if(isset($_POST['cadastrar'])){
    $nome_cli = $_POST['nome_cli'];
    $email_cli = $_POST['email_cli'];
    $endereco_cli = $_POST['endereco_cli'];
    $observacao_cli = $_POST['observacao_cli'];
    

    
    $query = mysqli_query($mysqli, "INSERT INTO clientes (nome_cli, email_cli, endereco_cli, observacao_cli) VALUES ('$nome_cli', '$email_cli', '$endereco_cli', '$observacao_cli')");



    if($query){
        echo ("<h6>Cadastrado</h6>");
       
    }

    
    else{
        echo ("<h6>não foi possível cadastrar</h6>");

        }
    }
    }

    if(isset($_POST['home'])){

        header("Location: index.php");

    }

    

    
   

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styleclientes.css" rel="stylesheet">
   
    <title>Painel</title>
</head>
<body>
    <div class="container">
  <div class="nav"> <ul class="menu">
		<li><a href="painel.php">Home</a></li>
	
	  		<li><a href="#">Cadastro</a>
	         	<ul> 
                      <li><a href="clientes.php">Cadastro de Clientes</a></li>
                      <li><a href="clientesexbir.php">Lista de Clientes</a></li>
	                  <li><a href="#">Empresas</a></li>
	                  <li><a href="#">Produtos</a></li>
	       		</ul>
			</li>
		
		<li><a href="index.php" name="sair" method="post">Sair</a></li></div>
        
  </div>

<fieldset>
<legend>Cadastro de Cliente</legend>
<form method="post">

<label>Nome: </label>
<input type="text" name="nome_cli"><br><br><br>

<label>E-mail: </label>
<input type="e-mail" name="email_cli"><br><br><br>

<label>Endereço: </label>
<input type="text" name="endereco_cli"><br><br><br>

<label>Observação: </label>
<input type="text" name="observacao_cli"><br><br><br>

<button name="cadastrar">Cadastrar</button>
&nbsp;
<input type="reset" name="limpar" value="Limpar" id="botao">






</form>
</fieldset>






    
</body>
</html>