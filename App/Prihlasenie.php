<?php

namespace App;

class Prihlasenie
{


    public static function login($login,$password)
    {
        $_SESSION['Meno'] = $login;
        $_SESSION['Heslo'] = $password;
       /*if ($login == self::LOGIN) {
           $_SESSION["name"] = $login;
           return true;
       } else {
            return false;
       }*/
    }

    public static function logout()
    {
        unset($_SESSION['Meno']);
        unset($_SESSION['Heslo']);
        session_destroy();
    }

    public static function isLogged()
    {
        return isset($_SESSION['Meno']);
    }

    public static function getName()
    {
        return (Prihlasenie::isLogged() ? $_SESSION['Meno']:"");
    }
}