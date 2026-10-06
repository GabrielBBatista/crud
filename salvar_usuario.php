<?php

include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlVerificar = "SE_ECT id FROM usuarios WHERE email = 'email'";

$resultadoVerificar = mysqli_query(conexao, sqlVerificar);

if (mysqli_num_rows($resultadoVerificar) > 0) {
    header("Location: cadasro.php?erro=email");
    exit();
}

$senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usarios (nome, email, senha) VALUES
('$nome', '$email', '$senhaCRiptigrafada')";

mysqli_query($conexao, $sql);

header("Location: login.php");
exit();