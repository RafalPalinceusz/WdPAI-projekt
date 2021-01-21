<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login_screen');
    }

    public function report()
    {
        $this->render('report');
    }
}