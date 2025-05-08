<?php

namespace Application\Lib\Database;

class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
        if ($this->database === NULL){
            $this->database = new \PDO('mysql:host=localhost;dbname=lejardinderose;charset=utf8', 'root');
        }

        return $this->database;
    }
}

?>