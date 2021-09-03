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

    /**
     * Product listing by brand
     *
     * @param [array] $params Associative array of all URL parameters
     */
    public function brand($params)
    {
        // J'instancie ma classe brand
        // pour pouvoir appeler sa méthode find()
        $brandModel = new Brand();
        $brand = $brandModel->find($params['id']);

        // dump($params);
        // dump($brand);
        // dump($brandModel->findAll());

        $this->show('product.list');
    }

    public function product()
    {
        $this->show('product.details');
    }
}
