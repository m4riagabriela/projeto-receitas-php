<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Categorias</title>

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
    <a href="?url=categorias">Categorias</a> |
    <a href="?url=minhas-receitas">Minhas Receitas</a>
    <a href="?url=criar-receita">Nova Receita</a>
    <a href="?url=logout">Sair</a>
</nav>

<div class="container">

    <div class="card">

        <h2>Categorias</h2>

        <a class="btn" href="?url=criar-categoria">
            Nova Categoria
        </a>

        <br><br>

        <table class="tabela">

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>

            <?php foreach($categorias as $categoria): ?>

            <tr>
                <td><?= $categoria['id'] ?></td>
                <td><?= $categoria['nome'] ?></td>

                <td>
                    <a href="?url=editar-categoria&id=<?= $categoria['id'] ?>">Editar</a>
                    |
                    <a href="?url=excluir-categoria&id=<?= $categoria['id'] ?>">Excluir</a>
                </td>
            </tr>

            <?php endforeach; ?>

        </table>

    </div>

</div>

<footer>
    <p>Sistema de Receitas © 2026</p>
</footer>

</body>
</html>