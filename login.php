<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Biblioteca</h1>
        <p class="subtetulo">Faça login para acessar o sistema.</p>

        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'login') {
            echo '<div class="mensagem-erro">Login invalido.
            Verifique email e senha.</div>';
        }
    </div>
</body>
</html>