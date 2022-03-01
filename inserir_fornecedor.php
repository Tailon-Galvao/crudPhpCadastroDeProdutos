<?php
// nesse include estou dizendo que o arquivo conexao.php faz parte desse arquivo inseri_produto, logo ele herda todas as variaveis. 
include 'conexao.php';

//Estou pegando os dados dos inputs na qual coloquei em name, ex name=nomeproduto a variavel que vou armazernar os dados digitado pelo usuário, importante o metodo que estou usando e o POST e dentro dele passo a variavel e armazeno em outro para posteriormente coloca no banco

$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];



//Passando as variaveis para poder inserir no banco
$sql ="INSERT INTO `fornecedor`(`nome`, `cnpj`) VALUES ('$nome','$cnpj')";
// a variavel $conexao e do arquivo conexao.php, o que estou fazendo abaixo, estou conectando e posteriormente inserindo os dados no banco com a variavel $sql
$inserir = mysqli_query($conexao, $sql);



?>



<div class="container" style="width: 400px">

	<center>
		<h3> Fornecedor Cadastrado com Sucesso</h3>
		<div style="margin-top: 10px">
			<a href="cadastrar_fornecedor.php" class="btn btn-sm btn-primary" style="color:#fff">Voltar</a>
		</div>
	</center>
</div>




