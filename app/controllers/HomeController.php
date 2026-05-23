<?php

require_once '../app/core/Controller.php';

class HomeController extends Controller {

    public function index() {

        $dados = [
            'titulo' => 'Sistema de Receitas'
        ];

        $this->view('home', $dados);
    }
}