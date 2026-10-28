<?php
require "config/conexao.php";

$nome     = trim($_POST["nome"] ?? "");
$email    = trim($_POST["email"] ?? "");
$telefone = trim($_POST["telefone"] ?? "");
$cidade   = trim($_POST["cidade"] ?? "");

if ($nome === "" || $email === "") {
    die("Nome e e-mail são obrigatórios.");
}

$sql = "INSERT INTO clientes
        (nome, email, telefone, cidade)
        VALUES (:nome, :email, :telefone, :cidade)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ":nome"     => $nome,
    ":email"    => $email,
    ":telefone" => $telefone,
    ":cidade"   => $cidade,
]);

header("Location: index.php");
exit;
