<?php

require_once __DIR__ . '/../app/controllers/MainController.php';

//=============================================================
// ROUTES
//=============================================================

// On va stocker nos routes dans une variable
$routes = [
    '/' => [
        'controller' => 'MainController',
        'method' => 'home',
    ],
];

//=============================================================
// ROUTER
//=============================================================

$requestedPageURL = $_GET['_url'] ?? '/';

// Gestion des mauvaises url 
if (!array_key_exists($requestedPageURL, $routes)){
    // pour afficher une erreur 404 je procede comme ci dessous
    http_response_code(404);
    exit();
}

// Je peux maintenant acceder a la route correspondante dans le tableau $routes
$routeInfo = $routes[$requestedPageURL];

// On a donc accèes aux infos necessaires
$controllerName = $routeInfo['controller'];
$methodName = $routeInfo['method'];

//=============================================================
// DISPATCHER
//=============================================================

// Je peux maintenant instancier dynamiquement mon controller
$controller = new $controllerName();
// Et appeler la méthode là aussi dynamiquement
$controller->$methodName();
