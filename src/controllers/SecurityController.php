<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/user.php';

class SecurityController extends AppController
{
    public function login()
    {
        $user = new user('jantest', 'abc123','123456');

        if(!$this->isPost())
        {
            return $this->render('login');

        }

       $name = $_POST["name"];
       $password = $_POST["password"];
       $code = $_POST["code"];

       if ($user->getName() !== $name)
       {
           return $this->render('login', ['messages' => ['taki użytkownik nie istnieje']]);
       }

       if ($user->getPassword() !== $password)
       {
           return $this->render('login', ['messages' => ['błędne hasło']]);
       }

       if ($user->getCode() !== $code)
       {
           return $this->render('login', ['messages' => ['błędne kod dostępu']]);
       }

#        $url = "http://$_SERVER[HTTP_HOST]";
#        header("Location: {$url}/report");
        return $this->render('report');
    }
}