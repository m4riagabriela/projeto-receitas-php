<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Categoria</title>

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

    <h2>Editar Categoria</h2>

    <form method="POST" action="?url=atualizar-categoria">

        <input
            type="hidden"
            name="csrf_token"
            value="<?= $_SESSION['csrf_token'] ?>"
        >

        <input
            type="hidden"
            name="id"
            value="<?= $categoria['id'] ?>"
        >

        <label>Nome da Categoria</label>

        <br><br>

        <input
            type="text"
            name="nome"
            value="<?= $categoria['nome'] ?>"
            required
        >

        <br><br>

        <button type="submit">
            Atualizar
        </button>

    </form>

    <br>

    <a href="?url=categorias">
        Voltar
    </a>

</div>

<footer>
    <p>Sistema de Receitas © 2026</p>
</footer>

</body>
</html>