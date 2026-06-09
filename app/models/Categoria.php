<?php

require_once '../app/core/Database.php';

class Categoria {

    private $pdo;

    public function __construct() {

        $database = new Database();
        $this->pdo = $database->connect();
    }

    public function cadastrar($nome) {

        $sql = "INSERT INTO categorias (nome)
                VALUES (:nome)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':nome', $nome);

        return $stmt->execute();
    }

    public function listar() {

        $sql = "SELECT * FROM categorias
                ORDER BY id DESC";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {

        $sql = "SELECT * FROM categorias
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome) {

        $sql = "UPDATE categorias
                SET nome = :nome
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':nome', $nome);

        return $stmt->execute();
    }

    public function excluir($id) {

        $sql = "DELETE FROM categorias
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}