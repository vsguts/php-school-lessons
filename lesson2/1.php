<?php

trait LoggerTrait
{
    protected function log($msg)
    {
        echo $msg;
    }
}

class User
{
    use LoggerTrait;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
        $this->log('Name was set');
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getName() : string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class Catalog
{
    use LoggerTrait;

    /**
     * @var User[]
     */
    protected $users = [];

    public function addUser(User $user)
    {
        $users[] = $user;
        $this->log('User added to catalog');
    }
}



$user = new User;

$user->setFirstName("Vladimir");
$user->setLastName("Guts");

$catalog = new Catalog();
$catalog->addUser($user);
