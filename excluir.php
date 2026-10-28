<?php
require "config/conexao.php";

$id = $_GET["id"] ?? null;
if (!$id) {
    die("Cliente não informado.");
}

$stmt = $pdo->prepare(
    "DELETE FROM clientes WHERE id = :id"
);
$stmt->execute([":id" => $id]);

header("Location: index.php");
exit;
