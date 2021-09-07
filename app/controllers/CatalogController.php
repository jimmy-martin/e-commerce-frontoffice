<?php

namespace app\controllers;

use app\models\Brand;
use app\models\Type;
use app\models\Product;
use app\models\Category;

// Je vais utiliser l'héritage afin de ne pas recoder ma fonction show
// qui est déja codé dans CoreController
class CatalogController extends CoreController
{

    public function category($params)
    {
        $categoryModel = new Category();
        $category = $categoryModel->find($params['id']);

        // dump($params);
        dump($category);
        // dump($categoryModel->findAll());

        $this->show('product.list');
    }

    public function type($params)
    {
        $typeModel = new Type();
        $type = $typeModel->find($params['id']);

        // dump($params);
        // dump($type);
        // dump($typeModel->findAll());

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
        $productModel = new Product();
        $typeModel = new Type();

        $brand = $brandModel->find($params['id']);
        $brandProducts = $productModel->findForBrand($params['id']);

        // dump($params);
        // dump($brand);
        // dump($brandModel->findAll());

        $this->show('product.list', [
            'listName' => $brand,
            'products' => $brandProducts,
            'type' => $typeModel,
        ]);
    }

    public function product($params)
    {
        $productModel = new Product();
        $product = $productModel->find($params['id']);

        // dump($params);
        dump($product);
        // dump($productModel->findAll());

        $this->show('product.details', [
            'product' => $product,
        ]);
    }
}
