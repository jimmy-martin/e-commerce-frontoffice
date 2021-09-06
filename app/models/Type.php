<?php

class Type extends CoreModel
{
    // =============================================================
    // PROPERTIES
    // =============================================================

    protected $footer_order;

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
    #endregion
}
