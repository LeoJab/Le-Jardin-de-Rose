<?php

namespace Application\Controllers\Contact;

require_once('src/lib/database');
require_once('src/model/questionFrequente.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\QuestionFrequente\QuestionFrequenteRepository;

class Contact
{
    public function execute()
    {
        $questionsFrequentes = new QuestionFrequenteRepository;
        $questionsFrequentes->connexion = new DababaseConnection;
        $questions = $questionsFrequentes->getQuestionsFrequentesLimit(5);

        require('templates/contact.php');
    }
}