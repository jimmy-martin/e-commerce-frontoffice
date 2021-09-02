<?php

class CatalogController
{

    public function category()
    {
        $this->show('product.list');
    }

    public function type(){
        $this->show('product.list');
    }
    public function brand()
    {
        $this->show('product.list');
    }

    public function product(){
        $this->show('product.details');
    }

    public function show($viewName, $viewVars = [])
    {
        require_once __DIR__ . '/../views/partials/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/partials/footer.tpl.php';
    }
}
