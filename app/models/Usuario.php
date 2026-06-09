<?php

require_once '../app/core/Database.php';

class Usuario {

    private $pdo;

    public function __construct() {

        $database = new Database();
        $this->pdo = $database->connect();
    }

    public function cadastrar(
    $nome,
    $email,
    $senha,
    $cpf,
    $data_nascimento
) {

    $sql = "INSERT INTO usuarios
            (nome, email, senha, cpf, data_nascimento)
            VALUES
            (:nome, :email, :senha, :cpf, :data_nascimento)";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    $stmt->bindValue(':cpf', $cpf);
    $stmt->bindValue(':data_nascimento', $data_nascimento);

    return $stmt->execute();
}
    public function buscarPorEmail($email) {

        $sql = "SELECT * FROM usuarios WHERE email = :email";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':email', $email);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function listar() {

        $sql = "SELECT * FROM usuarios ORDER BY id DESC";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function buscarPorId($id) {

        $sql = "SELECT * FROM usuarios WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':id', $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    public function atualizar($id, $nome, $email) {

        $sql = "UPDATE usuarios
                SET nome = :nome,
                    email = :email
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);

        return $stmt->execute();
    }

 public function excluir($id) {

    $sql = "SELECT COUNT(*) as total
            FROM receitas
            WHERE usuario_id = :id";

    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if($resultado['total'] > 0) {
    return false;
}

    $sql = "DELETE FROM usuarios WHERE id = :id";

    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);

    return $stmt->execute();
}
    public function validarRecuperacao(
    $email,
    $cpf,
    $data_nascimento
){

    $sql = "SELECT *
            FROM usuarios
            WHERE email = :email
            AND cpf = :cpf
            AND data_nascimento = :data_nascimento";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':cpf', $cpf);
    $stmt->bindValue(':data_nascimento', $data_nascimento);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}   
    public function atualizarSenha(
    $email,
    $nova_senha
){

    $sql = "UPDATE usuarios
            SET senha = :senha
            WHERE email = :email";

    $stmt = $this->pdo->prepare($sql);

    $stmt->bindValue(':senha', $nova_senha);
    $stmt->bindValue(':email', $email);

    return $stmt->execute();
}
}