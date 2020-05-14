<!DOCTYPE html>
<html>
<head>
	<title> Devolução </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form name="form_devolucao" action="cadastra_devolucao.php" method="POST">
		<h1> Realizar devolução </h1>

		<p class="cliente_devol">
			<h4> CPF do cliente:*
			<input type="text" name="cliente_devol" placeholder="Ex.: 111.000.222-33" required="required">
		</p>

		<p class="cod_devol">
			<h4> Código do livro:*
			<input type="text" name="cod_devol" placeholder="Ex.: 24567" required="required">
		</p>

		<p class="date_devol">
			<h4> Data da devolução:*
			<input type="date" name="data_devol" placeholder="Ex.: 11/05/1999" required="required">
		</p>

		<p class="enviar">
			<input type="submit" name="enviar" value="Devolver">
		</p>

	</form>
</body>
</html>