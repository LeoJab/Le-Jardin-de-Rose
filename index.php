<?php

require_once('src/controllers/accueil.php');
require_once('src/controllers/produits.php');
require_once('src/controllers/contact.php');

use Application\Controllers\Accueil\Accueil;
use Application\Controllers\Produits\Produits;
use Application\Controllers\Contact\Contact;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if($_GET['action'] === "nos_creations") {
            (new Produits())->execute();
        } else if($_GET["action"] === "contact") {
            (new Contact())->execute();
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