<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Receita</title>
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

</body>
</html>