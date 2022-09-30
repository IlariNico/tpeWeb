<?php

include_once 'functions.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// calculadora/route.php?action=pi --> pi.php

// calculadora/route.php?action=about/Javito --> ["about", "Javito"]

// parsea la accion Ej: sumar/1/2 --> ['sumar', 5, 4]
// calculadora/route.php?action=sumar/1/2


$params = explode('/', $action);
var_dump($params[1]);
// determina que camino seguir según la acción
switch ($params[0]) {
    case 'search': 
        filterArea();
    default: 
        showHome(); 
        echo "wep";
        break;
}


?>