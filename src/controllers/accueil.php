<?php

namespace Application\Controllers\Accueil;

require_once('src/lib/database.php');
require_once('src/model/produit.php');
require_once('src/model/questionFrequente.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Produit\ProduitRepository;
use Application\Model\QuestionFrequente\QuestionFrequenteRepository;

class Accueil 
{
    public function execute()
    {
        $produitRepository = new ProduitRepository();
        $produitRepository->connection = new DatabaseConnection;
        $products = $produitRepository->getProductsLimit(10);

        $questionFrequenteRepository = new QuestionFrequenteRepository();
        $questionFrequenteRepository->connection = new DatabaseConnection;
        $questionsFrequentes = $questionFrequenteRepository->getQuestionsFrequentesLimit(5);

        require('templates/accueil.php');
    }
}

?>