<?php

namespace App\Controllers;
use App\Core\DB\Connection;
use App\Models\Login;
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
            [
                'error' => $this->request()->getValue('error')
            ]
        );

    }
    public function login() {
        $login = $this->request()->getValue('login');
        $password = $this->request()->getValue('password');
        $uzivatel = Login::getAll('Meno = ?', [$login]);
        if(sizeof($uzivatel) > 0 ) {
            if ($uzivatel[0]->Heslo == $password) {
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
        $username = $this->request()->getValue('username');
        $password = $this->request()->getValue('password');
        $uzivatel = Login::getAll('Meno = ?', [$username]);
        if(sizeof($uzivatel) > 0 ) {
            $this->redirect('Prihlasenie','register',['error' => 'Zadane meno uz existuje']);
        }
            $prepare = Connection::connect()->prepare('INSERT into login (Meno,Heslo) values(?,?);');
            $this->Heslo =password_hash($password,PASSWORD_DEFAULT);
            password_verify($password,$this->Heslo);
            $prepare->execute([$username,$password]); //vykonanie SQL prikazu
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
        $uzivatel = Login::getAll('Heslo = ?', [$heslo]);
        if(sizeof($uzivatel) > 0) {
            if ($uzivatel[0]->Heslo == $heslo) {
                $new = $this->request()->getValue('new');
                $repeat = $this->request()->getValue('repeat');
                if($new == $repeat) {
                    $prepare = Connection::connect()->prepare('UPDATE login SET Heslo = ? WHERE Heslo = ?;');
                    $prepare->execute([$new,$heslo]);
                    $this->redirect('home');
                }
            }
        }

    }
}