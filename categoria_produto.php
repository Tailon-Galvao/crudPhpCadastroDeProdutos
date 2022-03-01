<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Categorias</title>
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
	<h4>Cadastro de Categoria</h4>
  <form action="inserir_categoria.php" method="post" style="margin-top: 30px">


    <div class="form-group">
          <label>Nome Categoria</label><!--autocomplete é para não sugerir para completar nada e o required é para obrigar o usuario preencher os campos -->
          <input type="text" class="form-control" name="categoria" placeholder="Insira a categoria" autocomplete="off" required>
    </div>
    <div class="form-group">
      <label>Categoria</label>
      <select class="form-control" name="categoriaSelec">

        <?php
        include 'conexao.php';
            $sql = "SELECT * FROM `categoria_produto` order by categoria ASC";

            $busca = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca) ) {

              $id_categoria = $array['id_categoria'];
              $categoria = $array['categoria'];
              
              ?>  
              
              <option><?php echo $categoria ?></option>
              
              

            <?php } ?>
          </select>
        </div>
    

    	
 		 

     <div style="text-align: right;">
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
      <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>

    </div>
  </form>
</div>


<!-- BOOTSTRAP ABAIXO-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>