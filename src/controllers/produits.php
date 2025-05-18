<?php

namespace Application\Controllers\Produits;

require_once('src/lib/database.php');
require_once('src/model/produit.php');
require_once('src/model/categorie.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Produit\ProduitRepository;
use Application\Model\Categorie\CategorieRepository;

class Produits
{
    public function execute() 
    {
        $categorieRepository = new CategorieRepository;
        $categorieRepository->connection = new DatabaseConnection;
        $categories = $categorieRepository->getCategories();

        $produitRepository = new ProduitRepository;
        $produitRepository->connection = new DatabaseConnection;
        $produits = $produitRepository->getProduits();

        require('templates/nos_creations.php');
    }

    public function adminExecute()
    {
        $categorieRepository = new CategorieRepository;
        $categorieRepository->connection = new DatabaseConnection;
        $categories = $categorieRepository->getCategories();

        $produitRepository = new ProduitRepository;
        $produitRepository->connection = new DatabaseConnection;
        $produits = $produitRepository->getProduits();

        require('templates/admin/produit.php');
    }
}

?>