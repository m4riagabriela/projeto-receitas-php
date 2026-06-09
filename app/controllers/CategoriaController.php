<?php

require_once '../app/core/Controller.php';
require_once '../app/models/Categoria.php';

class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = new Categoria();

        $categorias = $categoria->listar();

        $this->view('categorias', [
            'categorias' => $categorias
        ]);
    }

    public function criar()
    {
        $this->view('criar-categoria');
    }

    public function salvar()
    {
        if (
            !isset($_POST['csrf_token']) ||
            $_POST['csrf_token'] !== $_SESSION['csrf_token']
        ) {
            die('Token CSRF inválido.');
        }

        $nome = $_POST['nome'];

        $categoria = new Categoria();

        $categoria->cadastrar($nome);

        header('Location: ?url=categorias');
        exit;
    }

    public function editar()
    {
        $id = $_GET['id'];

        $categoria = new Categoria();

        $dados = $categoria->buscarPorId($id);

        $this->view('editar-categoria', [
            'categoria' => $dados
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
        $nome = $_POST['nome'];

        $categoria = new Categoria();

        $categoria->atualizar($id, $nome);

        header('Location: ?url=categorias');
        exit;
    }

    public function excluir()
    {
        $id = $_GET['id'];

        $categoria = new Categoria();

        $categoria->excluir($id);

        header('Location: ?url=categorias');
        exit;
    }
}