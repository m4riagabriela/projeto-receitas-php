<?php

class Router {

    public function run() {

        $url = $_GET['url'] ?? 'home';

        switch($url) {

            case 'home':

                require_once '../app/controllers/HomeController.php';

                $controller = new HomeController();
                $controller->index();

            break;

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

            case 'minhas-receitas':

    require_once '../app/controllers/ReceitaController.php';

    $controller = new ReceitaController();
    $controller->minhas();

break;

            default:

                echo "Página não encontrada.";

            break;

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
        }
    }
}