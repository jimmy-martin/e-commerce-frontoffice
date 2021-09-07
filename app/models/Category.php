<?php

namespace app\models;

use app\utils\Database;
use PDO;

class Category extends CoreModel
{
    // =============================================================
    // PROPERTIES
    // =============================================================

    protected $subtitle;
    protected $picture;
    protected $home_order;

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
        $categoryObject = $statement->fetchObject(self::class);
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
        $allCategoriesObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $allCategoriesObjects;
    }
    /**
     * Retrun all catgeroies in the home page
     *
     * @return self[]
     */
    public function findForHome()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * 
        FROM `category`
        WHERE `home_order` != 0
        ORDER BY `home_order`
        LIMIT 5';
        $statement = $pdo->query($sql);
        $allCategoriesObjects = $statement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $allCategoriesObjects;
    }


    // =============================================================
    // GETTERS & SETTERS
    // =============================================================
    #region getters & setters

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
    #endregion
}
