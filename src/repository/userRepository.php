<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/user.php';

class userRepository extends Repository
{
    public function getuser(string $name): ?User
    {
        $stmt = $this ->database ->connect() ->prepare(
            'SELECT * FROM public.users WHERE login =:name');

        $stmt = bind_param(':name', login, PDO::FETCH_ASSOC);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false)
        {
            return null;
        }

        return new User(
            $user['name'],
            $user['password'],
            $user['code']
        );
    }
}