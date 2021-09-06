<?php

class CoreController
{
    protected function show($viewName, $viewVars = [])
    {
        global $router;        

        $brandModel = new Brand();
        $footerBrands = $brandModel->findForFooter();
        $viewVars['footerBrands'] = $footerBrands;

        $typeModel = new Type();
        $footerTypes = $typeModel->findForFooter();
        $viewVars['footerTypes'] = $footerTypes;
        dump($viewVars);

        $absoluteURL = $_SERVER['BASE_URI'];
        require_once __DIR__ . '/../views/partials/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/partials/footer.tpl.php';
    }
}
