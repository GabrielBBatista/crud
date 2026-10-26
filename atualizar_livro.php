<?php
 
// atulizar_livro.php
// Recebe os dados do formulário de edição e atualiza o livro
// Conceitos: POST, MySQL, UPDATE (U DO CRUD)
 
// Protege a página: só usuários logados podem atualizar os livros
include("verificar_sessao.php");
 
// Inclui conexão com o banco de dados
include("conexao.php");
 
// Recebe os dados enviados pelo formulário de edição.
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$status = $_POST['status'];
 
// Monta o comando SQL UPDATE para alterar os dados do livro
$sql = "UPDATE livros SET titulo = '$titulo', autor = '$autor', status = '$status' WHERE id = $id";
 
// Executa o UPDATE no banco de dados
mysqli_query($conexao, $sql);
 
// Redireciona para a listagem após atualizar
header("Location: listar_livro.php");
exit();
