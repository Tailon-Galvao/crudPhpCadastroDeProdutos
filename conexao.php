<?php
//servename é localhost, mas caso eu for hospedar o servidor mvai me fornecer o servername
$servername = "localhost";
$database = "curso_estoque";
$username= "root";
$password= "";

//Creando conexao com o banco de dados
$conexao=mysqli_connect($servername, $username, $password, $database);

?>
<!-- Link abaixo do bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- <div class="container" style="width: 500px; margin-top: 30px" >
	<h4>Produto Adicionado com Sucesso!</h4>
	<div style="padding-top: 20px">
		<center>
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Ítem</a>
		</center>
	</div>
</div>

-->