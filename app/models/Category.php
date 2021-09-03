<?php

class Category
{
    // =============================================================
    // PROPERTIES
    // =============================================================

    private $id;
    private $name;
    private $subtitle;
    private $picture;
    private $home_order;
    private $created_at;
    private $updated_at;

    // =============================================================
    // METHODS
    // =============================================================

    /**
     * Return a category by id
     *
     * @param [int] $id ID of the searched category in database
     * @return [object] $categoryObject
     */
    public function find($id)
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `category` WHERE `id` = ' . $id;

        $statement = $pdo->query($sql);

        $categoryObject = $statement->fetchObject('Category');

        return $categoryObject;
    }

    /**
     * Return all the categories
     *
     * @return [object] $allCategoriesObjects
     */
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = 'SELECT * FROM `category`';

        $statement = $pdo->query($sql);

        $allCategoriesObjects = $statement->fetchAll(PDO::FETCH_CLASS, 'Category');

        return $allCategoriesObjects;
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

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of subtitle
     */ 
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Set the value of subtitle
     *
     * @return  self
     */ 
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

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
     * Get the value of home_order
     */ 
    public function getHomeOrder()
    {
        return $this->home_order;
    }

    /**
     * Set the value of home_order
     *
     * @return  self
     */ 
    public function setHomeOrder($home_order)
    {
        $this->home_order = $home_order;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
