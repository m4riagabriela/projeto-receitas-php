<?php

require_once '../app/core/Controller.php';
require_once '../app/models/Usuario.php';

class AuthController extends Controller {

    public function cadastro() {

        $this->view('cadastro');
    }

    public function salvar() {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $usuario = new Usuario();

    $usuario->cadastrar($nome, $email, $senha);

    header('Location: ?url=login');
    exit;
}
    }
    public function login() {

    $this->view('login');
}
    public function logout() {

    session_destroy();

    header('Location: ?url=login');
    exit;
}

public function autenticar() {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuarioModel = new Usuario();

        $usuario = $usuarioModel->buscarPorEmail($email);

       if($usuario && password_verify($senha, $usuario['senha'])) {

    $_SESSION['usuario'] = [
        'id' => $usuario['id'],
        'nome' => $usuario['nome'],
        'email' => $usuario['email']
    ];

    header('Location: ?url=home');
    exit;
}

        } else {

            echo "Email ou senha inválidos.";
        }
    }
}
