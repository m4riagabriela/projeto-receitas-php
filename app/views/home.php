<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>

<nav>
    Olá, <?= $_SESSION['usuario']['nome'] ?? 'Visitante' ?> |

    <a href="?url=home">Home</a>
    <a href="?url=receitas">Receitas</a>
    <a href="?url=minhas-receitas">Minhas Receitas</a>
    <a href="?url=criar-receita">Nova Receita</a>
    <a href="?url=logout">Sair</a>
</nav>

<div class="hero">
    <h1>Sabores para compartilhar</h1>
</div>

<div class="container">

    <div class="card">

        <h2>Bem-vinda, <?= $_SESSION['usuario']['nome'] ?? 'Usuário' ?>!</h2>

        <p>
            Aqui você pode cadastrar, editar e compartilhar suas receitas favoritas.
        </p>

    </div>

    <div class="card">

        <h2>O que você pode fazer?</h2>

        <p>Criar receitas</p>
        <p>Editar receitas</p>
        <p>Excluir receitas</p>
        <p>Visualizar todas as receitas</p>

   
<footer>
    <p>Sistema de Receitas © 2026</p>
</footer>
</body>
</html>
</html>