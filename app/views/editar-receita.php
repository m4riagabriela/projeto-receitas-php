<!DOCTYPE html>
<html>
<head>
    <title>Editar Receita</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
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
<h1>Editar Receita</h1>

<form action="?url=atualizar-receita" method="POST">

    <input type="hidden"
           name="id"
           value="<?= $receita['id'] ?>">

    <input type="text"
           name="titulo"
           value="<?= $receita['titulo'] ?>">

    <br><br>

    <textarea name="descricao"><?= $receita['descricao'] ?></textarea>

    <br><br>

    <textarea name="modo_preparo"><?= $receita['modo_preparo'] ?></textarea>

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>

<footer>
    <p>Sistema de Receitas © 2026</p>
</footer>

</body>
</html>