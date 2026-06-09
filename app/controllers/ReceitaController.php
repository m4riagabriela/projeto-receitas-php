<?php

require_once '../app/core/Controller.php';
require_once '../app/models/Receita.php';
require_once '../app/models/Categoria.php';

class ReceitaController extends Controller
{
    public function criar()
    {
        if (!isset($_SESSION['usuario'])) {
            header('Location: ?url=login');
            exit;
        }

        $categoria = new Categoria();

        $categorias = $categoria->listar();

        $this->view('criar-receita', [
            'categorias' => $categorias
        ]);
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

            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $modo_preparo = $_POST['modo_preparo'];
            $categoria_id = $_POST['categoria_id'];

            $usuario_id = $_SESSION['usuario']['id'];

            $receita = new Receita();

            $receita->cadastrar(
                $titulo,
                $descricao,
                $modo_preparo,
                $usuario_id,
                $categoria_id
            );

            header('Location: ?url=receitas');
            exit;
        }
    }

    public function index()
    {
        $receita = new Receita();

        $receitas = $receita->listar();

        $this->view('receitas', [
            'receitas' => $receitas
        ]);
    }

    public function minhas()
    {
        if (!isset($_SESSION['usuario'])) {
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

    public function editar()
{
    $id = $_GET['id'];

    $receita = new Receita();
    $dados = $receita->buscarPorId($id);

    $categoria = new Categoria();
    $categorias = $categoria->listar();

    $this->view('editar-receita', [
        'receita' => $dados,
        'categorias' => $categorias
    ]);
}

    public function atualizar()
    {
        if (
            !isset($_POST['csrf_token']) ||
            $_POST['csrf_token'] !== $_SESSION['csrf_token']
        ) {
            die('Token CSRF inválido.');
        }

        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $modo_preparo = $_POST['modo_preparo'];
        $categoria_id = $_POST['categoria_id'];

        $receita = new Receita();

        $receita->atualizar(
            $id,
            $titulo,
            $descricao,
            $modo_preparo,
            $categoria_id
        );

        header('Location: ?url=minhas-receitas');
        exit;
    }

    public function excluir()
    {
        $id = $_GET['id'];

        $receita = new Receita();

        $receita->excluir($id);

        header('Location: ?url=minhas-receitas');
        exit;
    }
}