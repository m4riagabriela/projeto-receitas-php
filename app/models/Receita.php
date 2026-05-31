<?php

require_once '../app/core/Database.php';

class Receita {

    private $pdo;

    public function __construct() {

        $database = new Database();

        $this->pdo = $database->connect();
    }

    public function cadastrar($titulo, $descricao, $modo_preparo, $usuario_id) {

        $sql = "INSERT INTO receitas
                (titulo, descricao, modo_preparo, usuario_id)

                VALUES
                (:titulo, :descricao, :modo_preparo, :usuario_id)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':titulo', $titulo);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':modo_preparo', $modo_preparo);
        $stmt->bindValue(':usuario_id', $usuario_id);

        return $stmt->execute();
    }

    public function listar() {

        $sql = "SELECT receitas.*, usuarios.nome AS autor
                FROM receitas
                JOIN usuarios
                ON receitas.usuario_id = usuarios.id
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
}public function atualizar($id, $titulo, $descricao, $modo_preparo) {

    $sql = "UPDATE receitas
            SET titulo = :titulo,
                descricao = :descricao,
                modo_preparo = :modo_preparo
            WHERE id = :id";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':titulo', $titulo);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':modo_preparo', $modo_preparo);

    return $stmt->execute();
}
public function excluir($id) {

    $sql = "DELETE FROM receitas WHERE id = :id";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':id', $id);

    return $stmt->execute();
}
}
