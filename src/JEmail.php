<?php
namespace Acme;

class JEmail implements \JsonSerializable
{
    private $domain;
    private $local;

    public function __construct($email)
    {
        list($this->local, $this->domain) = explode('@', $email);
    }

    public function jsonSerialize()
    {
        return [
            'domain' => $this->domain,
            'local' => $this->local,
        ];
    }
}

