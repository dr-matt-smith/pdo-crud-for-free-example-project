<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Itb\MainController;

define('DB_HOST', 'localhost');
define('DB_USER', 'fred');
define('DB_PASS', 'smith');
define('DB_NAME', 'itb');

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

switch ($action){
    case 'search':
        MainController::searchAction();
        break;
    case 'list':
    default:
        MainController::listAction();
        break;
}