<?php
// nesse include estou dizendo que o arquivo conexao.php faz parte desse arquivo inseri_produto, logo ele herda todas as variaveis. 
include 'conexao.php';

//Estou pegando os dados dos inputs na qual coloquei em name, ex name=nomeproduto a variavel que vou armazernar os dados digitado pelo usuário, importante o metodo que estou usando e o POST e dentro dele passo a variavel e armazeno em outro para posteriormente coloca no banco

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

//Passando as variaveis para poder inserir no banco
$sql= "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
// a variavel $conexao e do arquivo conexao.php, o que estou fazendo abaixo, estou conectando e posteriormente inserindo os dados no banco com a variavel $sql
$inserir = mysqli_query($conexao, $sql);



?>



<div class="container" style="width: 400px">

	<center>
		<h3> Produto Adicionado com Sucesso</h3>
		<div style="margin-top: 10px">
			<a href="listar_produtos.php" class="btn btn-sm btn-primary" style="color:#fff">Voltar</a>
		</div>
	</center>
</div>




