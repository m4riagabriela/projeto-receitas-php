<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Receita</title>
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


    <h1>Cadastrar Receita</h1>

    <form action="?url=salvar-receita" method="POST">

        <input type="text"
               name="titulo"
               placeholder="Título">
        <br><br>

        <textarea name="descricao"
                  placeholder="Descrição"></textarea>
        <br><br>

        <textarea name="modo_preparo"
                  placeholder="Modo de preparo"></textarea>
        <br><br>

        <button type="submit">
            Salvar Receita
        </button>

    </form>
    <footer>
    <p>Sistema de Receitas © 2026</p>
</footer>
</body>
</html>