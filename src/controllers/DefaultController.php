<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function report()
    {
        $this->render('report');
    }

    public function reportProgram()
    {
        $this->render('reportProgram');
    }
}