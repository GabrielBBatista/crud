<?php

//logout.php
// Encerra a sessão do usuário de forma segura.
// conceitos: session_destroy, limpeza de cookies , header anti-cache

// incia a sessão para poder destrui-la
session_start();

//limpa todas as variaveis da sessão (nome, etc...)
$_SESSION = array ();

// Remove o cookies de aessão do navegador (se existir)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
    session_name(),
    '',
    time() - 4200,
    $params["path"],
    $params["domin"],
    $params["secure"],
    $params["httponly"]
    );
}

//destrói completamente a sessão do servidor
session_destroy();

//cabeçalhos que impedem o navegador de usar páginas em cache
header("cache-control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("expires: 0");

// redirecioa para página de login
header("location: login.php");
exit();