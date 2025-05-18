<?php

require_once('src/controllers/accueil.php');
require_once('src/controllers/produits.php');
require_once('src/controllers/contact.php');
require_once('src/controllers/produit.php');

use Application\Controllers\Accueil\Accueil;
use Application\Controllers\Produits\Produits;
use Application\Controllers\Contact\Contact;
use Application\Controllers\Produit\Produit;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if($_GET['action'] === "nos_creations") {
            (new Produits())->execute();
        } else if($_GET["action"] === "contact") {
            (new Contact())->execute();
        } else if($_GET["action"] === "produit") {
            if (isset($_GET['idProduit']) && $_GET['idProduit'] > 0) {
                $idProduit = $_GET['idProduit'];

                (new Produit())->execute($idProduit);
            } else {
                throw new Exception('Aucun identifiant de produit envoyé');
            }
        } else if($_GET['action'] === 'admin') {
            //if(isset($_SESSION) && $_SESSION['role'] === 'admin') {
                if(isset($_GET['page']) && $_GET['page'] !== '') {
                    if($_GET['page'] === 'accueil') {
                        // Page Accueil
                    } else if($_GET['page'] === 'devis') {
                        // Page Devis
                    } else if($_GET['page'] === 'contact') {
                        // Page Contact
                    } else if($_GET['page'] === 'produit') {
                        (new Produits())->adminExecute();
                    }
                } else {
                    // Page Accueil
                }
            //}
            // Page Connexion
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