<?php

// Je vais utiliser l'héritage afin de ne pas recoder ma fonction show
// qui est déja codé dans MainController
class CatalogController extends MainController
{

    public function category()
    {
        $this->show('product.list');
    }

    public function type()
    {
        $this->show('product.list');
    }
    public function brand($params)
    {
        // dump($params['id']);

        // J'instancie ma classe brand
        // pour pouvoir appeler sa méthode find()
        $brandModel = new Brand();
        $brand = $brandModel->find($params['id']);

        $this->show('product.list');
    }

    public function product()
    {
        $this->show('product.details');
    }
}
