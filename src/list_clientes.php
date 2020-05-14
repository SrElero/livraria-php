<?php
include_once("conexao.php");

$cons = "SELECT nome, cpf, telefone, email FROM clientes";
$consulta = mysqli_query($conn, $cons);

?>

<!DOCTYPE html>
<html>
<head>
	<title> Listagem de clientes </title>
</head>
<body>

	<table border="2">
		<tr>
			<td>Nome</td>
			<td>CPF</td>
			<td>Telefone</td>
			<td>E-mail</td>			
		</tr>
		<?php while ($dado = $consulta->fetch_array()) { ?>
			<tr>
				<td><?php echo $dado['nome']; ?></td>
				<td><?php echo $dado['cpf']; ?></td>
				<td><?php echo $dado['telefone']; ?></td>
				<td><?php echo $dado['email']; ?></td>
			</tr>
		<?php } ?>
	</table>	

</body>
</html>