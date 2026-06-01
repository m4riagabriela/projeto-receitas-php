<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minhas Receitas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
  <nav>|
    <a href="?url=home">Home</a> |
    <a href="?url=receitas">Receitas</a> |
    <a href="?url=minhas-receitas">Minhas Receitas</a> |
    <a href="?url=criar-receita">Nova Receita</a> |
    <a href="?url=logout">Sair</a>
</nav>


    <h1>Minhas Receitas </h1>

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

    <footer>
    <p>Sistema de Receitas © 2026</p>
</footer>
</body>
</html>