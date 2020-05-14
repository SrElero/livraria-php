<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$cpf = filter_input(INPUT_POST, 'cpf');
$telefone = filter_input(INPUT_POST, 'telefone');
$email = filter_input(INPUT_POST, 'email');

$result_cliente = "INSERT INTO clientes(nome, cpf, telefone, email, created) VALUES ('$nome', '$cpf', '$telefone', '$email', NOW())";
$resultado_cliente = mysqli_query($conn, $result_cliente);

if(mysqli_insert_id($conn)){
	header('Location: index.php');
} else {
	//falha
}