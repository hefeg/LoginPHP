<?php

include('conexao.php');

$sql_code = "SELECT * FROM clientes";
$sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
$linha = $sql_query->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styleclienteexbir.css" rel="stylesheet">
    <title>Document</title>
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
<table cellpadding=15 class="info" >

<tr>
    <td>Codigo Cliente</td>
    <td>Nome</td>
    <td>E-mail</td>
    <td>Endereço</td>
    <td>Observações</td>
</tr>
<?php 
do{
?>
<tr>
    <td><?php echo $linha['id_cliente'];?></td>
    <td><?php echo $linha['nome_cli'];?></td>
    <td><?php echo $linha['email_cli'];?></td>
    <td><?php echo $linha['endereco_cli'];?></td>
    <td><?php echo $linha['observacao_cli'];?></td>
    <td>
    <a href="clientes.php">Editar</a></li>
    <a href="clientes.php">Deletar</a></li>
    </td>
</tr>
<?php } while(  $linha = $sql_query->fetch_assoc()
); ?>

</table>

<input type="text" class="pesquisa" ><br><br>
 
<button name="pesquisar" class="btn">pesquisar</button>
    
</body>
</html>