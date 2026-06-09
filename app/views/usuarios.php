<h2>Usuários</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php foreach($usuarios as $usuario): ?>

    <tr>
        <td><?= $usuario['id'] ?></td>
        <td><?= $usuario['nome'] ?></td>
        <td><?= $usuario['email'] ?></td>

        <td>
            <a href="?url=editar-usuario&id=<?= $usuario['id'] ?>">
                Editar
            </a>

            <a href="?url=excluir-usuario&id=<?= $usuario['id'] ?>">
                Excluir
            </a>
        </td>
    </tr>

    <?php endforeach; ?>
</table>