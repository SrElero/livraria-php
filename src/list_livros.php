<?php
include_once("conexao.php");

$cons = "SELECT cod_livro, isbn, nome, autor, ano, edicao, editora, disponivel FROM livros";
$consulta = mysqli_query($conn, $cons);

?>

<!DOCTYPE html>
<html>
<head>
	<title> Listagem de livros </title>
</head>
<body>

	<table border='2'>
		<tr>
			<td>Código</td>
			<td>ISBN</td>
			<td>Nome</td>
			<td>Autor</td>
			<td>Ano</td>
			<td>Edição</td>
			<td>Editora</td>
			<td>Disponibilidade</td>			
		</tr>
		<?php while ($dado = $consulta->fetch_array()) { ?>
			<tr>
				<td><?php echo $dado['cod_livro']; ?></td>
				<td><?php echo $dado['isbn']; ?></td>
				<td><?php echo $dado['nome']; ?></td>
				<td><?php echo $dado['autor']; ?></td>
				<td><?php echo $dado['ano']; ?></td>
				<td><?php echo $dado['edicao']; ?></td>
				<td><?php echo $dado['editora']; ?></td>
				<td><?php echo $dado['disponivel']; ?></td>
			</tr>
		<?php } ?>
	</table>	

</body>
</html>