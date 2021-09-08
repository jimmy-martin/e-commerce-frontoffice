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
        $productModel = new Product();
        
        $category = $categoryModel->find($params['id']);
        $categoryProducts = $productModel->findForCategory($category->getId());
        
        // dump($params);
        dump($category);
        // dump($categoryModel->findAll());

        $this->show('product.list', [
            'listName' => $category,
            'products' => $categoryProducts,
        ]);
    }

    public function type($params)
    {
        $typeModel = new Type();
        $productModel = new Product();

        $type = $typeModel->find($params['id']);
        $typeProducts = $productModel->findForType($params['id']);

        // dump($params);
        // dump($type);
        // dump($typeModel->findAll());

        $this->show('product.list', [
            'listName' => $type, 
            'products' => $typeProducts,
            'type' => $typeModel, 
        ]);
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
        $categoryModel = new Category();
        $product = $productModel->find($params['id']);

        // dump($params);
        dump($product);
        // dump($productModel->findAll());

        $this->show('product.details', [
            'product' => $product,
            'category' => $categoryModel,
        ]);
    }
}
