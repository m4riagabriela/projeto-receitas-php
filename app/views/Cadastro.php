<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
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
    <h1>Cadastro</h1>

    <form action="?url=salvar" method="POST">

        <input type="text" name="nome" placeholder="Nome">
        <br><br>

        <input type="email" name="email" placeholder="Email">
        <br><br>

        <input type="password" name="senha" placeholder="Senha">
        <br><br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

</body>
</html>