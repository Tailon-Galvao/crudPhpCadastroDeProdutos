<?php
include 'conexao.php';
//Estou pegando o id_estoque das variavel do listar_produtos.php
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>FORMULÁRIO DE CADASTRO</title>
	<!-- BOOTSTRAP ABAIXO-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css"> /* css configuração geral dos container*/
		#tamanhoContainer{
			width: 500px;
		}

		#botao{
			background-color: #FF1168; /*Cor de Fundo*/
			color: #ffffff; /* Cor da letra*/
		}

	</style>


</head>
<body>
<div class="container" id="tamanhoContainer" style="margin-top: 40px"> <!-- do style ate o final e css -->
	<h4>Editar Produto</h4>
  <form action="atualizar_produto.php" method="post" style="margin-top: 30px">
  		<?php
  			$sql="SELECT * FROM `estoque` where id_estoque=$id";
  			$busca = mysqli_query($conexao, $sql);

  			while ($array = mysqli_fetch_array($busca) ) {
						$id_estoque = $array['id_estoque'];
						$nroproduto = $array['nroproduto'];
						$nomeproduto = $array['nomeproduto'];
						$categoria = $array['categoria'];
						$quantidade = $array['quantidade'];
						$fornecedor = $array['fornecedor'];
			
	   ?>
	  <div class="form-group">
    		  <label>Nº do Produto</label>
    		  <input type="number" class="form-control" name="nroproduto" value=<?php echo $nroproduto ?> disabled>
    		  <!-- Estou trazendo o id_estoque, mas deixando ele desabilitado para ser mostrado na tela
    		  	é com ele que vou atualizar meus dados na tela de atualizar_produto.php--> 
    		  <input type="number" class="form-control" name="id" value=<?php echo $id ?> style="display: none">
      </div>
    	<div class="form-group">
    		  <label>Nome do Produto</label>
    		  <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>" >
    	</div>

    	<div class="form-group">
    		  <label>Categoria</label>
    		  <select class="form-control" name="categoria">
     			  <option>Periféricos</option>
      			<option>Hardware</option>
      			<option>Software</option>
      			<option>Headsets</option>
       		</select>
 		  </div>
 		 <div class="form-group">
    		<label>Quantidade</label>
    		<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
     </div>
 		 <div class="form-group">
    		<label>Fornecedor</label>
    		<select class="form-control" name="fornecedor">
     			  <option>Fornecedor A</option>
      			<option>Fornecedor B</option>
      			<option>Fornecedor C</option>
      			<option>Fornecedor D</option>
       	</select>
 		 </div>
     <div style="text-align: right;">
      <a href="listar_produtos.php" class="btn btn-sm btn-primary" style="color:#fff">Voltar</a>
      <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>

    </div>
  </form>
	<?php } ?>
</div>


<!-- BOOTSTRAP ABAIXO-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>