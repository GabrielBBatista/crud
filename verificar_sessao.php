<?php

// Verficiar_sesssao.php
// Arquivo ncluido nas páginas restritas do sistema
// Garnte que apenas usuarios logados possam acessar o conteúdo.

// iniciar a sessão do usuário (ou retoma uma sessão já existente)
session_start();

// Cabeçalho HTTP que impendem o navegador de guardar a página
// em cache.
// iso evitar que

header("Cache-Contol: no-cache, no-stre, must-revalidate");
header("Pragma: no-ache");
header("Expires: 0");

//Verificar se a variavel de sessão  'nome' existe.
// se não existir, o usuário não está logado.

if (!isset($_SESSION['nome'])) {
    //header() redirenciona o navegador para outra página.
    header("Location: login.php");
    //exit()encerra o script para garantir que nada mais
    // seja executado.
    exit();
}