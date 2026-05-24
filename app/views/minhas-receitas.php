<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minhas Receitas</title>
</head>
<body>

    <h1>Minhas Receitas 😎</h1>

    <?php foreach($receitas as $r): ?>

        <hr>

        <h2><?= $r['titulo'] ?></h2>

        <p><?= $r['descricao'] ?></p>

    <?php endforeach; ?>

</body>
</html>