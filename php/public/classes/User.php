<?php

class User
{
    /**properties */
    public ?string $userId;
    public $email;
    public $username;
    public $passwordHash;

    /**constructor */
    public function __construct($userId, $email, $username, $passwordHash)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->username = $username;
        $this->passwordHash = $passwordHash;
    }

    /**methods */

    /**getters and setters*/
    /**Won't ever need to set a userId because that's done automagically by the DB */
    public function getUserId()
    {
        return $this->userId;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        return $this->username = $username;
    }

    private function getPasswordHash()
    {
        return $this->passwordHash;
    }

    private function setPasswordHash($passwordHash)
    {
        return $this->passwordHash = $passwordHash;
    }
}
