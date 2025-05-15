<?php

namespace Application\Controllers\Produit;

require_once('src/lib/database.php');
require_once('src/model/produit.php');
require_once('src/model/tag.php');
require_once('src/model/questionFrequente.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Produit\ProduitRepository;
use Application\Model\Tag\TagRepository;
use Application\Model\QuestionFrequente\QuestionFrequenteRepository;

class Produit
{
    public function execute(int $idProduit) 
    {
        $produitRepository = new ProduitRepository;
        $produitRepository->connection = new DatabaseConnection;
        $produit = $produitRepository->getProduitId($idProduit);

        $tagRepository = new TagRepository;
        $tagRepository->connection = new DatabaseConnection;
        $tags = $tagRepository->getTagsProduit($idProduit);

        $questionFrequenteRepository = new QuestionFrequenteRepository();
        $questionFrequenteRepository->connection = new DatabaseConnection;
        $questionsFrequentes = $questionFrequenteRepository->getQuestionsFrequentesLimit(5);

        require('templates/produit.php');
    }
}

?>