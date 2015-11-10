<?php
namespace Acme;

class JUser implements \JsonSerializable
{
    private $name;
    private $email;

    public function __construct($name, JEmail $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function jsonSerialize()
    {
        return [
            'user' => $this->name,
            'email' => $this->email,
        ];
    }
}






