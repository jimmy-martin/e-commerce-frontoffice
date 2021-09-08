<?php

// Je charge automatiquement toutes mes dependances
// grace a autoload.php créé par Composer
require_once __DIR__ . '/../vendor/autoload.php';


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

// Je créé mes routes
$router->map(
    'GET',  //! 1: Methode http (plupart du temps get)
    '/', //! 2: url de la route (sans la partie fixe)
    ['controller' => '\\app\\controllers\\MainController', 'method' => 'home',], //! 3: tableau qui stocke le nom du controller et la methode necessaire au fonctionnement du dispatcher
    'main-home' //! 4 (optionnel): Nom unique de la route (on utilise une convention de nommage: '{nom_du_controller}-{nom_de_la_route}')
);

// Afin de faciliter l'ajout de pages je vais utiliser addRoutes() de AltoRouter
// et non plus map()
$router->addRoutes([
    [
        'GET',
        '/legal',
        ['controller' => '\\app\\controllers\\MainController', 'method' => 'legal',],
        'main-legal'
    ],
    [
        'GET',
        '/bucket',
        ['controller' => '\\app\\controllers\\MainController', 'method' => 'bucket',],
        'main-bucket'
    ],
    [
        'GET',
        '/catalog/category/[i:id]',
        ['controller' => '\\app\\controllers\\CatalogController', 'method' => 'category',],
        'catalog-category'
    ],
    [
        'GET',
        '/catalog/type/[i:id]',
        ['controller' => '\\app\\controllers\\CatalogController', 'method' => 'type',],
        'catalog-type'
    ],
    [
        'GET',
        '/catalog/brand/[i:id]',
        ['controller' => '\\app\\controllers\\CatalogController', 'method' => 'brand',],
        'catalog-brand'
    ],
    [
        'GET',
        '/catalog/product/[i:id]',
        ['controller' => '\\app\\controllers\\CatalogController', 'method' => 'product',],
        'catalog-product'
    ],
    [
        'GET',
        '/test',
        ['controller' => '\\app\\controllers\\MainController', 'method' => 'test',],
        'main-test'
    ]
]);

// Ensuite, on demande au router de trouver la route
// qui correspond à l'url demandée par le client
$routeInfo = $router->match();

// dump($routeInfo);

// $requestedPageURL = $_GET['_url'] ?? '/';

// Gestion des mauvaises url 
if (!$routeInfo) {
    // pour afficher une erreur 404 je procede comme ci dessous
    http_response_code(404);
    exit('Cette page n\'existe pas !');
}

// Je peux maintenant acceder a la route correspondante
$dispatchInfo = $routeInfo['target'];

// On a donc accèes aux infos necessaires
$controllerName = $dispatchInfo['controller'];
$methodName = $dispatchInfo['method'];

//=============================================================
// DISPATCHER
//=============================================================

// Je peux maintenant instancier dynamiquement mon controller
$controller = new $controllerName();
// Et appeler la méthode là aussi dynamiquement
// Je transmet un tableau qui contient tous les params de l'url
$controller->$methodName($routeInfo['params']);
