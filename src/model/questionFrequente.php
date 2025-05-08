<?php

namespace Application\Model\QuestionFrequente;

require_once('src/lib/database.php');

use Application\Lib\Database\DatabaseConnection;

class QuestionFrequente
{
    public string $id;
    public string $question;
    public string $reponse;
    public string $visible;
}

class QuestionFrequenteRepository
{
    public function getQuestionsFrequentesLimit(int $limit): Array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM questionFrequente LIMIT $limit"
        );
        $statement->execute();

        $questionsFrequentes = [];
        while (($row = $statement->fetch()))
        {
            $questionFrequente = new QuestionFrequente;
            $questionFrequente->id = $row['idQuestionFrequente'];
            $questionFrequente->question = $row['question'];
            $questionFrequente->reponse = $row['reponse'];
            $questionFrequente->visible = $row['visible'];

            $questionsFrequentes[] = $questionFrequente;
        }

        return $questionsFrequentes;
    }
}

?>