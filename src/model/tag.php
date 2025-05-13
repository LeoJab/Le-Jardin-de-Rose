<?php

namespace Application\Model\Tag;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class Tag 
{
    public string $id;
    public string $nom;
    public string $idProduit;
}

class TagRepository
{
    public function getTagsProduit(int $idProduit): Array 
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM Tag WHERE idProduit = $idProduit"
        );
        $statement->execute();

        $tags = [];
        while(($row = $statement->fetch())) {
            $tag = new Tag;
            $tag->id = $row['idTag'];
            $tag->nom = $row['nom'];
            $tag->idProduit = $row['idProduit'];

            $tags[] = $tag;
        }

        return $tags;
    }
}