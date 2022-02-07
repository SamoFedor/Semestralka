<?php

namespace App\Controllers;
use App\Core\DB\Connection;
use App\Models\login;
use App\Prihlasenie;





class PrihlasenieController extends AControllerRedirect
{

    /**
     * @inheritDoc
     */
    public function index()
    {

    }
    public function loginform() {
        return $this->html(

        );

    }
    public function login() {

        $login = $this->request()->getValue('login');
        $password = $this->request()->getValue('password');
        $hash =password_hash($password,PASSWORD_DEFAULT);
        $uzivatel = login::getAll('Username = ?', [$login]);
        if(sizeof($uzivatel) > 0 ) {
            if (password_verify($password,$hash)) {
                Prihlasenie::login($login,$password);
                $this->redirect('home');
            } else {
                $this->redirect('Prihlasenie','loginform',['error' => 'Zle zadane meno alebo heslo']);
            }
        } else {
            $this->redirect('Prihlasenie','loginform',['error' => 'Zle zadane meno alebo heslo']);
        }

    }
    public function logout() {
        Prihlasenie::logout();
        $this->redirect('Prihlasenie','loginform');
    }
    public function registration()
    {
        $email = $this->request()->getValue('email');
        $username = $this->request()->getValue('username');
        $password = $this->request()->getValue('password');
        $uzivatel = login::getAll('Email = ?', [$email]);
        if(sizeof($uzivatel) > 0 ) {
            $this->redirect('Prihlasenie','register',['error' => 'Zadane meno uz existuje']);
        }
            $prepare = Connection::connect()->prepare('INSERT into login (Email,Username,Password) values(?,?,?);');
            $hash =password_hash($password,PASSWORD_DEFAULT);
            $prepare->execute([$email,$username,$hash]);
            Prihlasenie::login($username,$password);
            $this->redirect('home');
    }
    public function register()
    {
        return $this->html();
    }

    public function zmenaHesla() {
        return $this->html();
    }
    public function zmenaHeslaa() {
       $heslo =$this->request()->getValue('heslo');
        $uzivatel = login::getAll('Password = ?', [$heslo]);
        if(sizeof($uzivatel) > 0) {
                $new = $this->request()->getValue('new');
                $repeat = $this->request()->getValue('repeat');
                if($new == $repeat) {
                    $prepare = Connection::connect()->prepare('UPDATE login SET Password = ? WHERE Password = ?;');
                    $prepare->execute([$new,$heslo]);
                    $this->redirect('home');
                }

        }

    }
}