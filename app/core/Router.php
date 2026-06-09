<?php

class Router {

    public function run() {

        $url = $_GET['url'] ?? 'home';

        switch($url) {

            // HOME
            case 'home':

                require_once '../app/controllers/HomeController.php';

                $controller = new HomeController();
                $controller->index();

            break;

            // CADASTRO
            case 'cadastro':

                require_once '../app/controllers/AuthController.php';

                $controller = new AuthController();
                $controller->cadastro();

            break;

            case 'salvar':

                require_once '../app/controllers/AuthController.php';

                $controller = new AuthController();
                $controller->salvar();

            break;

            // LOGIN
            case 'login':

                require_once '../app/controllers/AuthController.php';

                $controller = new AuthController();
                $controller->login();

            break;

            case 'autenticar':

                require_once '../app/controllers/AuthController.php';

                $controller = new AuthController();
                $controller->autenticar();

            break;

            case 'logout':

                require_once '../app/controllers/AuthController.php';

                $controller = new AuthController();
                $controller->logout();

            break;

            // RECEITAS
            case 'criar-receita':

                require_once '../app/controllers/ReceitaController.php';

                $controller = new ReceitaController();
                $controller->criar();

            break;

            case 'salvar-receita':

                require_once '../app/controllers/ReceitaController.php';

                $controller = new ReceitaController();
                $controller->salvar();

            break;

            case 'receitas':

                require_once '../app/controllers/ReceitaController.php';

                $controller = new ReceitaController();
                $controller->index();

            break;

            case 'minhas-receitas':

                require_once '../app/controllers/ReceitaController.php';

                $controller = new ReceitaController();
                $controller->minhas();

            break;

            case 'editar-receita':

                require_once '../app/controllers/ReceitaController.php';

                $controller = new ReceitaController();
                $controller->editar();

            break;

            case 'atualizar-receita':

                require_once '../app/controllers/ReceitaController.php';

                $controller = new ReceitaController();
                $controller->atualizar();

            break;

            case 'excluir-receita':

                require_once '../app/controllers/ReceitaController.php';

                $controller = new ReceitaController();
                $controller->excluir();

            break;

            // USUÁRIOS
            case 'usuarios':

                require_once '../app/controllers/UsuarioController.php';

                $controller = new UsuarioController();
                $controller->index();

            break;

            case 'editar-usuario':

                require_once '../app/controllers/UsuarioController.php';

                $controller = new UsuarioController();
                $controller->editar();

            break;

            case 'atualizar-usuario':

                require_once '../app/controllers/UsuarioController.php';

                $controller = new UsuarioController();
                $controller->atualizar();

            break;

            case 'excluir-usuario':

                require_once '../app/controllers/UsuarioController.php';

                $controller = new UsuarioController();
                $controller->excluir();

            break;

            // CATEGORIAS
            case 'categorias':

                require_once '../app/controllers/CategoriaController.php';

                $controller = new CategoriaController();
                $controller->index();

            break;

            case 'criar-categoria':

                require_once '../app/controllers/CategoriaController.php';

                $controller = new CategoriaController();
                $controller->criar();

            break;

            case 'salvar-categoria':

                require_once '../app/controllers/CategoriaController.php';

                $controller = new CategoriaController();
                $controller->salvar();

            break;

            case 'editar-categoria':

                require_once '../app/controllers/CategoriaController.php';

                $controller = new CategoriaController();
                $controller->editar();

            break;

            case 'atualizar-categoria':

                require_once '../app/controllers/CategoriaController.php';

                $controller = new CategoriaController();
                $controller->atualizar();

            break;

            case 'excluir-categoria':

                require_once '../app/controllers/CategoriaController.php';

                $controller = new CategoriaController();
                $controller->excluir();

            break;

            case 'recuperar-senha':

            require_once '../app/controllers/AuthController.php';

            $controller = new AuthController();
            $controller->recuperarSenha();

            break;

            case 'alterar-senha':

            require_once '../app/controllers/AuthController.php';

            $controller = new AuthController();
            $controller->alterarSenha();

            break;

            default:

                echo "Página não encontrada.";

            break;
        }
    }
}