<?php
namespace Acme;

class Email
{
    private $domain;
    private $local;

    public function __construct($email)
    {
        list($this->local, $this->domain) = explode('@', $email);
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function getLocal()
    {
        return $this->local;
    }
}

