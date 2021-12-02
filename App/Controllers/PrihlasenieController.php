<?php

namespace App\Controllers;

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
                $this->redirect('Prihlasenie','loginform',['error' => 'Zle meno alebo heslo']);
            }
        } else {
            $this->redirect('Prihlasenie','loginform',['error' => 'Zle meno alebo heslo']);
        }
       /* $logged = Prihlasenie::login($login,$password);
        if ($logged) {
            $this->redirect('home');
        } else {
            $this->redirect('Prihlasenie','loginform',['error' => 'Zle meno alebo heslo']);
        }*/
    }
    public function logout() {
        Prihlasenie::logout();
        $this->redirect('home');
    }
}