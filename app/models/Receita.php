<?php

require_once '../app/core/Database.php';

class Receita {

    private $pdo;

    public function __construct() {

        $database = new Database();

        $this->pdo = $database->connect();
    }

    public function cadastrar($titulo, $descricao, $modo_preparo, $usuario_id, $categoria_id)
{
    $sql = "INSERT INTO receitas
            (titulo, descricao, modo_preparo, usuario_id, categoria_id)
            VALUES
            (:titulo, :descricao, :modo_preparo, :usuario_id, :categoria_id)";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':titulo', $titulo);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':modo_preparo', $modo_preparo);
    $stmt->bindValue(':usuario_id', $usuario_id);
    $stmt->bindValue(':categoria_id', $categoria_id);

    return $stmt->execute();
}

    public function listar()
{
    $sql = "SELECT receitas.*,
                   usuarios.nome AS autor,
                   categorias.nome AS categoria

            FROM receitas

            JOIN usuarios
            ON receitas.usuario_id = usuarios.id

            LEFT JOIN categorias
            ON receitas.categoria_id = categorias.id

            ORDER BY receitas.created_at DESC";

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

    public function minhasReceitas($usuario_id) {

        $sql = "SELECT *
                FROM receitas
                WHERE usuario_id = :usuario_id
                ORDER BY created_at DESC";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':usuario_id', $usuario_id);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function buscarPorId($id) {

    $sql = "SELECT * FROM receitas WHERE id = :id";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':id', $id);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}public function atualizar($id, $titulo, $descricao, $modo_preparo, $categoria_id)
{
    $sql = "UPDATE receitas
            SET titulo = :titulo,
                descricao = :descricao,
                modo_preparo = :modo_preparo,
                categoria_id = :categoria_id
            WHERE id = :id";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':titulo', $titulo);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':modo_preparo', $modo_preparo);
    $stmt->bindValue(':categoria_id', $categoria_id);

    return $stmt->execute();
}
public function excluir($id) {

    $sql = "DELETE FROM receitas WHERE id = :id";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':id', $id);

    return $stmt->execute();
}
}
 //i/