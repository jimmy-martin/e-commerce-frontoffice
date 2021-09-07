<?php

namespace app\models;

use app\utils\Database;
use PDO;

class Product extends CoreModel
{
    // =============================================================
    // PROPERTIES
    // =============================================================

    protected $description;
    protected $picture;
    protected $price;
    protected $rate;
    protected $status;

    protected $brand_id;
    protected $category_id;
    protected $type_id;

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

        $productObject = $statement->fetchObject(self::class);

        return $productObject;
    }

    /**
     * Return all the products
     *
     * @return [object] $allProductObjects
     */
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `product`';

        $statement = $pdo->query($sql);

        $allProductObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $allProductObjects;
    }

    /**
     * Return all the products
     *
     * @return [object] $allProductObjects
     */
    public function findForBrand($id)
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * 
        FROM `product`
        WHERE `brand_id` = '. $id;

        $statement = $pdo->query($sql);

        $allProductObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $allProductObjects;
    }

    public function findForCategory($id)
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * 
        FROM `product`
        WHERE `category_id` = '. $id;

        $statement = $pdo->query($sql);

        $allProductObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $allProductObjects;
    }

    public function findForType($id)
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * 
        FROM `product`
        WHERE `type_id` = '. $id;

        $statement = $pdo->query($sql);

        $allProductObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $allProductObjects;
    }




    // =============================================================
    // GETTERS & SETTERS
    // =============================================================
    #region getters & setters // permet de pouvoir reduire par la suite une partie du code

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set the value of rate
     *
     * @return  self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
    #endregion

    /**
     * Get the value of type_id
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Get the value of brand_id
     */ 
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategoryId()
    {
        return $this->category_id;
    }
}
