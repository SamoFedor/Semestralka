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

        $login = $this->request()->getValue('login_name');
        $password = $this->request()->getValue('login_password');
        $heslo =  login::getAll('Username=?',[$login]);
        $heslo = $heslo[0]->getPassword();

        $uzivatel = login::getAll('Username = ?', [$login]);
        if(sizeof($uzivatel) > 0 ) {
            if (password_verify($password,$heslo)) {
                Prihlasenie::login($login,$password);
                $this->redirect('home');
            } else {
                $this->redirect('Prihlasenie','loginform',['error' => 'Zle zadane meno alebo heslo']);
            }
        } else {
            $this->redirect('Prihlasenie','loginform',['error' => 'Zle zadane meno alebo heslo']);
        }

    }
    public function zmenaHeslaa() {
        $povodne =$this->request()->getValue('povodnePassword');
        $noveHeslo =$this->request()->getValue('Password');
        $noveRepeat =$this->request()->getValue('repeatPassword');
        $username = Prihlasenie::getName();
        if($username=="") {
            return $this->json('Nemate povolenie');
        }
        $heslo =  $_SESSION['Heslo'];

        if($povodne != $heslo){
            return $this->json('Heslo sa nezhoduje');
        }
        if($noveRepeat != $noveHeslo){
            return $this->json('Nove hesla sa musia rovnat');
        }
        $_SESSION['Heslo'] = $noveHeslo;
        $noveHeslo = password_hash($noveHeslo,PASSWORD_DEFAULT);
        $prepare = Connection::connect()->prepare('UPDATE login SET Password = ? WHERE Username = ?;');
        $prepare->execute([$noveHeslo,$username]);
        return  $this->json('Heslo je zmenené');
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

}