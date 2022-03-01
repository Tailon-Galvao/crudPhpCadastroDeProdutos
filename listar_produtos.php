<!DOCTYPE html>
<html>
<head>
	<title>Lista de Produtos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Link referente aos icones do site https://fontawesome.com/kits/6a94f40a31/use -->
	<script src="https://kit.fontawesome.com/6a94f40a31.js" crossorigin="anonymous"></script>

	<!-- "nav nav-tabs"-->
	<ul class="nav-tabs navbar navbar-dark bg-dark" > 
		<li class="nav-item">
			<a class="nav-link active" href="listar_produtos.php">Listar</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="adicionar_produto.php">Cadastro Produtos</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Fornecedor</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disabled" href="categoria_produto.php">Categorias</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disabled" href="#"></a>
		</li>




		<form class="form-inline" style="margin-right: right">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</ul>
	




</head>
<body>
	<div class="container" style="margin-top: 30px">
		<h3>Lista de Produtos</h3>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nro Produto</th>
					<th scope="col">Nome Produto</th>
					<th scope="col">Categoria</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Ação</th> 
				</tr>
			</thead>
			<!-- Deletei o que tinha na tabela aqui e insiro o que vem do banco-->
			<tr>
				<?php
				include 'conexao.php';
					$sql = "SELECT * FROM `estoque`"; //TOMAR CUIDADO POIS AS ASPAS SIMPLES DO TECLADO NÃO FUNCIONA COPIEI DO MYSQL E COLEI AQUI.
					$busca = mysqli_query($conexao, $sql);
					while ($array = mysqli_fetch_array($busca) ) {
						$id_estoque = $array['id_estoque'];
						$nroproduto = $array['nroproduto'];
						$nomeproduto = $array['nomeproduto'];
						$categoria = $array['categoria'];
						$quantidade = $array['quantidade'];
						$fornecedor = $array['fornecedor'];

						?>
						<tr>	
							<td><?php echo $nroproduto ?></td>

							<td><?php echo $nomeproduto ?></td>

							<td><?php echo $categoria ?></td>

							<td><?php echo $quantidade ?></td>

							<td><?php echo $fornecedor ?></td>
							<td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

								<!--href="deletar_produto.php?id=<?php echo $id_estoque ?>" -->
								<a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
								
							</td>


								



								<!-- Modal esta excluindo o primeiro elemento VERIFICAR
								 id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"-->
								


								<!--EXCLUIR -->
								<!--<a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-trash-alt"></i>Excluir</a></td> -->

							</tr>

						<?php } ?>
					</tr>

				</table>
				<div style="text-align: right">
					<a href="index.php"  role="button" class="btn btn-sm btn-primary">Voltar</a>
				</div>
			</div>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</body>
		</html>