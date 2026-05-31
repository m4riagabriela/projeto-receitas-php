<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minhas Receitas</title>
</head>
<body>
  <nav>
    <a href="?url=home">Home</a> |
    <a href="?url=receitas">Receitas</a> |
    <a href="?url=minhas-receitas">Minhas Receitas</a> |
    <a href="?url=criar-receita">Nova Receita</a> |
    <a href="?url=logout">Sair</a>
</nav>

<hr>
<hr>

    <h1>Minhas Receitas 😎</h1>

    <?php foreach($receitas as $r): ?>

        <a href="?url=editar-receita&id=<?= $r['id'] ?>">
    Editar
</a>
        <a href="?url=excluir-receita&id=<?= $r['id'] ?>">
    Excluir
</a>
        <hr>

        <h2><?= $r['titulo'] ?></h2>

        <p><?= $r['descricao'] ?></p>

    <?php endforeach; ?>

</body>
</html>