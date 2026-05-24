<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Receita</title>
</head>
<body>

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