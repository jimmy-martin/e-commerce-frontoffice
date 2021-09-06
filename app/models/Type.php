<?php

class Type
{
    // =============================================================
    // PROPERTIES
    // =============================================================

    private $id;
    private $name;
    private $footer_order;
    private $created_at;
    private $updated_at;

    // =============================================================
    // METHODS
    // =============================================================

    /**
     * Return a type by id
     *
     * @param [int] $id ID of the searched type in database
     * @return [object] $typeObject
     */
    public function find($id)
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `type` WHERE `id` = ' . $id;
        $statement = $pdo->query($sql);
        $typeObject = $statement->fetchObject('Type');
        return $typeObject;
    }

    /**
     * Return all the types
     *
     * @return [object] $allTypeObjects
     */
    public function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `type`';
        $statement = $pdo->query($sql);
        $allTypeObjects = $statement->fetchAll(PDO::FETCH_CLASS, 'Type');
        return $allTypeObjects;
    }

    // =============================================================
    // GETTERS & SETTERS
    // =============================================================
    #region getters & setter

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
     * Get the value of footer_order
     */
    public function getFooterOrder()
    {
        return $this->footer_order;
    }

    /**
     * Set the value of footer_order
     *
     * @return  self
     */
    public function setFooterOrder($footer_order)
    {
        $this->footer_order = $footer_order;

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
    #endregion
}
