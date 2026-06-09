<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>

<nav>
    <a href="?url=home">Home</a> |
    <a href="?url=login">Login</a> |
    <a href="?url=cadastro">Cadastrar</a>
</nav>

<div class="container">

    <div class="card">

        <h2>Recuperar Senha</h2>

        <form action="?url=alterar-senha" method="POST">

        <input
     type="hidden"
    name="csrf_token"
    value="<?= $_SESSION['csrf_token'] ?>"
>

            <input
                type="email"
                name="email"
                placeholder="Email"
                required
            >

            <br><br>

            <input
                type="text"
                name="cpf"
                placeholder="CPF"
                required
            >

            <br><br>

            <input
                type="date"
                name="data_nascimento"
                required
            >

            <br><br>

            <input
                type="password"
                name="nova_senha"
                placeholder="Nova Senha"
                required
            >

            <br><br>

            <button type="submit">
                Alterar Senha
            </button>

        </form>

    </div>

</div>

<footer>
    <p>Sistema de Receitas © 2026</p>
</footer>

</body>
</html>