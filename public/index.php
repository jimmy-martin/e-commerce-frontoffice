<?php

// Je charge automatiquement toutes mes dependances
// grace a autoload.php créé par Composer
require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../app/controllers/MainController.php';

//=============================================================
// ROUTES
//=============================================================

// // On va stocker nos routes dans une variable
// $routes = [
//     '/' => [
//         'controller' => 'MainController',
//         'method' => 'home',
//     ],
//     '/category' => [
//         'controller' => 'MainController',
//         'method' => 'category',
//     ],
// ];

//=============================================================
// ROUTER
//=============================================================

//On instancie la classe AltoRouter
$router = new AltoRouter();
// dump($router); // Nouvelle daçon de dump avec vardumper

// On fournit a AltoRouter la partie de l'URL à ne pas prendre 
// en compte pour faire la comparaison entre l'URL courante et 
// l'url de la route.
// La valeur de $_SERVER['BASE_URI'] est donnée par le .htaccess. 
// Elle correspond à la racine du site => à la route "/"
$router->setBasePath($_SERVER['BASE_URI']);
// dump($_SERVER);

$router->map(
    'GET',  //! 1: Methode http (plupart du temps get)
    '/', //! 2: url de la route (sans la partie fixe)
    ['controller' => 'MainController', 'method' => 'home',], //! 3: tableau qui stocke le nom du controller et la methode necessaire au fonctionnement du dispatcher
    'main-home' //! 4 (optionnel): Nom unique de la route (on utilise une convention de nommage: '{nom_du_controller}-{nom_de_la_route}')
);

// $requestedPageURL = $_GET['_url'] ?? '/';

// Gestion des mauvaises url 
// if (!array_key_exists($requestedPageURL, $routes)) {
//     // pour afficher une erreur 404 je procede comme ci dessous
//     http_response_code(404);
//     exit();
// }

// Je peux maintenant acceder a la route correspondante dans le tableau $routes
// $routeInfo = $routes[$requestedPageURL];

// // On a donc accèes aux infos necessaires
// $controllerName = $routeInfo['controller'];
// $methodName = $routeInfo['method'];

//=============================================================
// DISPATCHER
//=============================================================

// Je peux maintenant instancier dynamiquement mon controller
$controller = new $controllerName();
// Et appeler la méthode là aussi dynamiquement
$controller->$methodName();
