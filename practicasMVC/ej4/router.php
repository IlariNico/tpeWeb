<?php
require_once "./controllers/comment.controller.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$commentController=new commentController();


// tabla de ruteo
switch ($params[0]) {
    case 'home':
        
        $commentController->showHome();
        break;
    case 'add':
        guardar();
        break;
    case 'delete':
        $commentController->deleteComment($params[1]);
    break;
    default:
        echo('404 Page not found');
        break;
}
