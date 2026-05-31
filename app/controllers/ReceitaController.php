<?php

require_once '../app/core/Controller.php';
require_once '../app/models/Receita.php';

class ReceitaController extends Controller {

    public function criar() {

        if(!isset($_SESSION['usuario'])) {
            header('Location: ?url=login');
            exit;
        }

        $this->view('criar-receita');
    }

    public function salvar() {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $modo_preparo = $_POST['modo_preparo'];

            $usuario_id = $_SESSION['usuario']['id'];

            $receita = new Receita();

            $receita->cadastrar(
                $titulo,
                $descricao,
                $modo_preparo,
                $usuario_id
            );

            header('Location: ?url=receitas');
            exit;
        }
    }

    public function index() {

        $receita = new Receita();

        $receitas = $receita->listar();

        $this->view('receitas', [
            'receitas' => $receitas
        ]);
    }

    public function minhas() {

        if(!isset($_SESSION['usuario'])) {
            header('Location: ?url=login');
            exit;
        }

        $receita = new Receita();

        $receitas = $receita->minhasReceitas(
            $_SESSION['usuario']['id']
        );

        $this->view('minhas-receitas', [
            'receitas' => $receitas
        ]);
    }
    public function editar() {

    $id = $_GET['id'];

    $receita = new Receita();

    $dados = $receita->buscarPorId($id);

    $this->view('editar-receita', [
        'receita' => $dados
    ]);
}
public function atualizar() {

    $id = $_POST['id'];

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $modo_preparo = $_POST['modo_preparo'];

    $receita = new Receita();

    $receita->atualizar(
        $id,
        $titulo,
        $descricao,
        $modo_preparo
    );

    header('Location: ?url=minhas-receitas');
    exit;
}
public function excluir() {

    $id = $_GET['id'];

    $receita = new Receita();

    $receita->excluir($id);

    header('Location: ?url=minhas-receitas');
    exit;
}
}
