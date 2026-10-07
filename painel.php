<?php

include ("verificar_ sssao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="containe">
        <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
        <p class="subtitulo">Bem-vindo ao painel da
           bibloteca. Escolha uma opção:</p>

         <div class="painel-cards">
            <a href="cadratro.php" class="card-link">
                Cadastrar Livro
        </a>
            <a href="listar.php" class="card-link">
                Listar Livro
        </a>
            <a href="cadratro.php" class="card-link">
                Sair        
         </div>
         <div class="navegaao">
            <strong>Fluxo:</strong>
            Painel → Cadastrar Livro ou  Listar Livros → Editar / Excluir
         </div>  
    </div>
</body>
</html>