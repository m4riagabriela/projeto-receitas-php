<?php

session_start();

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

require_once '../app/config/config.php';

require_once '../app/core/Controller.php';
require_once '../app/core/Router.php';

$router = new Router();
$router->run();