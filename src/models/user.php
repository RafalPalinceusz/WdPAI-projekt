<?php


class user
{
    private $name;
    private $password;
    private $code;


    public function __construct(string $name, string $password, string $code)
    {
        $this->name = $name;
        $this->password = $password;
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getPassword(): string
    {
        return $this->password;
    }

    public function getCode(): string
    {
        return $this->code;
    }
}