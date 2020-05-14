<?php
include_once("conexao.php");

$cliente = filter_input(INPUT_POST, 'cliente_emprest');
$cod = filter_input(INPUT_POST, 'cod_emprest');
$data = filter_input(INPUT_POST, 'data_emprest');

$result_emprest = "INSERT INTO emprestimo(cpf_cliente, cod_livro, data, created) VALUES ('$cliente', '$cod', '$data', NOW())";
$resultado_emprest = mysqli_query($conn, $result_emprest);

if(mysqli_insert_id($conn)){
	header('Location: index.php');
} else {
	//falha
}