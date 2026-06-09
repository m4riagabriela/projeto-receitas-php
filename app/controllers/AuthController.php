<?php

require_once '../app/core/Controller.php';
require_once '../app/models/Usuario.php';

class AuthController extends Controller
{
    public function cadastro()
    {
        $this->view('cadastro');
    }

    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (
                !isset($_POST['csrf_token']) ||
                $_POST['csrf_token'] !== $_SESSION['csrf_token']
            ) {
                die('Token CSRF inválido.');
            }

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $cpf = $_POST['cpf'];
            $data_nascimento = $_POST['data_nascimento'];

            $usuario = new Usuario();

            $usuario->cadastrar(
                $nome,
                $email,
                $senha,
                $cpf,
                $data_nascimento
            );

            header('Location: ?url=login');
            exit;
        }
    }

    public function login()
    {
        $this->view('login');
    }

    public function logout()
    {
        session_destroy();

        header('Location: ?url=login');
        exit;
    }

    public function autenticar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (
                !isset($_POST['csrf_token']) ||
                $_POST['csrf_token'] !== $_SESSION['csrf_token']
            ) {
                die('Token CSRF inválido.');
            }

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuarioModel = new Usuario();

            $usuario = $usuarioModel->buscarPorEmail($email);

            if ($usuario && password_verify($senha, $usuario['senha'])) {

                $_SESSION['usuario'] = [
                    'id' => $usuario['id'],
                    'nome' => $usuario['nome'],
                    'email' => $usuario['email']
                ];

                setcookie(
                    'ultimo_acesso',
                    date('d/m/Y H:i:s'),
                    time() + 86400,
                 '/');

                header('Location: ?url=home');
                exit;
            } else {

                echo "Email ou senha inválidos.";
            }
        }
    }

    public function recuperarSenha()
    {
        $this->view('recuperar-senha');
    }

    public function alterarSenha()
    {
        if (
            !isset($_POST['csrf_token']) ||
            $_POST['csrf_token'] !== $_SESSION['csrf_token']
        ) {
            die('Token CSRF inválido.');
        }

        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento'];

        $nova_senha = password_hash(
            $_POST['nova_senha'],
            PASSWORD_DEFAULT
        );

        $usuario = new Usuario();

        if (
            $usuario->validarRecuperacao(
                $email,
                $cpf,
                $data_nascimento
            )
        ) {

            $usuario->atualizarSenha(
                $email,
                $nova_senha
            );

            echo "Senha alterada com sucesso!";
        } else {

            echo "Dados inválidos.";
        }
    }
}
