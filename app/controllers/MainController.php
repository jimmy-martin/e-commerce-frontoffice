<?php

class MainController
{
    public function home()
    {
        $this->show('home');
    }

    public function legal()
    {
        $this->show('legal');
    }

    public function show($viewName, $viewVars = [])
    {
        $absoluteURL = $_SERVER['BASE_URI'];
        require_once __DIR__ . '/../views/partials/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/partials/footer.tpl.php';
    }
}
