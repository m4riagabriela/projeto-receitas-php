<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Receitas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
   <nav>
    <a href="?url=home">Home</a> |
    <a href="?url=receitas">Receitas</a> |
     <a href="?url=categorias">Categorias</a> |
    <a href="?url=minhas-receitas">Minhas Receitas</a> |
    <a href="?url=criar-receita">Nova Receita</a> |
    <a href="?url=logout">Sair</a>
</nav>
<div class="card">

</div>

    <h1>Receitas Cadastradas </h1>

    <?php foreach($receitas as $r): ?>

<div class="card">

    <h2><?= $r['titulo'] ?></h2>

    <p>
        <strong>Autor:</strong>
        <?= $r['autor'] ?>
    </p>

    <p>
        <strong>Categoria:</strong>
        <?= $r['categoria'] ?? 'Sem categoria' ?>
    </p>

    <p>
        <?= $r['descricao'] ?>
    </p>

    <p>
        <strong>Modo de preparo:</strong>
    </p>

    <p>
        <?= $r['modo_preparo'] ?>
    </p>

</div>

<?php endforeach; ?>

<footer>
    <p>Sistema de Receitas © 2026</p>
</footer>

</body>
</html>