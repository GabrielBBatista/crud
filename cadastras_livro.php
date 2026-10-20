<?php

//prtege a pagina: só usuários loados podem cadastrar livros
include("verificar_sessao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrr livro - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>vadastrar livro</h1>
        <p class="subtitulo">preecha os dados do novo livro</p>

        <!-- Formulário envio os dados para salvar_livro.php -->
         <form action="salvar_livro.php" method="POST">
            <div class="form-group">
                <label for="autor">Titulo</label>
                <input type="text" id="titulo" name="titulo"
                    pulaceholder="digite o titulo do livro" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor"
                    pulaceholder="digite o titulo do livro" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <!-- Select permite escolher entre opções pré-definidas -->
                 <select name="status" id="status" required>
                    <option value="disponivel">Disponivel</option>
                    <option value="emprestado">Emprestado</option>
                 </select>
            </div>

            <button type="submit" class="btn btn-block btn-sucesso">
                Salvar livro
            </button>
        </from>

        <!-- boão de voltar para o painel principal -->
         <a href="painel.php" class="btn btn-voltar">
            Voltar para o painel
         </a>

    </div>
    
</body>

</html>