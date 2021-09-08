<?php

namespace app\models;

use app\utils\Database;
use PDO;

class Bucket extends CoreModel
{
    protected $picture; 
    protected $price; 
    protected $quantity;
    protected $total; 

    public function find()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `bucket`';
        $statement = $pdo->query($sql);
        $bucketObject = $statement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $bucketObject;
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
        // $productModel = new Product();

        // $this->picture = $productModel->find($id)->getPicture();
        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */ 
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
}
