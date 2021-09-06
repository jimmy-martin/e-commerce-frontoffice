<?php

class MainController extends CoreController
{
    public function home()
    {
        // $brandModel = new Brand();
        // $footerBrands = $brandModel->findForFooter();

        // Je met les marques a mettre dans mon footer dans une variable puis je passe cette variable dans le tableau attendu par la fonctiun show
        $this->show('home');
    }

    public function legal()
    {
        $this->show('legal');
    }

    public function test()
    {
        /**
         * Return a category by id
         *
         * @param [int] $id ID of the searched category in database
         * @return [object] $categoryObject
         */
        function find($id)
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
        function findAll()
        {
            $pdo = Database::getPDO();

            $sql = 'SELECT * FROM `category`';

            $statement = $pdo->query($sql);

            $allCategoriesObjects = $statement->fetchAll(PDO::FETCH_CLASS, 'Category');

            return $allCategoriesObjects;
        }

        dump(find(1), findAll());
    }

}
