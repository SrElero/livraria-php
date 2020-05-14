<!DOCTYPE html>
<html>
<head>
	<title> Empréstimo </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form name="form_emprestimo" action="cadastra_emprestimo.php" method="POST">
		<h1> Realizar empréstimo </h1>

		<p class="cliente_emprest">
			<h4> CPF do cliente:*
			<input type="text" name="cliente_emprest" placeholder="Ex.: 111.000.222-33" required="required">
		</p>

		<p class="cod_emprest">
			<h4> Código do livro:*
			<input type="text" name="cod_emprest" placeholder="Ex.: 25674" required="required">
		</p>

		<p class="date_emprest">
			<h4> Data do empréstimo:*
			<input type="date" name="data_emprest" placeholder="Ex.: 11/05/1999" required="required">
		</p>

		<p class="enviar">
			<input type="submit" name="enviar" value="Emprestar">
		</p>

	</form>
</body>
</html>