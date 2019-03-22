<?php

class Auth
{
    public function login($username, $password)
    {
        $user = $this->getUserData($username, $password);
        if ($user) {
            $this->auth($user);
        }
    }

    public function getUserData($user, $password)
    {
        $dbUser = $this->db("SELECT * FROM users WHERE username = '" . $user . "'");
        if ($dbUser['password'] == $password) {
            return $dbUser;
        }
    }

    public function auth($user)
    {
        $_SESSION['auth'] = $user;
        $this->log('User was logged in');
    }


}




