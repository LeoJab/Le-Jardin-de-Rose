<?php

namespace Application\Model\QuestionFrequente;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class QuestionFrequente
{
    public string $identifier;
    public string $question;
    public string $response;
}

class QuestionFrequenteRepository
{
    public function getQuestionsFrequentesLimit(int $limit): Array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM questionFrequente LIMIT $limit"
        );
        $statement->execute();
    }


}

?>