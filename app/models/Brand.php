<?php

class Brand extends CoreModel
{
    // =============================================================
    // PROPERTIES
    // =============================================================

    protected $footer_order;

    // =============================================================
    // METHODS
    // =============================================================

    /**
     * Return a brand by id
     *
     * @param [int] $id ID of the searched Brand in database
     * @return [object] $brandObject
     */
    public function find($id)
    {
        // On se connecte a la bdd
        // et on recupere l'objet pdo pour mes futures requetes
        $pdo = Database::getPDO();

        // On prepare notre requete
        $sql = 'SELECT * FROM `brand` WHERE `id` = ' . $id;

        //  On execute la requete
        $statement = $pdo->query($sql);

        // Je recupere le resultat de la requete
        // dans un objet de type Brand (grace a fetchObject)
        // avec les valeurs trouvées dans la bdd
        $brandObject = $statement->fetchObject('Brand');

        return $brandObject;
    }

    /**
     * Return all the brands
     *
     * @return [object] $allBrandObjects
     */
    public function findAll()
    {
        // On se connecte a la bdd
        // et on recupere l'objet pdo pour mes futures requetes
        $pdo = Database::getPDO();

        // On prepare notre requete
        $sql = 'SELECT * FROM `brand`';

        //  On execute la requete
        $statement = $pdo->query($sql);

        // Je recupere le resultat de la requete
        // dans un tableau d'objets de type Brand (grace a fetchObject)
        // avec les valeurs trouvées dans la bdd
        $allBrandObjects = $statement->fetchAll(PDO::FETCH_CLASS, 'Brand');

        return $allBrandObjects;
    }

    // =============================================================
    // GETTERS & SETTERS
    // =============================================================
    #region getters & setters

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
