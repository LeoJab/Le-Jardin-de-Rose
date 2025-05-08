<?php

namespace Application\Model\Produit;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Product 
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
    public function getProducts(): Array 
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM Produit"
        );
        $statement->execute();

        $products = [];
        while (($row = $statement->fetch())) {
            $product = new Product;
            $product->identifier = $row['idProduit'];
            $product->name = $row['nom'];
            $product->description = $row['description'];
            $product->picture = $row['photo'];
            $product->addDate = $row['dateAjout'];
            $product->visibility = $row['visible'];
            $product->categorie = $row['idCategorie'];

            $products[] = $product;
        }

        return $products;
    }
}

?>