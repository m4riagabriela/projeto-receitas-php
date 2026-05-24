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

       } public function minhas() {

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
    }

