<?php

namespace Application\Model\Categorie;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Categorie
{
    public string $id;
    public string $nom;
}

class CategorieRepository
{
    public function getCategories(): Array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM Categorie"
        );
        $statement->execute();

        $categories = [];
        while (($row = $statement->fetch())) {
            $categorie = new Categorie;
            $categorie->id = $row["idCategorie"];
            $categorie->nom = $row["nom"];

            $categories[] = $categorie;
        }

        return $categories;
    }

    public function getCategorie(int $id): Categorie 
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM Categorie WHERE idCategorie = $id"
        );
        $statement->execute();

        $categorie = new Categorie;
        $categorie->id = $statement["idCategorie"];
        $categorie->$nom = $statement["nom"];

        return $categorie;
    }
}

?>