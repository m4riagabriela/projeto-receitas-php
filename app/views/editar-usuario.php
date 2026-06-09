<h2>Editar Usuário</h2>

<form action="?url=atualizar-usuario" method="POST">

    <input
        type="hidden"
        name="id"
        value="<?= $usuario['id'] ?>"
    >

    <label>Nome:</label><br>

    <input
        type="text"
        name="nome"
        value="<?= $usuario['nome'] ?>"
        required
    >

    <br><br>

    <label>Email:</label><br>

    <input
        type="email"
        name="email"
        value="<?= $usuario['email'] ?>"
        required
    >

    <br><br>

    <button type="submit">
        Salvar Alterações
    </button>

</form>