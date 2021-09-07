<?php

class CoreController
{
    /**
     * Methode permettant d'afficher nos vues
     *
     * @param string $viewName
     * @param array $viewVars
     * @return void
     */
    protected function show($viewName, $viewVars = [])
    {
        global $router;

        // Pour chaque clé du tableau $viewVars, 
        // On va créer une variable du nom de la clé
        // avec la meme valeur
        // grace a la fonction extract()
        // ceci va permettre d'utiliser directement le nom de la variable dans les vues sans passer par $viewVars
        extract($viewVars);

        // ===== Données communes à toutes mes pages =====

        // ===== Recuperation des marques du footer =====
        $brandModel = new Brand();
        $footerBrands = $brandModel->findForFooter();
        $viewVars['footerBrands'] = $footerBrands;
        // ===== Recuperation des types du footer =====
        $typeModel = new Type();
        $footerTypes = $typeModel->findForFooter();
        $viewVars['footerTypes'] = $footerTypes;
        
        // grace a extract() nos données seront donc sous cette forme:
        // $footerBrands = ...
        // $footertypes = ...
        // au lieu de [ 'footerBrands' => $footerBrand, "footerYypes" => $footerTypes ]

        dump($viewName, $viewVars);

        // ===== Affichage des vues =====

        $absoluteURL = $_SERVER['BASE_URI'];
        require_once __DIR__ . '/../views/partials/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/partials/footer.tpl.php';
    }
}
