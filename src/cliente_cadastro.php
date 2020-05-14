<!DOCTYPE html>
<html>
<head>
	<title> Formulário de Cadastro </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form name="formcadastro_cliente" action="cadastra_cliente.php" method="POST">
		<h1> Cadastrar novo usuário </h1>

		<p class="nome">
			<h4> Nome:*
			<input type="text" name="nome" placeholder="Ex.: João Pereira da Silva" required="required">
		</p>

		<p class="cpf">
			<h4> CPF:*
			<input type="text" name="cpf" placeholder="Ex.: 111.222.333-44" required="required">
		</p>

		<p class="telefone">
			<h4> Telefone:*
			<input type="text" name="telefone" placeholder="Ex.: (41) 99933-5567" required="required">
		</p>	

		<p class="email">
			<h4> E-mail:
			<input type="email" name="email" placeholder="Ex.: joaosilva@email.com.br">
		</p>

		<p class="enviar">
			<input type="submit" name="enviar" value="Cadastrar">
		</p>

	</form>

</body>
</html>

