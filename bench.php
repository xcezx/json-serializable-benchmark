<?php
class Bench
{
    /**
     * @Revs(100000)
     * @Iterations(10)
     */
    public function benchJsonEncode()
    {
        $user = new Acme\User('John Doe', new Acme\Email('john.doe@example.com'));
        json_encode([
            'user' => $user->getName(),
            'email' => [
                'domain' => $user->getEmail()->getDomain(),
                'local' => $user->getEmail()->getLocal(),
            ],
        ]);
    }

    /**
     * @Revs(100000)
     * @Iterations(10)
     */
    public function benchJsonSerialize()
    {
        $user = new Acme\JUser('John Doe', new Acme\JEmail('john.doe@example.com'));
        json_encode($user);
    }
}
