<?php
require_once './app/controladores/controlador.categoria.php';
require_once './app/controladores/controlador.producto.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$controladorCategorias = new controladorCategoria();
$controladorProductos = new controladorProducto();

// tabla de ruteo
switch ($params[0]) {
    case 'home':
        $controladorProductos->mostrarProductos();
        break;
    case 'list':
        $controladorProductos->mostrarProductos();
        break;
    case 'mostrarprod':
        $controladorProductos->mostrarProducto($params[1]);
        break;
    case 'lista-cat':
        $controladorCategorias->mostrarCategorias();
        break;
    case 'items-cat':
        if(isset($params[1])&&!empty($params[1])){
            $controladorProductos->mostrarProductosPorCat($params[1]);
        }
        else{
            $controladorCategorias->mostrarCategoriasId();
        }
        
        break;
    case 'agregar-producto':
        $controladorProductos->agregarPorducto();
        break;        
    case 'add-cat':
        //$taskController->addTask();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        //$taskController->deleteTask($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
