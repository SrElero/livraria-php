<!DOCTYPE html>
<html>
<head>
	<title> Formulário de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form name="formcadastro_livro" action="cadastra_livro.php" method="POST">
		<h1> Cadastrar novo livro </h1>

		<p class="cod_livro">
			<h4> Código do livro:
			<input type="text" name="cod_livro" placeholder="Ex.: 00000" required="required">
		</p>

		<p class="isbn">
			<h4> ISBN:*
			<input type="text" name="isbn" placeholder="Ex.: 000-00-0000-000-0" required="required">
		</p>

		<p class="nome_livro">
			<h4> Nome:*
			<input type="text" name="nome_livro" placeholder="Ex.: O Código da Vinci" required="required">
		</p>

		<p class="autor">
			<h4> Autor:*
			<input type="text" name="autor" placeholder="Ex.: Dan Brown" required="required">
		</p>	

		<p class="ano">
			<h4> Ano:
			<input type="text" name="ano" placeholder="Ex.: 2020">
		</p>

		<p class="edicao">
			<h4> Edição:
			<input type="text" name="edicao" placeholder="Ex.: 2">
		</p>

		<p class="editora">
			<h4> Editora:*
			<input type="text" name="editora" placeholder="Ex.: Panda Books" required="required">
		</p>

		<p class="enviar">
			<input type="submit" name="enviar" value="Cadastrar">
		</p>

	</form>

</body>
</html>