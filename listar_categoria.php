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
		<h3>Listar Categoria</h3>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome Categoria</th>
					<th scope="col">Ação</th> 
				</tr>
			</thead>
			<!-- Deletei o que tinha na tabela aqui e insiro o que vem do banco-->
			<tr>
				<?php
				include 'conexao.php';
					$sql = "SELECT * FROM `categoria_produto`"; //TOMAR CUIDADO POIS AS ASPAS SIMPLES DO TECLADO NÃO FUNCIONA COPIEI DO MYSQL E COLEI AQUI.
					$busca = mysqli_query($conexao, $sql);
					while ($array = mysqli_fetch_array($busca) ) {
						$id_categoria = $array['id_categoria'];
						$categoria = $array['categoria'];
						
						?>
						<tr>	

							<td><?php echo $categoria ?></td>

							<td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

								<a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
							</td>
																
								<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Excluir Categoria</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Deseja realmente excluir a Categoria?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>

												<a href="deletar_categoria.php?id=<?php echo $id_categoria?>" role="button">
													<button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Sim</button>
												</a>
											</div>
										</div>
									</div>
								
								</div>	-->
								
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