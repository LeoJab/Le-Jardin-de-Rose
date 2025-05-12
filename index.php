<?php

require_once('src/controllers/accueil.php');
require_once('src/controllers/produits.php');

use Application\Controllers\Accueil\Accueil;
use Application\Controllers\Produits\Produits;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if($_GET['action'] === "nos_creations") {
            (new Produits())->execute();
        } else {
            throw new Exception("La page que vous recherchez n'existe pas.");
        }
    } else {
        (new Accueil())->execute();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require('templates/error.php');
}