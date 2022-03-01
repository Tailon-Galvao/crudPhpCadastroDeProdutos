<?php 
include 'conexao.php';

$categoria =$_POST['categoria'];

$sql="INSERT INTO `categoria_produto`(`categoria`) VALUES ('$categoria')";

$inseri = mysqli_query($conexao, $sql);


?>
<div class="container" style="width: 400px">
<center>
	<h3> Categoria Adicionado com Sucesso</h3>
	<div style="margin-top: 10px">
		<a href="categoria_produto.php" class="btn btn-sm btn-primary" style="color:#fff">Voltar</a>
	</div>
</center>
</div>
