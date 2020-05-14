<?php
include_once("conexao.php");

$cliente = filter_input(INPUT_POST, 'cliente_devol');
$cod = filter_input(INPUT_POST, 'cod_devol');
$data = filter_input(INPUT_POST, 'data_devol');

$result_devol = "INSERT INTO devolucoes(cod_livro, cpf_cliente, data_devolucao, created) VALUES ('$cod', '$cliente','$data', NOW())";
$resultado_devol = mysqli_query($conn, $result_devol);

if(mysqli_insert_id($conn)){
	header('Location: index.php');
} else {
	//falha
}