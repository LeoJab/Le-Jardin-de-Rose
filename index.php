<?php

require_once('src/controllers/accueil.php');

use Application\Controllers\Accueil\Accueil;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        
    } else {
        (new Accueil())->execute();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require('templates/error.php');
}