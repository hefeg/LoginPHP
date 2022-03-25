<?php

include('protect.php');


if(!isset($_SESSION)){
    session_start();
}

session_destroy();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylepainel.css" rel="stylesheet">
   
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


    
</body>
</html>