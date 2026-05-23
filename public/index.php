<?php

session_start();

require_once '../app/config/config.php';

require_once '../app/core/Controller.php';
require_once '../app/core/Router.php';

$router = new Router();
$router->run();