<?php
include_once("conexao.php");

$cod = filter_input(INPUT_POST, 'cod_livro');
$isbn = filter_input(INPUT_POST, 'isbn');
$nome = filter_input(INPUT_POST, 'nome_livro');
$autor = filter_input(INPUT_POST, 'autor');
$ano = filter_input(INPUT_POST, 'ano');
$edicao = filter_input(INPUT_POST, 'edicao');
$editora = filter_input(INPUT_POST, 'editora');
$disponivel = 'SIM';

$result_livro = "INSERT INTO livros(cod_livro, isbn, nome, autor, ano, edicao, editora, disponivel) VALUES ('$cod', '$isbn', '$nome', '$autor', '$ano', '$edicao', '$editora', '$disponivel')";
$resultado_livro = mysqli_query($conn, $result_livro);

if(mysqli_insert_id($conn)){
	header('Location: index.php');
} else {
	//falha
}