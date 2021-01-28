<?php

class reports
{
    private $title;
    private $screenshot;
    private $message;

    public function __construct($title, $screenshot, $message)
    {
        $this->title = $title;
        $this->screenshot = $screenshot;
        $this->message = $message;

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getScreenshot()
    {
        return $this->screenshot;
    }

    public function setScreenshot($screenshot)
    {
        $this->screenshot = $screenshot;
    }

    public function getMessage()
    {
        return $this->message;
    }


    public function setMessage($message)
    {
        $this->message = $message;
    }



}