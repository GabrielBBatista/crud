<?php
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";

$resultado = mysqli_query($conexao, $sql);

$resultado = mysqli_fetch_assoc($resultado);

if ($usuario && password_verify($senha, $usuario['senha'])) {

    $_SESSION['nome'] = $usuario['nome'];

    header("Location: painel.php");
    exit();
} else {
    header("Location: login.php?erro=login");
    exit();
}