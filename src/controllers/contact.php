<?php

namespace Application\Controllers\Contact;

require_once('src/lib/database.php');
require_once('src/model/questionFrequente.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\QuestionFrequente\QuestionFrequenteRepository;

class Contact
{
    public function execute()
    {
        $questionFrequenteRepository = new QuestionFrequenteRepository();
        $questionFrequenteRepository->connection = new DatabaseConnection;
        $questionsFrequentes = $questionFrequenteRepository->getQuestionsFrequentesLimit(5);

        require('templates/contact.php');
    }
}