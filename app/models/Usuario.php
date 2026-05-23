<?php

require_once '../app/core/Database.php';

class Usuario {

    private $pdo;

    public function __construct() {

        $database = new Database();

        $this->pdo = $database->connect();
    }

    public function cadastrar($nome, $email, $senha) {

        $sql = "INSERT INTO usuarios (nome, email, senha)
                VALUES (:nome, :email, :senha)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);

        return $stmt->execute();
    }
    public function buscarPorEmail($email) {

    $sql = "SELECT * FROM usuarios WHERE email = :email";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':email', $email);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}