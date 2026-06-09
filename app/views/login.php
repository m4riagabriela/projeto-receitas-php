<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
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

<h1>Login</h1>

<form action="?url=autenticar" method="POST">

    <input
    type="hidden"
    name="csrf_token"
    value="<?= $_SESSION['csrf_token'] ?>"
>

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="senha" placeholder="Senha" required>
    <br><br>

    <button type="submit">
        Entrar
    </button>

    <br><br>

    <a href="?url=recuperar-senha">
        Esqueci minha senha
    </a>

</form>

<footer>
    <p>Sistema de Receitas © 2026</p>
</footer>

</body>
</html>