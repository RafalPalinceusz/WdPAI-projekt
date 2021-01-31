<?php
require_once 'AppController.php';
require_once __DIR__ .'/../models/reports.php';

class ReportController extends AppController {

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];

    public function makeReport()
    {
        if($this ->isPost() && is_upload_file($_FILES['screenshot']['tmp_name']) && $this->validate($_FILES['screenshot']))
        {
            move_uploaded_file
            (
                $_FILES['screenshot']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['screenshot']['name']
            );

            $reports = new reports($_POST['title'], $_POST['message'], $_FILES['screenshot']['name']);

            #return $this->render('report', ['messages' => $this->message]);
        }
         return $this->render('reportProgram', ['messages' => $this->message]);
    }

    private function checkImg(array $file): bool
    {
        if($file['size'] > self::MAX_FILE_SIZE)
        {
            $this->message[] = 'Zdjecie jest zbyt duże do wgrania';
        }

        if(!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES))
        {
            $this->message[] = 'Nie można wgrać takiego typu pliku.';
            return false;
        }
        return true;
    }
}