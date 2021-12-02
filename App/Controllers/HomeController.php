<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\DB\Connection;
use App\Models\Hrac;
use App\Models\Teams;
use App\Prihlasenie;

/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerRedirect
{

    public function index()
    {

        $team = Teams::getAll();
        return $this->html(
            [
                'team' => $team
            ]);
    }

    public function upload() /*INSERT INTO*/
    {
        if(!Prihlasenie::isLogged()){
            $this->redirect('home');
        }
        if(isset($_FILES['files'])){
            if($_FILES["files"]['error'] == UPLOAD_ERR_OK){
                $name = date('Y-a-d-H-i-s_') . $_FILES['files']['name'];
                $menoHraca = $this->request()->getValue('meno');    // request meno hraca z formulara
                $priezvisko= $this->request()->getValue('priezvisko'); // same
                move_uploaded_file($_FILES['files']['tmp_name'],Configuration::UPLOAD_DIR . "$name"); //premiestni subor od uzivatela na server
                $prepare = Connection::connect()->prepare('INSERT into hrac (Obrazok,Meno,Priezvisko) values(?,?,?);'); // priprava SQL prikazu
                $prepare->execute([$name,$menoHraca,$priezvisko]); //vykonanie SQL prikazu
                $this->redirect('players','player', ['priezvisko' => $priezvisko]); //premiestnenie
            }
        }
       /* $this->redirect('home');*/

    }
    public  function post()
    {
        if(!Prihlasenie::isLogged()) {
            $this->redirect('home');
        } else{
            return $this->html();
        }

        $priezvisko = $this->request()->getValue('priezvisko');
        $jeTam = Hrac::getAll('priezvisko= ?',[$priezvisko]);
        if(sizeof($jeTam) < 0 ) {
                $this->redirect('home');
            } else {
                $this->redirect('Home','post',['error' => 'Hrac uz existuje']);
            }

    }




}