<?php

//editar_livro.php
//Exibe o formulário preenchido com os dados do livro para edição
//Conceitos: $_GET, MySQL, SELECT, formulário de edição.

// protege a página:só usuários logados podem editar livros
include("verificar_sessao.php");

// inclui a conexão com o banco de dados.
include("conexao.php");

//Recebe o ID do livro pela URL (ex: editar_livro.php?id=3)
$id = $_GET['id'];

//Consulta SQL que busca o livro pela ID.
$sql = "SELECT * FROM livros WHERE id = $id";

//Executa a consulta
$resultado = mysqli_query($conexao, $sql);

//Transforma o resultado em um array associativo
$livro = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="conteiner">
        <h1>Editar Livro</h1>
        <p class="subtitulo">
            Altere os dados do livro e clque em Atualizar.
        </p>

        <!-- Formulário envia os dados para atualizar_livro.php -->
         <form action="atualizar_livro.php" method="POST">
            <!-- Campo hidden guarda o ID sem aparecer na tela -->
             <input type="hidden" name="id"
                value="<?php echo $livro['id']; ?>">

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo"
                        value="<?php echo $livro['titulo']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" id="autor" name="autor"
                        value="<?php echo $livro['autor']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" required>
                        <!-- Marcar como slect a opção que corresponde ao status atual -->
                         <option value="Disponível" <?php if
                         ($livro ['status'] === 'Disponível') echo 'selected'; ?>>
                         Disponivel</option>
                         <option value="Emprestado" <?php if
                         ($livro ['status'] === 'Emprestado') echo 'selected'; ?>>
                         Emprestado</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-block">
                Atualizar Livro</button>
         </form>
         <!-- Botão de voltar para a listagem de livros -->
          <a href="listar_livro.php" class="btn btn-voltar">
            <!-- Voltar para a listagem -->
             Voltar para a listagem
          </a>
    </div>
    
</body>

</html>