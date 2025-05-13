<?php

namespace Application\Model\Produit;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Produit 
{
    public string $id;
    public string $nom;
    public string $description;
    public string $photo;
    public string $dateAjout;
    public string $visible;
    public string $categorie;
}

class ProduitRepository
{
    public function getProduits(): Array 
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
            $produit->visible = $row['visible'];
            $produit->categorie = $row['idCategorie'];

            $produits[] = $produit;
        }

        return $produits;
    }

    public function getProduitsLimit(int $limit): Array 
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
            $produit->visible = $row['visible'];
            $produit->categorie = $row['idCategorie'];

            $produits[] = $produit;
        }

        return $produits;
    }

        public function getProduitId(int $idProduit): Produit 
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM Produit WHERE produit.idProduit = $idProduit"
        );
        $statement->execute();

        $produit = new produit;
        $produit->id = $row['idProduit'];
        $produit->nom = $row['nom'];
        $produit->description = $row['description'];
        $produit->photo = $row['photo'];
        $produit->dateAjout = $row['dateAjout'];
        $produit->visibile = $row['visible'];
        $produit->categorie = $row['idCategorie'];

        return $produit;
    }
}

?>