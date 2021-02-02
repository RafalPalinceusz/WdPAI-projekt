<?php

require_once 'config.php';

class Database
{
    private $username;
    private $password;
    private $host;
    private $database;


    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->host = HOST;
        $this->database = DATABASE;
    }

    public function connect()
    {
        try
        {
            $connecting = new PDO(
                "pgsql:host=$this->host;port=5432;dbname=$this->database",
                $this->username,
                $this->password,
                ["sslmode" => "prefer"]
            );

            $connecting->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connecting;

        }
        catch(PDOException $e)
        {
            die("Brak połaczenia z bazą danych: " . $e->getMessage());

        }
    }

}