<?php

require_once '../app/core/Controller.php';
require_once '../app/models/Usuario.php';

class UsuarioController extends Controller {

    // LISTAR USUÁRIOS
    public function index() {

        $usuario = new Usuario();

        $usuarios = $usuario->listar();

        $this->view('usuarios', [
            'usuarios' => $usuarios
        ]);
    }

    // FORMULÁRIO DE EDIÇÃO
    public function editar() {

        $id = $_GET['id'];

        $usuario = new Usuario();

        $dados = $usuario->buscarPorId($id);

        $this->view('editar-usuario', [
            'usuario' => $dados
        ]);
    }

    // SALVAR ALTERAÇÃO
    public function atualizar() {

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario();

        $usuario->atualizar($id, $nome, $email);

        header('Location: ?url=usuarios');
        exit;
    }

    // EXCLUIR
    public function excluir() {

        $id = $_GET['id'];

        $usuario = new Usuario();

        $resultado = $usuario->excluir($id);

        if(!$resultado) {

            echo "<h2>Este usuário possui receitas cadastradas e não pode ser excluído.</h2>";

            echo "<br><br>";

            echo "<a href='?url=usuarios'>Voltar</a>";

            return;
        }

        header('Location: ?url=usuarios');
        exit;
    }
}