<?php

namespace Application\Controllers\Header;

require_once('src/lib/database.php');
require_once('src/model/categorie.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Categorie\CategorieRepository;

class Header 
{
    public function execute()
    {
        $categorieRepository = new CategorieRepository;
        $categorieRepository->connection = new DatabaseConnection;
        $categories = $categorieRepository->getCategories();

        require('templates/header.php');
    }
}

?>