<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	<title>Cadastro de Produtos</title>
     <link rel="stylesheet" href="../css/estilo.css"> 
	<style>
		.fotos {
			width: 300px;
			height: 200px;
		}
	</style>

	</head>

	<body>
        <div class="login-container">
		<h1>Cadastrar Produto</h1>
		<form action="../model/inserirproduto.php" method="POST" enctype="multipart/form-data" name="cadastro" >
			<br>
			Produto:<br>
			<input type="text" name="produto"><br><br>
			Preço:<br>
			<input type="text"  name="preco">
			<br><br>
            Modelo:<br>
			<input type="text"  name="modelo">
			<br><br>
            Gênero (Fem ou Masc):<br>
			<input type="text"  name="genero">
			<br><br>
			Imagem do produto:
			<input type="file" name="foto" id="foto"><br><br>
			<input type="submit" id="bmitBtn" name="Cadastrar" value="Cadastrar">
		</form>
        <p><a href="../index.php">Voltar para o início</a></p>
        </div>
	</body>
</html>