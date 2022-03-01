<?php
include 'conexao.php';

$id = $_POST['id'];
//$nroproduto=$_POST['nroproduto'];
$nomeproduto=$_POST['nomeproduto'];
$categoria=$_POST['categoria'];
$quantidade=$_POST['quantidade'];
$fornecedor=$_POST['fornecedor'];

$sql= "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE `id_estoque`=$id";


$atualizar =mysqli_query($conexao,$sql);


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container" style="width: 400px">

<center>
	<h3>Atualizado com Sucesso</h3>
	<div style="margin-top: 10px">
		<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
	</div>
</center>
</div>