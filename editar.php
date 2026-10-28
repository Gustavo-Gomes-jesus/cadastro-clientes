<?php
require "config/conexao.php";

$id = $_GET["id"] ?? null;
if (!$id) {
    die("Cliente não informado.");
}

$stmt = $pdo->prepare(
    "SELECT * FROM clientes WHERE id = :id"
);
$stmt->execute([":id" => $id]);
$cliente = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$cliente) {
    die("Cliente não encontrado.");
}
?>

<link rel="stylesheet" href="css/style.css">

<form method="POST" action="atualizar.php">
    <input type="hidden" name="id"
        value="<?= $cliente['id'] ?>">

    <label>Nome</label>
    <input type="text" name="nome"
        value="<?= htmlspecialchars($cliente['nome']) ?>" required>

    <label>E-mail</label>
    <input type="email" name="email"
        value="<?= htmlspecialchars($cliente['email']) ?>" required>

    <label>Telefone</label>
    <input type="text" name="telefone"
        value="<?= htmlspecialchars($cliente['telefone']) ?>" required>

    <label>Cidade</label>
    <input type="text" name="cidade"
        value="<?= htmlspecialchars($cliente['cidade']) ?>" required>
    <button type="submit">Salvar Alterações</button>

    <script src="js/script.js"></script>
</form>