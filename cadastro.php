<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Novo Cliente</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1> 🪪 Cadastrar Cliente</h1>
        <form method="POST" action="salvar.php">
            <label>Nome</label>
            <input type="text" name="nome" required>

            <label>E-mail</label>
            <input type="email" name="email" required>

            <label>Telefone</label>
            <input type="text" name="telefone">

            <label>Cidade</label>
            <input type="text" name="cidade">

            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php">← Voltar para a lista</a>
    </div>
    <a href="cadastro.php">+ Novo Cliente</a>

    <script src="js/script.js"></script>
</body>

</html>