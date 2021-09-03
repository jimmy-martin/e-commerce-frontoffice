<?php

class Product
{
    // =============================================================
    // PROPERTIES
    // =============================================================

    private $id;
    private $name;
    private $description;
    private $picture;
    private $price;
    private $rate;
    private $status;
    private $created_at;
    private $updated_at;
    private $brand_id;
    private $category_id;
    private $type_id;

    // =============================================================
    // METHODS
    // =============================================================

    /**
     * Return a product by id
     *
     * @param [int] $id ID of the searched product in database
     * @return [object] $productObject
     */
    public function find($id)
    {        
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `product` WHERE `id` = ' . $id;

        $statement = $pdo->query($sql);

        $productObject = $statement->fetchObject('Product');

        return $productObject;
    }

    /**
     * Return all the brands
     *
     * @return [object] $allProductObjects
     */
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `product`';

        $statement = $pdo->query($sql);

        $allProductObjects = $statement->fetchAll(PDO::FETCH_CLASS, 'Product');

        return $allProductObjects;
    }

    // =============================================================
    // GETTERS & SETTERS
    // =============================================================


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }
}
