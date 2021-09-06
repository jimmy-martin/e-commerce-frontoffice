<?php

class CoreController
{
    public function show($viewName, $viewVars = [])
    {
        global $router;        

        $brandModel = new Brand();
        $footerBrands = $brandModel->findForFooter();
        $viewVars['footerBrands'] = $footerBrands;
        dump($viewVars);
        
        $absoluteURL = $_SERVER['BASE_URI'];
        require_once __DIR__ . '/../views/partials/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/partials/footer.tpl.php';
    }
}
