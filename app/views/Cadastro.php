<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
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

    <h1>Cadastro</h1>

    <form action="?url=salvar" method="POST">

    <input
    type="hidden"
    name="csrf_token"
    value="<?= $_SESSION['csrf_token'] ?>"
>

        <input type="text" name="nome" placeholder="Nome">
        <br><br>

        <input type="email" name="email" placeholder="Email">
        <br><br>

        <input type="password" name="senha" placeholder="Senha">
        <br><br>

        <input type="text" name="cpf" placeholder="CPF" required>
        <br><br>

        <input type="date" name="data_nascimento" required>
        <br><br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

    <footer>
    <p>Sistema de Receitas © 2026</p>
</footer>
</body>
</html>