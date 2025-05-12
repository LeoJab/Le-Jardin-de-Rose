<?php

namespace Application\Model\Produit;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Produit 
{
    public string $identifier;
    public string $name;
    public string $description;
    public string $picture;
    public string $addDate;
    public string $visibility;
    public string $categorie;
}

class ProduitRepository
{
    public function getproduits(): Array 
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM Produit"
        );
        $statement->execute();

        $produits = [];
        while (($row = $statement->fetch())) {
            $produit = new Produit;
            $produit->id = $row['idProduit'];
            $produit->nom = $row['nom'];
            $produit->description = $row['description'];
            $produit->photo = $row['photo'];
            $produit->dateAjout = $row['dateAjout'];
            $produit->visibile = $row['visible'];
            $produit->categorie = $row['idCategorie'];

            $produits[] = $produit;
        }

        return $produits;
    }

    public function getproduitsLimit(int $limit): Array 
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM Produit LIMIT $limit"
        );
        $statement->execute();

        $produits = [];
        while (($row = $statement->fetch())) {
            $produit = new produit;
            $produit->id = $row['idProduit'];
            $produit->nom = $row['nom'];
            $produit->description = $row['description'];
            $produit->photo = $row['photo'];
            $produit->dateAjout = $row['dateAjout'];
            $produit->visibile = $row['visible'];
            $produit->categorie = $row['idCategorie'];

            $produits[] = $produit;
        }

        return $produits;
    }
}

?>