<?php

class User
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Employee extends User
{
    public $role = 'employee';
}

class Catalog
{
    private $users = [];

    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    public function getNames()
    {
        foreach ($this->users as $user) {
            echo $user->getName() . PHP_EOL;
        }
    }
}


$user = new User;
$user->setName('Vladimir Guts');

$user2 = new Employee;
$user2->setName('Dmitry Golub');
$user2->role = 'manager';

$catalog = new Catalog;
$catalog->addUser($user);
$catalog->addUser($user2);
$catalog->getNames();



