<?php

// salvar_livro.php
// recebe os dados do formulário e insere um novo livro mo banco
// conceitos: post, MySQR, INSERT (CREATE DO CRUD)

// protege a página: só usuários logados podem salvar livros.
include("verificar_sessao.php");

//incluir a conexao com o banco de dados (MySQL)
include("conexao.php");

// recebe os ddos enviados pelo formulário via POST
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$status = $_POST['status'];

// monta o comando SQL insert para cadastrar o livro:
$sql = "INSERT INTO livros (titulo, autor, status)
VALUES ('$titulo', '$autor', '$status')";

//Excuta o INSERT  no banco de dados
mysqli_query($conexao, $sql);

// redirecina para listagem de livros após salvar
header("location: listar_livro.php");
exit();