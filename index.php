<?php
require "config/conexao.php";

$stmt = $pdo->query(
    "SELECT * FROM clientes ORDER BY id DESC"
);
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>

<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th>Ações</th>
        </tr>
    </thead>

    <body>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= htmlspecialchars($cliente["nome"]) ?></td>
                <td><?= htmlspecialchars($cliente["email"]) ?></td>
                <td><?= htmlspecialchars($cliente["telefone"]) ?></td>
                <td><?= htmlspecialchars($cliente["cidade"]) ?></td>
                <td>
                    <a href="editar.php?id=<?= $cliente['id'] ?>"
                        class="btn-editar"> ✏️Editar</a>
                    <a href="excluir.php?id=<?= $cliente['id'] ?>"
                        class="btn-excluir">🗑️Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <script src="js/script.js"></script>
    </body>
</table>
<a href="cadastro.php">+ Novo Cliente</a>