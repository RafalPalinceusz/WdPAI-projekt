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
            $connect = new PDO(
                "pgsql:host=$this->host;port=5432;dbname=$this->database",
                $this->username,
                $this->password,
                ["sslmode" => "prefer"]
            );

            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;

        }
        catch(PDOException $e)
        {
            die("Brak połaczenia z bazą danych: " . $e->getMessage());

        }
    }

}