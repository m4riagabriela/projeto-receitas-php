<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Receitas</title>
</head>
<body>
<nav>
   <nav>
    <a href="?url=home">Home</a> |
    <a href="?url=receitas">Receitas</a> |
    <a href="?url=minhas-receitas">Minhas Receitas</a> |
    <a href="?url=criar-receita">Nova Receita</a> |
    <a href="?url=logout">Sair</a>
</nav>

<hr>

<hr>
    <h1>Receitas Cadastradas 🍝</h1>

    <?php foreach($receitas as $r): ?>

        <hr>

        <h2><?= $r['titulo'] ?></h2>

        <p>
            <strong>Autor:</strong>
            <?= $r['autor'] ?>
        </p>

        <p><?= $r['descricao'] ?></p>

        <p>
            <strong>Modo de preparo:</strong>
        </p>

        <p><?= $r['modo_preparo'] ?></p>

    <?php endforeach; ?>

</body>
</html>