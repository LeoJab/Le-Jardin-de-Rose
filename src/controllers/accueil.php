<?php

namespace Application\Controllers\Accueil;

require_once('src/lib/database.php');
require_once('src/model/produit.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Produit\ProduitRepository;

class Accueil 
{
    public function execute()
    {
        $produitRepository = new ProduitRepository();
        $produitRepository->connection = new DatabaseConnection;
        $products = $produitRepository->getProductsLimit(10);

        require('templates/accueil.php');
    }
}

?>